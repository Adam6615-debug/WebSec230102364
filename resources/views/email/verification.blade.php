<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            color: #4CAF50;
        }
        .message {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Account Verification</h2>
        </div>
        <div class="message">
            <p>Dear {{$name}},</p>
            <p>Thank you for registering with us! To complete your registration and verify your account, please click on the link below:</p>
        </div>
        <p style="text-align: center;">
            <a href="{{$link}}" class="button" target="_blank">Verify Your Account</a>
        </p>
        <div class="footer">
            <p>If you did not create an account, please ignore this email.</p>
            <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
