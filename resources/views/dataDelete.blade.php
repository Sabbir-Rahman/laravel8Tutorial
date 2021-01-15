<h2>Welcome to data delete</h2>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Delete</td>
    </tr>

    @foreach($members as $member)
        <tr>
            <td>{{$member['id']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['email']}}</td>
            <td>{{$member['address']}}</td>
            <td><a href="{{"delete/".$member['id']}}">Delete</a> </td>
        </tr>
    @endforeach
</table>
