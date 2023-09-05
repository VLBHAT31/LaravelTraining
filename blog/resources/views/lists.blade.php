<h1>Members list</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['address']}}</td>
    </tr>
    @endforeach
</table>

<span>
    {{$users->links()}}
</span>

<style>
    .w-5{
        display:none;
    }
</style>