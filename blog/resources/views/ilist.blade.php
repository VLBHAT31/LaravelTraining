<h1>Ilist page</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
        <td>operation</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['address']}}</td>
        <td>
            <a href={{"delete/".$user['id']}}>Delete</a>
            <a href={{"edit/".$user['id']}}>Edit</a>
        </td>
    </tr>
    @endforeach
</table>