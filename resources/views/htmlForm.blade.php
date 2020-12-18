<h1>User Login</h1>

<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user name">
    <br>
    <br>
    <input type="password" name="password" placeholder="Enter password">
    <button type="submit">submit</button>

</form>