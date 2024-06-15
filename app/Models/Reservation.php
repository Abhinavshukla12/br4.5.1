<?php

namespace App\Models;

use CodeIgniter\Model;

class Reservation extends Model
{
    protected $table      = 'reservations';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['user_id', 'train_number', 'departure_station', 'arrival_station', 'departure_date', 'seat_number'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
