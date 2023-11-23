<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css2.css">
    <title>Document</title>
</head>
<body>
    <body>
        <div class="form-container">
            @if(session("error"))
            <div class="alert alert-danger">{{session("error")}}</div>
            @endif
            <form class="post form-container" action={{url("/login")}} method="POST" >
                @method("POST")
                @csrf
                <h3>Login Now</h3>
                <input type="text" name="username" required placeholder="enter your username">
                <br>
                <input type="password" name="password" required placeholder="enter your password">
                <br>
                <br>
                <input type="submit" name="submit" value="login now" class="form-btn">
                <p>don't have account yet? <a href=register.php>register now</a></p>
            </form>
    </div>
    </body>
</body>
</html>
