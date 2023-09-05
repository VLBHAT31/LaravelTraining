<h1>Add Member</h1>
@if(session('user') && is_string(session('user')))
<h3 style='color: green'>{{session('user')}} user has been added</h3>
@endif
<form action="addmember" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter the user id"/><br/>
    <input type="password" name="password" placeholder="enter the user password"/><br/>
    <input type="email" name="email" placeholder="enter the user email"/><br/>
    <button>Add Member</button>
</form>