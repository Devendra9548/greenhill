<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;


Route::get('/', [frontController::class, 'index']);
Route::get('privacy-policy', [frontController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('registration', [frontController::class, 'registration'])->name('registration');
Route::get('refund-policy', [frontController::class, 'refundpolicy'])->name('refundpolicy');
Route::get('terms-and-conditions', [frontController::class, 'TermsConditions'])->name('TermsConditions');
Route::post('registernow', [frontController::class, 'registernow'])->name('registernow');
Route::post('querynow', [frontController::class, 'querynow'])->name('querynow');
Route::get('thank-you', [frontController::class, 'thankyou'])->name('thankyou');
Route::get('old', [frontController::class, 'old']);

Route::post('/webhook/razorpay', [frontController::class, 'handleWebhook']);
Route::post('success-payment', [frontController::class, 'success'])->name('successpay');
Route::get('cancel', [frontController::class, 'cancel'])->name('cancel');

