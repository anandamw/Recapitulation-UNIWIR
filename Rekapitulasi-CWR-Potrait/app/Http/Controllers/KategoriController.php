<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori.kategori');
    }

    public function administrasi()
    {


        // Mendapatkan data mahasiswa dari prodi Administrasi Publik
        $mahasiswas = Mahasiswa::where('prodi', 'Administrasi Publik')->orderBy('urut')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Administrasi Publik-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }


    public function manajemen()
    {

        $mahasiswas = Mahasiswa::where('prodi', 'Manajemen')->orderBy('urut')->get();
        // Membuat PDF dari view dengan data mahasiswa
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Manajemen-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }



    public function akuntasi()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Akuntansi')->orderBy('urut')->get();
        // Membuat PDF dari view dengan data mahasiswa
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Akuntasi-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function agribisnis()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Agribisnis')->orderBy('urut')->get();
        // Membuat PDF dari view dengan data mahasiswa
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Agribisnis-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function pertanian()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Teknologi Hasil Pertanian')->orderBy('urut')->get();
        // Membuat PDF dari view dengan data mahasiswa
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Teknologi Hasil Pertanian-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function hukum()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Hukum')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)
        // dd($mahasiswas);

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Hukum-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function sipil()
    {

        $mahasiswas = Mahasiswa::where('prodi', 'Teknik Sipil')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Teknik Sipil-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function informatika()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Informatika')->orderBy('urut')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Informatika-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
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

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('S1 KEBIDANAN-portrait.pdf', ["Attachment" => false]);  // Ganti nama file menjadi lebih deskriptif
    }
    public function keperawatan()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Keperawatan')->orderBy('urut')->get();
        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Keperawatan-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }


    public function ipa()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'Pendidikan Ipa')->orderBy('urut')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('Pendidikan Ipa-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }

    public function pgsd()
    {


        $mahasiswas = Mahasiswa::where('prodi', 'PGSD')->orderBy('urut')->get();

        Pdf::setOptions([
            'dpi' => 150,
            'defaultFont' => 'sans-serif',
            'fontHeightRatio' => 1,
            'isPhpEnabled' => true,
        ]);
        // Membuat PDF dari view dengan data mahasiswa
        $pdf = Pdf::loadView('pdf', compact('mahasiswas'))
            ->setPaper('legal', 'portrait'); // Ubah 'potrait' menjadi 'portrait' (penulisan yang benar)

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('pgsd-portrait.pdf', ["Attachment" => false]); // Ganti nama file menjadi lebih deskriptif
    }
}
