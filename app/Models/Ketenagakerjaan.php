<?php

namespace App\Models;

use CodeIgniter\Model;

class Ketenagakerjaan extends Model
{
    protected $table = 'ketenagakerjaan';
    protected $primaryKey = 'ID';
    protected $returnType = 'object';
    protected $allowedFields = ['Keterangan', '2022', '2021','2020','2019','2018'];
}