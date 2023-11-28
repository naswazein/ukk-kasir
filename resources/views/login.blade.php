<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css2.css">
</head>
<body>
    <div class="form-container">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form class="post" action={{ url('/login') }} method="POST">
            @method('POST')
            @csrf
            <h3>Login Now</h3>
            <h5>Login Admin dan Petugas</h5>
            <input type="text" name="username" required placeholder="enter your username">
            <br>
            <input type="password" name="password" required placeholder="enter your password">
            <br>
            <br>
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have account yet? <a href="register.php">register now</a></p>
        </form>
    </div>
</body>
</html>
