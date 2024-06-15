<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?=base_url('Assets/css/Auth/login/main.css')?>">
</head>
<body>
    <h2>Login</h2>
    <?php if(session()->getFlashdata('msg')):?>
        <div><?= session()->getFlashdata('msg') ?></div>
    <?php endif;?>
    <form action="<?=base_url('project/auth/authenticate')?>" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>