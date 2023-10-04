<?php
if (isset($_SESSION["user_id"])) {
  header("location: /");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<body>
    <header>
        <p>Register</p>
    </header>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" id="name" value="qwer">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username" id="username" value="qwer">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" placeholder="Email" id="email" value="qwer@gmail.com">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" id="password" autocomplete="on" value="qwer">
        </div>
        <div>
            <label for="confirm-password">Konfirmasi Password</label>
            <input type="password" name="confirm-password" placeholder="Konfirmasi Password" id="confirm-password" autocomplete="on" value="qwer">
        </div>
        <div>
            <button type="submit">Sign up</button>
        </div>
    </form>
    <div>
        <p>Sudah punya akun? <a href="/login">Login</a>.</p>
    </div>
</body>
</html>