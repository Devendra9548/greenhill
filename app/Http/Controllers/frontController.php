<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Query;
use Mail;
use App\Mail\ContactMail;
use App\Mail\ClientMail;
use App\Mail\QueryMail;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Google\Client;
use Google\Service\Sheets;
use App\Services\GoogleSheetService;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Utility;

class frontController extends Controller
{
    function thankyou(){
        return view('thank-you');
    }
    function registration(){
        return view('registration');
    }
    function TermsConditions(){
        return view('terms-and-condition');
    }
    function index(){
        return view('template');
    }
    function privacypolicy(){
        return view('privacy-policy');
    }
    function refundpolicy(){
        return view('refund-policy');
    } 
    function old(){
        return view('template-3');
    }

    function registernow(Request $req){

        $data = $req->validate([
            'full_name' => 'required',
            'father_husband_name' => 'required',
            'mobile_number' => 'required',
            'email_id' => 'required',
            'address' => 'required',
            'aadhaar_number' => 'required',
            'pan_number' => 'required',
            'dob' => 'required',
            'nationality' => 'required',
            'quota' => 'required',
        ]);

        $aadhaarfile=null;
        $panfile=null;

        if($req->hasfile('aadhaar_file')){
            $file = $req->file('aadhaar_file');
            $name = $file->getClientOriginalName();
            $t=time();
            $d=date('ymd', $t);
            $aadhaarfile=$d.'-'.$t.'-'.$name; 
            $customefolderpath=public_path('aadhar');
            if(!file_exists($customefolderpath)){
                mkdir($customefolderpath, 0755, true);
            }
            $file->move($customefolderpath, $aadhaarfile);
        }

        if($req->hasfile('pan_file')){
            $files = $req->file('pan_file');
            $names = $files->getClientOriginalName();
            $ts=time(); 
            $ds=date('ymd', $ts);
            $panfile=$ds.'-'.$ts.'-'.$names; 
            $customefolderpathforpen=public_path('pencard');
            if(!file_exists($customefolderpathforpen)){
                mkdir($customefolderpathforpen, 0755, true);
            }
            $files->move($customefolderpathforpen, $panfile);
        }


        $time=time();
        $date=date("Ymd",$time);
        $orderid = $date."".$time;

        $dbs = new Contact();
        $dbs->full_name = $req->full_name; 
        $dbs->father_husband_name = $req->father_husband_name; 
        $dbs->mobile_number = $req->mobile_number; 
        $dbs->email_id = $req->email_id; 
        $dbs->address = $req->address; 
        $dbs->aadhaar_number = $req->aadhaar_number; 
        $dbs->pan_number = $req->pan_number; 
        $dbs->aadhaar_file = $aadhaarfile; 
        $dbs->pan_file = $panfile; 
        $dbs->dob = $req->dob; 
        $dbs->nationality = $req->nationality; 
        $dbs->quota = $req->quota; 
        $dbs->orderid = $orderid; 
        $dbs->amount = 1;
        $dbs->paystatus = 'pending';
        $dbs->paymethod = "Razorpay";
        $result = $dbs->save();

        $sheet = new GoogleSheetService();

        $sheet->addRow([
            $req->full_name,
            $req->father_husband_name,
            $req->mobile_number,
            $req->email_id,
            $req->address,
            $req->aadhaar_number,
            $req->pan_number,
            $req->dob,
            $req->nationality,
            $req->quota
        ]);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_KEY_SECRET'));
        $rzpOrder = $api->order->create(
          array('receipt' => 'ORD_'.$dbs->id,
           'amount' => 1*100,
           'currency' => 'INR',
        ));
  
        $nord = Contact::find($dbs->id);
        $nord->rzp_order_id	= $rzpOrder->id;
        $nord->update();
        return response()->json([
          "success"=>true,
          "order_id"=>$dbs->id,
          "amount"=>1*100,
          "rzp_order_id"=>$rzpOrder->id
        ]);

        if($res){
            return true;
        }
        else{
            return false;
        }
    }

 
    function querynow(Request $req){
        $data = $req->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
          
        $mailData = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'message' => $req->message,
        ];
          
        Mail::to('info@greenhillplots.com')->send(new QueryMail($mailData));
        
        $res = Query::create($data);

