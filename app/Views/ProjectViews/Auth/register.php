<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="<?=base_url('Assets/css/Auth/register/main.css')?>">
</head>
<body>
    <h2>Register</h2>
    <form action="<?=base_url('project/auth/store')?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
