<!DOCTYPE html>
<html>
<head>
    <title>Ask Ana from Client</title>
</head>
<body>
    <h3>From {{ $questionData['user_name'] }}</h3>
    <h5>{{ $questionData['user_email'] }}</h5>
    <p>{{ $questionData['content'] }}</p>
</body>
</html>