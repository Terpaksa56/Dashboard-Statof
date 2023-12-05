<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranPerkapita extends Model
{
    protected $table = 'pengeluaran_perkapita';
    protected $primaryKey = 'ID';
    protected $returnType = 'object';
    protected $allowedFields = ['Kategori', '2022', '2021','2020','2019','2018'];
}
