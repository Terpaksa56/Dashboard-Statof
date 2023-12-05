<?php

namespace App\Models;

use CodeIgniter\Model;

class IndeksYangMempengaruhi extends Model
{
    protected $table = 'indeks_yang_mempengaruhi';
    protected $primaryKey = 'ID';
    protected $returnType = 'object';
    protected $allowedFields = ['Keterangan', '2022', '2021','2020','2019','2018'];
}