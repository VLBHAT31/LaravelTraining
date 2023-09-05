<h1>Update Page</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}"/><br/>
    <input type="text" name="name" value="{{$data['name']}}" placeholder="enter the user name"/><br/>
    <input type="email" name="email" value="{{$data['email']}}" placeholder="enter the user email"/><br/>
    <input type="text" name="address" value="{{$data['address']}}" placeholder="enter the user address"/><br/>
    <button>Update</button>
</form>