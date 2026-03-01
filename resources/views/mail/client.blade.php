<html>
    <body>
        <p><strong>Invoice Details</strong></p>
        <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <th>Field Name</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>{{ $mailData['full_name'] }}</td>
            </tr>
            <tr>
                <td>Father / Husband Name</td>
                <td>{{ $mailData['father_husband_name'] }}</td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td>{{ $mailData['mobile_number'] }}</td>
            </tr>
            <tr>
                <td>Email ID</td>
                <td>{{ $mailData['email_id'] }}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>{{ $mailData['address'] }}</td>
            </tr>
            <tr>
                <td>Aadhaar Number</td>
                <td>{{ $mailData['aadhaar_number'] }}</td>
            </tr>
            <tr>
                <td>PAN Number</td>
                <td>{{ $mailData['pan_number'] }}</td>
            </tr>
            <tr>
                <td>Aadhaar File</td>
                <td>{{ $mailData['aadhaar_file'] }}</td>
            </tr>
            <tr>
                <td>PAN File</td>
                <td>{{ $mailData['pan_file'] }}</td>
            </tr>
            <tr>
                <td>DOB</td>
                <td>{{ $mailData['dob'] }}</td>
            </tr>
            <tr>
                <td>Nationality</td>
                <td>{{ $mailData['nationality'] }}</td>
            </tr>
            <tr>
                <td>Quota</td>
                <td>{{ $mailData['quota'] }}</td>
            </tr>
            <tr>
                <td>Amount</td>
                <td>{{ $mailData['amount'] }}</td>
            </tr>
            <tr>
                <td>Razorpay Order Id</td>
                <td>{{ $mailData['rzp_order_id'] }}</td>
            </tr>
            <tr>
                <td>Razorpay Payment Id</td>
                <td>{{ $mailData['payment_id'] }}</td>
            </tr>
            <tr>
                <td>Razorpay Payment Status</td>
                <td>{{ $mailData['PaymentSTS'] }}</td>
            </tr>
            <tr>
                <td>Time</td>
                <td>{{ $mailData['time'] }}</td>
            </tr>
        </table>
    </body>
</html>