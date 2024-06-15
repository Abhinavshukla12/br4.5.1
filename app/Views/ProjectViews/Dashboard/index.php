<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?=base_url('Assets/css/Dashboard/main.css')?>">
</head>
<body>
    <h1>Welcome, <?= $username; ?></h1>
    <p>Email: <?= $email; ?></p>
    <nav>
        <ul>
            <li><a href="<?=base_url('project/dashboard')?>">Dashboard</a></li>
            <li><a href="<?=base_url('project/profile')?>">Profile</a></li>
            <li><a href="<?=base_url('project/logout')?>">Logout</a></li>
        </ul>
    </nav>
</body>
</html>
