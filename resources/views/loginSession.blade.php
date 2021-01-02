<h1>Login with session</h1>

<form action="loginWithSession" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id"/> <br><br>
    <input type="password" name="userpassword" placeholder="enter user password"/> <br><br>
    <button type="submit" >Login</button>
</form>