        if($res){
            return true;
        }
        else{
            return false;
        }

    }

    public function success(Request $req)
    {
        $razOrderId = $req->razorpay_order_id;
        $razPaymentId = $req->razorpay_payment_id;
    
        $order = Contact::where("rzp_order_id", $razOrderId)->first();
    
        if (!$order) {
            return redirect()->route('cancel');
        }
    
        $order->paystatus = 'success';
        $order->payment_id = $razPaymentId;
        $order->save();
    
        $mailData = [
            'full_name' => $order->full_name,
            'father_husband_name' => $order->father_husband_name,
            'mobile_number' => $order->mobile_number,
            'email_id' => $order->email_id,
            'address' => $order->address,
            'aadhaar_number' => $order->aadhaar_number,
            'pan_number' => $order->pan_number,
            'aadhaar_file' => $order->aadhaar_file,
            'pan_file' => $order->pan_file,
            'dob' => $order->dob,
            'nationality' => $order->nationality,
            'quota' => $order->quota,
            'amount' => $order->amount,
            'rzp_order_id' => $order->rzp_order_id,
            'payment_id' => $order->payment_id,  
            'PaymentSTS' => $order->paystatus,   
            'time' => $order->updated_at
        ];
    
        Mail::to('info@greenhillplots.com')->send(new ContactMail($mailData));
        Mail::to($order->email_id)->send(new ClientMail($mailData));
        return redirect()->route('thankyou');
    }
  

    public function cancel(Request $request)
    {
        $orderId   = $request->query('order_id');
        $paymentId = $request->query('payment_id');
        $status    = $request->query('paystatus', 'failed');
    
        if (!$orderId) {
            return redirect('/')->with('error', 'Order ID missing!');
        }
    
        $order = Contact::where("rzp_order_id", $orderId)->first();
    
        if (!$order) {
            return redirect('/')->with('error', 'Order not found!');
        }
    
        // Already paid check
        if ($order->paystatus == 'success') {
            return view('thankyou');
        }
    
        if ($paymentId) {
            $order->payment_id = $paymentId;
        }
    
        $order->paystatus = ($status == 'closed') ? 'window_closed' : 'fail';
        $order->save();
    
        $mailData = [
            'full_name' => $order->full_name,
            'father_husband_name' => $order->father_husband_name,
            'mobile_number' => $order->mobile_number,
            'email_id' => $order->email_id,
            'address' => $order->address,
            'aadhaar_number' => $order->aadhaar_number,
            'pan_number' => $order->pan_number,
            'aadhaar_file' => $order->aadhaar_file,
            'pan_file' => $order->pan_file,
            'dob' => $order->dob,
            'nationality' => $order->nationality,
            'quota' => $order->quota,
            'amount' => $order->amount,
            'rzp_order_id' => $order->rzp_order_id,
            'payment_id' => $order->payment_id ?? 'N/A',
            'PaymentSTS' => $order->paystatus,
            'time' => $order->updated_at
        ];
    
        Mail::to('info@greenhillplots.com')
            ->send(new ContactMail($mailData));
        
        Mail::to($order->email_id)->send(new ClientMail($mailData));
    
        return view('cancel', compact('orderId', 'status'));
    }

    public function handleWebhook(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    
        try {
            $webhookSecret = env('RAZORPAY_WEBHOOK_SECRET');
            $signature = $request->header('X-Razorpay-Signature');
            $payload = $request->getContent();
    
            $data = $request->all();
            $event = $data['event'] ?? null;
    
            if ($event !== 'payment.failed') {
                if (!$signature) {
                    Log::error('Missing signature for event: ' . $event);
                    return response()->json(['error' => 'Missing signature'], 400);
                }
    
                $utility = new Utility();
                $utility->verifyWebhookSignature($payload, $signature, $webhookSecret);
            }
    
            Log::info('Razorpay Webhook Verified:', $data);
    
            $paymentId = $data['payload']['payment']['entity']['id'] ?? null;
            $orderId = $data['payload']['payment']['entity']['order_id'] ?? null;
            $amount = isset($data['payload']['payment']['entity']['amount']) 
                        ? $data['payload']['payment']['entity']['amount'] / 100 
                        : 0;
    
            $failureReason = $data['payload']['payment']['entity']['error_description'] ?? 'Unknown reason';
    
            $order = Contact::where('rzp_order_id', $orderId)->first();
    
            if (!$order) {
                Log::error("Order with Razorpay Order ID {$orderId} not found.");
                return response()->json(['error' => 'Order not found'], 404);
            }
    
            if ($event == 'payment.captured') {
    
                $order->paystatus = 'success';
                $order->payment_id = $paymentId;
                $order->amount = $amount;
                $order->signature = $signature;
                $order->save();
    
            } elseif ($event == 'payment.failed') {
    
                $order->paystatus = 'failed';
                $order->payment_id = $paymentId;
                $order->failure_reason = $failureReason;
                $order->save();
            }
    
            $mailData = [
                'full_name' => $order->full_name,
                'father_husband_name' => $order->father_husband_name,
                'mobile_number' => $order->mobile_number,
                'email_id' => $order->email_id,
                'address' => $order->address,
                'aadhaar_number' => $order->aadhaar_number,
                'pan_number' => $order->pan_number,
                'aadhaar_file' => $order->aadhaar_file,
                'pan_file' => $order->pan_file,
                'dob' => $order->dob,
                'nationality' => $order->nationality,
                'quota' => $order->quota,
                'amount' => $order->amount,
                'rzp_order_id' => $order->rzp_order_id,
                'payment_id' => $order->payment_id,
                'PaymentSTS' => $order->paystatus,
                'time' => $order->updated_at
            ];
    
            Mail::to('info@greenhillplots.com')
                ->send(new ContactMail($mailData));
            
            Mail::to($order->email_id)
                ->send(new ClientMail($mailData));
    
            return response()->json(['status' => 'success']);
    
        } catch (\Exception $e) {
            Log::error('Webhook Verification Failed: ' . $e->getMessage());
            return response()->json(['error' => 'Invalid webhook signature'], 400);
        }
    }

    
}
