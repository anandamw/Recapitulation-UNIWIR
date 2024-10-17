<?php

use App\Models\Mahasiswa;

if (!function_exists('HelperMahasiswa')) {
    function HelperMahasiswa()
    {
        return Mahasiswa::all()->unique('prodi')->map(function ($get) {
            return [
                'npm' => $get->npm,
                'prodi' => $get->prodi
            ];
        })->values()->toArray(); // Mengubah kembali menjadi array
    }
}
