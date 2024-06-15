<!DOCTYPE html>
<html>
<head>
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="<?=base_url('Assets/css/main.css')?>">
    <link rel="stylesheet" href="<?=base_url('Assets/css/print.css')?>">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

nav {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

.success {
    background-color: #28a745;
    color: #fff;
    padding: 10px;
    text-align: center;
    margin-bottom: 10px;
}

.container {
    width: 80%;
    margin: 0 auto;
}

.card {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.card h1 {
    margin-bottom: 10px;
}

.card p {
    margin-bottom: 20px;
}

.button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?=base_url('project/dashboard')?>">Dashboard</a></li>
            <li><a href="<?=base_url('project/profile')?>">Profile</a></li>
            <li><a href="<?=base_url('project/reservation')?>">Reservation</a></li>
            <li><a href="<?=base_url('project/logout')?>">Logout</a></li>
        </ul>
    </nav>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?= $this->renderSection('content') ?>
</body>
</html>
