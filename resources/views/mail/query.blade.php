<html>
    <body>
        <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <th>Field Name</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>{{ $mailData['name'] }}</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{ $mailData['phone'] }}</td>
            </tr>
            <tr>
                <td>email</td>
                <td>{{ $mailData['email'] }}</td>
            </tr>
            <tr>
                <td>message</td>
                <td>{{ $mailData['message'] }}</td>
            </tr>
        </table>
    </body>
</html>