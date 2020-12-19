<h1>Working with form</h1>
<form action="form" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id"/> <br>
    <input type="password" name="userpassword" placeholder="enter user password"/> <br>
    <button type="submit" >Login</button>
</form>
