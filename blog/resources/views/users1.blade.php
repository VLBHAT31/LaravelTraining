<h1>Users login</h1>
<!-- @if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif -->
<form action="users1" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter the user id"/><br/>
    <span style="color:red">@error('username'){{$message}}@enderror</span>
    <br/>
    <input type="password" name="userpassword" placeholder="enter the user password"/><br/>
    <span style="color:red">@error('userpassword'){{$message}}@enderror</span>
    <br/>
    <button type="submit" >Login</button>
</form>