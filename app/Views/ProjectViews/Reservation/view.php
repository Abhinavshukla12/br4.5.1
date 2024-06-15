<?= $this->section('title') ?>Reservation Details<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Reservation Details</h1>
<div id="reservation-details">
    <p><strong>Train Number:</strong> <?= $reservation['train_number'] ?></p>
    <p><strong>Departure Station:</strong> <?= $reservation['departure_station'] ?></p>
    <p><strong>Arrival Station:</strong> <?= $reservation['arrival_station'] ?></p>
    <p><strong>Departure Date:</strong> <?= $reservation['departure_date'] ?></p>
    <p><strong>Seat Number:</strong> <?= $reservation['seat_number'] ?></p>
</div>
<button onclick="window.print()">Print</button>
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

#reservation-details {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

#reservation-details p {
    margin: 0;
    margin-bottom: 10px;
}

strong {
    font-weight: bold;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

</style>