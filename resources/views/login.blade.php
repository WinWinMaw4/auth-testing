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
    <form action="{{route('login')}}" method="post">
        @csrf
        <label >Email</label>
        <input type="text" name="email" require disabled>
        <br>
        <label >Phone</label>
        <input type="text" name="phone" require>
        <br>
        <label for="">password</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Log in</button>
    </form>
</body>
</html>