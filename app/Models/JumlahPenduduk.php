<?php
namespace App\Models;

use CodeIgniter\Model;

class JumlahPenduduk extends Model
{
    protected $table = 'kepadatan_penduduk';
    protected $primaryKey = 'ID';
    protected $returnType = 'object';
    protected $allowedField = ['jumlah penduduk', '2022','2021','2020', '2019', '2018'];
}

