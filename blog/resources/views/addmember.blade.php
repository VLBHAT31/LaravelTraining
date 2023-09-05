<h1>Add members</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter the name"><br>
    <input type="email" name="email" placeholder="Enter the email"><br>
    <input type="text" name="address" placeholder="Enter the address"><br>
    <button type="submit">Add member</button>
</form>