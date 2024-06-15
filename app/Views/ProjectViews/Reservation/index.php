<?= $this->extend('ProjectViews/layouts/main') ?>

<?= $this->section('title') ?>Reservations<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Your Reservations</h1>
<a class="button_a" href="<?=base_url('project/reservation/create')?>">Book a New Train</a>
<ul>
    <?php foreach ($reservations as $reservation): ?>
        <li class="index">
            <strong>Train Number:</strong> <?= $reservation['train_number'] ?><br>
            <strong>Departure Station:</strong> <?= $reservation['departure_station'] ?><br>
            <strong>Arrival Station:</strong> <?= $reservation['arrival_station'] ?><br>
            <strong>Departure Date:</strong> <?= $reservation['departure_date'] ?><br>
            <strong>Seat Number:</strong> <?= $reservation['seat_number'] ?><br>
            <a href="<?=base_url('project/reservation/delete/')?><?= $reservation['id'] ?>">Cancel</a>
            <a href="<?=base_url('project/reservation/edit/')?><?= $reservation['id'] ?>">Edit</a>
            <a href="<?=base_url('project/reservation/view/')?><?= $reservation['id'] ?>">View</a>
        </li>
    <?php endforeach; ?>
</ul>
<style>
    /* body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
} */

h1 {
    text-align: center;
    margin-top: 50px;
}

ul {
    list-style: none;
    padding: 0;
}

.index {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

strong {
    font-weight: bold;
}

.button_a {
    height: 150px;
    width: 300px;
    background-color: grey;
    text-decoration: none;
    color: #fff;
}

.button_a:hover {
    text-decoration: underline;
}

</style>
<?= $this->endSection() ?>