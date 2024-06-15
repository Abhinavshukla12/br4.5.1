<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="<?=base_url('Assets/css/Dashboard/main.css')?>">
</head>
<body>
    <h1>Profile Details</h1>
    <p>Username: <?= $user['username']; ?></p>
    <p>Email: <?= $user['email']; ?></p>
    <nav>
        <ul>
            <li><a href="<?=base_url('project/dashboard')?>">Dashboard</a></li>
            <li><a href="<?=base_url('project/profile')?>">Profile</a></li>
            <li><a href="<?=base_url('project/logout')?>">Logout</a></li>
        </ul>
    </nav>
</body>
</html>
