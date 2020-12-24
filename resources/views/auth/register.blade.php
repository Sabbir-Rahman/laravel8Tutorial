<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h2>User register</h2>
<form action="{{ route('auth.create') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter full name" value="{{ old('name') }}"/> <br>
    <span style="color: red">@error('name'){{$message}}@enderror</span>
    <br>
    <input type="text" name="username" placeholder="enter user name" value="{{ old('username') }}"/> <br>
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
