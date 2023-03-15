<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <h4>Name => {{Auth::user()->name}}</h4>
    <h4>Tier => {{Auth::user()->tier}}</h4>
    <h4>Email => {{Auth::user()->email}}</h4>

    <form action="{{route('logout')}}" method="post">
        @csrf

        <button> Logout </button>
    </form>
</body>
</html>