<?php

namespace App\Models;

use CodeIgniter\Model;

class KepadatanPenduduk extends Model
{
    protected $table = 'kepadatan';
    protected $primaryKey = 'ID';
    protected $returnType = 'object';
    protected $allowedFields = ['Kepadatan', '2022', '2021','2020','2019','2018'];
}
