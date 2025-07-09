<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
</head>
<body>
    <h2>Thank you, {{ $data['name'] }}!</h2>
    <p>We’ve received your message. Here is a summary of what you submitted:</p>

    <ul>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Phone:</strong> {{ $data['phone'] }}</li>
        <li><strong>Inquiry About:</strong> {{ $data['inquiry'] }}</li>
        @if(!empty($data['theme']))
        <li><strong>Selected Theme:</strong> {{ $data['theme'] }}</li>
        @endif
        <li><strong>Message:</strong> {{ $data['message'] }}</li>
    </ul>

    <p>We’ll contact you as soon as possible.</p>
</body>
</html>
