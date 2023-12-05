<?php

namespace App\Models;

use CodeIgniter\Model;

class AngkaHarapanHidup extends Model
{
    protected $table = 'angka_harapan_hidup';
    protected $primaryKey = 'ID';
    protected $returnType = 'object';
    protected $allowedFields = ['keterangan', '2022', '2021','2020','2019','2018'];
}
