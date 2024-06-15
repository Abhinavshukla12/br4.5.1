<?= $this->extend('ProjectViews/layouts/main') ?>

<?= $this->section('title') ?>Edit Reservation<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Edit Reservation</h1>
<form action="<?=base_url('project/reservation/update/')?><?= $reservation['id'] ?>" method="post">
    <?= csrf_field() ?>
    <label for="train_number">Train Number</label>
    <input type="text" name="train_number" value="<?= $reservation['train_number'] ?>" required>
    <br>
    <label for="departure_station">Departure Station</label>
    <input type="text" name="departure_station" value="<?= $reservation['departure_station'] ?>" required>
    <br>
    <label for="arrival_station">Arrival Station</label>
    <input type="text" name="arrival_station" value="<?= $reservation['arrival_station'] ?>" required>
    <br>
    <label for="departure_date">Departure Date</label>
    <input type="date" name="departure_date" value="<?= $reservation['departure_date'] ?>" required>
    <br>
    <label for="seat_number">Seat Number</label>
    <input type="text" name="seat_number" value="<?= $reservation['seat_number'] ?>" required>
    <br>
    <button type="submit">Update</button>
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
    margin-top: 50px;
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
input[type="date"],
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
