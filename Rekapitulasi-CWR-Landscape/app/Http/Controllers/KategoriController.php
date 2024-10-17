<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lorem;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.kategori');
    }

    public function administrasi()
    {

        $mahasiswas = Mahasiswa::where('prodi', 'Administrasi Publik')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('administrasi-landscape.pdf', ["Attachment" => false]);
    }


    public function manajemen()
    {

        $mahasiswas = Mahasiswa::where('prodi', 'Manajemen')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('manajemen-landscape.pdf', ["Attachment" => false]);
    }



    public function akuntasi()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Akuntansi')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('akuntasi-landscape.pdf', ["Attachment" => false]);
    }

    public function agribisnis()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Agribisnis')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');

        return $pdf->stream('agribisnis-landscape.pdf', ["Attachment" => false]);
    }

    public function pertanian()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Teknologi Hasil Pertanian')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('pertanian-landscape.pdf', ["Attachment" => false]);
    }

    public function hukum()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Hukum')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);



        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('hukum-landscape.pdf', ["Attachment" => false]);
    }
    public function sipil__()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Teknik Sipil')->orderBy('urut')->get();


        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('sipil-landscape.pdf', ["Attachment" => false]);
    }

    public function informatika()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Informatika')->orderBy('urut')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => false,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('informatika-landscape.pdf', ["Attachment" => false]);
    }

    public function kebidanan()
    {
        $mahasiswas = Mahasiswa::where('prodi', 'Kebidanan')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('kebidanan-landscape.pdf', ["Attachment" => false]);
    }
    public function keperawatan()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Keperawatan')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');



        return $pdf->stream('keperawatan-landscape.pdf', ["Attachment" => false]);
    }

    public function ipa()
    {
        $mahasiswas = Mahasiswa::where('prodi', 'Pendidikan Ipa')->orderBy('urut')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('ipa-landscape.pdf', ["Attachment" => false]);
    }

    public function pgsd()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'PGSD')->orderBy('urut')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('pgsd-landscape.pdf', ["Attachment" => false]);
    }


    public function sesi1()
    {
        ini_set('memory_limit', '1024M');

        $mahasiswas = Lorem::where('sesi', 'SESI 1')->orderBy('id')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('SESI 1-landscape.pdf', ["Attachment" => false]);
    }

    public function sesi2()
    {
        ini_set('memory_limit', '1024M');


        $mahasiswas = Lorem::where('sesi', 'SESI 2')->orderBy('id')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'arial',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);


        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'landscape');


        return $pdf->stream('SESI 2-landscape.pdf', ["Attachment" => false]);
    }
}
