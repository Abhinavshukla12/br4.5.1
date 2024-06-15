<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainModel extends Model
{
    protected $table      = 'trains'; // Assuming the table name is 'trains'
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['train_number', 'departure_station', 'arrival_station', 'departure_date', 'available_seats'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
