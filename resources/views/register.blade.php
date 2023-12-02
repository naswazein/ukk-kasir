<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="css2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="form-container">
        <form class="post" action={{ url('/register') }} method="POST">
            @method("POST")
            @csrf
            <h3>Register Now</h3>
            <input type="text" name="id" required placeholder="enter your id">
            <br>
            <input type="text" name="name" required placeholder="enter your name">
            <br>
            <input type="text" name="username" required placeholder="enter your username">
            <br>
            <input type="password" name="password" required placeholder="enter your password">
            <br>
            <select name="user_type" class="user">
                <option value="user">admin</option>
                <option value="admin">petugas</option>
            </select>
            <br>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an acount? <a href=login>Login now</a></p>
        </form>

</div>
</body>
</form>
</html>
