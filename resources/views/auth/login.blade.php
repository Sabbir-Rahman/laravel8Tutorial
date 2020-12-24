<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h2>User login</h2>
<form action="{{ route('auth.check') }}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id"/> <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="enter user password"/> <br>
    <span style="color: red">@error('password'){{$message}}@enderror</span>
    <br>
    <button type="submit" >Login</button>
    <button type="button">Register</button>
</form>
</body>
</html>
