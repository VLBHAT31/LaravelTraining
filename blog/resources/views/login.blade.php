<h1>User Login</h1>
<form action="user6" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter the user id"/><br/>
    <input type="password" name="userpassword" placeholder="enter the user password"/><br/>
    <button type="submit" >Login</button>
</form>