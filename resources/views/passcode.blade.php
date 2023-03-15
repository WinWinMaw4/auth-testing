<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h3>Log In</h3>
    <form action="{{route('passCodeLoginAccount')}}" method="post">
        @csrf
        <label for="">Pass Code</label>
        <input type="text" name="passcode">
        <br>
        <button type="submit">Log in</button>
    </form>
</body>
</html>