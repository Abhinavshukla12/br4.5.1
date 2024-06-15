<?= $this->extend('ProjectViews/layouts/main') ?>

<?= $this->section('title') ?>Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Profile Details</h1>
<p>Username: <?= $user['username']; ?></p>
<p>Email: <?= $user['email']; ?></p>
<a href="<?=base_url('project/editProfile')?>">Edit Profile</a>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin-top: 50px;
}

p {
    text-align: center;
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

.button-container {
    text-align: center;
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
<?= $this->endSection() ?>
