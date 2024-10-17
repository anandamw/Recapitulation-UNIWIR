<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;
    // The table associated with the model
    protected $table = 'mahasiswas';

    // The attributes that are mass assignable
    protected $fillable = [
        'npm',
        'nama',
        'prodi',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'alamat',
        'tlpn',
        'email',
        'judul_ta',
        'kesan',
        'pesan',
        'ipk',
        'predikat',
        'foto_mhs'
    ];



    public static function __getProdi()
    {
        return DB::table('mahasiswas')->where('prodi', 'Administrasi Publik');
    }



    public static function __getIpa()
    {
        return DB::table('mahasiswas')->where('prodi', 'Pendidikan IPA
');
    }
}
