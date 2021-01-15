<h2>Welcome from pagination list</h2>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>

    @foreach($members as $member)
        <tr>
            <td>{{$member['id']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['email']}}</td>
            <td>{{$member['address']}}</td>
        </tr>
    @endforeach
</table>

<p>
    {{$members->links()}}
</p>

<style>
    .w-5{
        width: 25px;
    }
</style>
