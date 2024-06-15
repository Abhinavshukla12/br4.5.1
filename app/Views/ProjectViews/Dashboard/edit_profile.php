<?= $this->extend('ProjectViews/layouts/main') ?>

<?= $this->section('title') ?>Edit Profile<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Edit Profile</h1>
<form action="<?=base_url('project/updateProfile')?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" value="<?= $user['username']; ?>" required>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" value="<?= $user['email']; ?>" required>
    <br>
    <button type="submit">Update Profile</button>
</form>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
}

form {
    width: 300px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
button[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
<?= $this->endSection() ?>
