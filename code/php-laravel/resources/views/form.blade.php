
<form action="/post" method="POST">
    <p>Username</p>
    @csrf
    <div>
        <input type="text" name="username">
    </div>
    
    <p>Password</p>
    <div>
        <input type="password" name="password">
    </div>
    <br>
    <div>
        <button type="submit">Login</button>
    </div>
</form>