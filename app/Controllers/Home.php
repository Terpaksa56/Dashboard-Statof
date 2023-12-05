<?php

namespace App\Controllers;

use App\Models\AngkaHarapanHidup;
use App\Models\indeks_yang_mempengaruhi;
use App\Models\JumlahPenduduk;
use App\Models\KepadatanPenduduk;
use App\Models\IndeksPembangunan;
use App\Models\IndeksYangMempengaruhi;
use App\Models\Inflasi;
use App\Models\Kemiskinan;
use App\Models\Ketenagakerjaan;
use App\Models\LajuPertumbuhan;
use App\Models\LamaSekolah;
use App\Models\PengeluaranPerkapita;

class Home extends BaseController
{
    public function index(): string
    {
        $data_JumlahPenduduk = new JumlahPenduduk();
        $all_data_JumlahPenduduk = $data_JumlahPenduduk->findAll();
    
        $data_KepadatanPenduduk = new KepadatanPenduduk();
        $all_data_KepadatanPenduduk = $data_KepadatanPenduduk->findAll();
    
        return view('index', [
            'all_data_JumlahPenduduk' => $all_data_JumlahPenduduk,
            'all_data_KepadatanPenduduk' => $all_data_KepadatanPenduduk // Add this line
        ]);
    }

    public function index_IKK(): string
    {
        $data_IndeksYangMempengaruhi = new IndeksYangMempengaruhi();
        $all_data_IndeksYangMempengaruhi = $data_IndeksYangMempengaruhi->findAll();
    
        $data_Inflasi = new Inflasi();
        $all_data_Inflasi = $data_Inflasi->findAll();

        $data_Ketenagakerjaan = new Ketenagakerjaan();
        $all_data_Ketenagakerjaan = $data_Ketenagakerjaan->findAll();
    
        return view('index_IKK', [
            'all_data_IndeksYangMempengaruhi' => $all_data_IndeksYangMempengaruhi,
            'all_data_Inflasi' => $all_data_Inflasi,
            'all_data_Ketenagakerjaan' => $all_data_Ketenagakerjaan // Add this line
        ]);
    }

    

    public function index_IPM(): string
    {
        $data_AngkaHarapanHidup = new AngkaHarapanHidup();
        $all_data_AngkaHarapanHidup = $data_AngkaHarapanHidup->findAll();
    
        $data_IndeksPembangunan = new IndeksPembangunan();
        $all_data_IndeksPembangunan = $data_IndeksPembangunan->findAll();

        $data_LamaSekolah = new LamaSekolah();
        $all_data_LamaSekolah = $data_LamaSekolah->findAll();
    
        $data_PengeluaranPerkapita = new PengeluaranPerkapita();
        $all_data_PengeluaranPerkapita = $data_PengeluaranPerkapita->findAll();
    
        return view('index_IPM', [
            'all_data_AngkaHarapanHidup' => $all_data_AngkaHarapanHidup,
            'all_data_IndeksPembangunan' => $all_data_IndeksPembangunan,
            'all_data_LamaSekolah' => $all_data_LamaSekolah,
            'all_data_PengeluaranPerkapita' => $all_data_PengeluaranPerkapita // Add this line
        ]);
    }

    public function index_PDRB(): string
    {
        $data_LajuPertumbuhan = new LajuPertumbuhan();
        $all_data_LajuPertumbuhan = $data_LajuPertumbuhan->findAll();
    
        return view('index_PDRB', [
            'all_data_LajuPertumbuhan' => $all_data_LajuPertumbuhan      ]);
    }
    
    public function table(): string
    {
        $data_JumlahPenduduk = new JumlahPenduduk();
        $all_data_JumlahPenduduk = $data_JumlahPenduduk->findAll();

        $data_KepadatanPenduduk = new KepadatanPenduduk();
        $all_data_KepadatanPenduduk = $data_KepadatanPenduduk->findAll();

        return view('table', [
            'all_data_JumlahPenduduk' => $all_data_JumlahPenduduk,
            'all_data_KepadatanPenduduk' => $all_data_KepadatanPenduduk
        ]);
    }
    public function table_kepadatan(): string
    {
        $data_KepadatanPenduduk = new KepadatanPenduduk();
        $all_data_KepadatanPenduduk = $data_KepadatanPenduduk->findAll();

        return view('table_kepadatan', ['all_data_KepadatanPenduduk' => $all_data_KepadatanPenduduk]);
    }
    public function table_IPM(): string
    {
        $data_AngkaHarapanHidup = new AngkaHarapanHidup();
        $all_data_AngkaHarapanHidup = $data_AngkaHarapanHidup->findAll();
    
        $data_IndeksPembangunan = new IndeksPembangunan();
        $all_data_IndeksPembangunan = $data_IndeksPembangunan->findAll();

        $data_LamaSekolah = new LamaSekolah();
        $all_data_LamaSekolah = $data_LamaSekolah->findAll();

        $data_PengeluaranPerkapita = new PengeluaranPerkapita();
        $all_data_PengeluaranPerkapita = $data_PengeluaranPerkapita->findAll();
    
        return view('table_IPM', [
            'all_data_AngkaHarapanHidup' => $all_data_AngkaHarapanHidup,
            'all_data_IndeksPembangunan' => $all_data_IndeksPembangunan,
            'all_data_LamaSekolah' => $all_data_LamaSekolah,
            'all_data_PengeluaranPerkapita' => $all_data_PengeluaranPerkapita,
        ]);
    }
    public function table_IKK(): string
    {
        $data_Kemiskinan = new Kemiskinan();
        $all_data_Kemiskinan = $data_Kemiskinan->findAll();
    
        $data_IndeksYangMempengaruhi = new IndeksYangMempengaruhi();
        $all_data_IndeksYangMempengaruhi = $data_IndeksYangMempengaruhi->findAll();

        $data_Inflasi = new Inflasi();
        $all_data_Inflasi = $data_Inflasi->findAll();

        $data_Ketenagakerjaan = new Ketenagakerjaan();
        $all_data_Ketenagakerjaan = $data_Ketenagakerjaan->findAll();
    
        return view('table_IKK', [
            'all_data_Kemiskinan' => $all_data_Kemiskinan,
            'all_data_IndeksYangMempengaruhi' => $all_data_IndeksYangMempengaruhi,
            'all_data_Inflasi' => $all_data_Inflasi,
            'all_data_Ketenagakerjaan' => $all_data_Ketenagakerjaan,
        ]);
    }
    public function table_LajuPertumbuhan(): string
    {
        $data_LajuPertumbuhan = new LajuPertumbuhan();
        $all_data_LajuPertumbuhan  = $data_LajuPertumbuhan->findAll();
    
        return view('table_LajuPertumbuhan', [
            'all_data_LajuPertumbuhan' => $all_data_LajuPertumbuhan
        ]);
    }
}
