<h1>Add Member</h1>
@if(session('username'))
    <h3 style="color: green">{{session('username')}} user has been added</h3>//here session(flash_session_store_key)
@endif
<form action="addingMember" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter user name"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="email" name="useremail" placeholder="Enter user email"><br><br>
    <button type="submit">Add member</button>
</form>
