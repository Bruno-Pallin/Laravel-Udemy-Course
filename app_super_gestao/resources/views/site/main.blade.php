<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Home View</h3>
    <ul>
        <li><a href="{{ route('site.index') }}">Home</a></li>
        <li><a href="{{ route('site.about-us') }}">About-Us</a></li>
        <li><a href="{{ route('site.contact') }}">Contact</a></li>
    </ul>
</body>
</html>