<h1>User Login</h1>
<form action="user" method="POST">
    {{method_field('DELETE')}}
    @csrf
    <input type="text" name="username" placeholder="enter the user id"/><br/>
    <span style="color:red">@error('username'){{$message}}@enderror</span>
    <br/>
    <input type="password" name="userpassword" placeholder="enter the user password"/><br/>
    <span style="color:red">@error('userpassword'){{$message}}@enderror</span>
    <br/>
    <button type="submit" >Login</button>
</form>