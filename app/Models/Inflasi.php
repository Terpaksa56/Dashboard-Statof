<?php

namespace App\Models;

use CodeIgniter\Model;

class Inflasi extends Model
{
    protected $table = 'inflasi';
    protected $primaryKey = 'ID';
    protected $returnType = 'object';
    protected $allowedFields = ['keterangan', '2022', '2021','2020','2019','2018'];
}