<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

// require_once 'dompdf/autoload.inc.php';

class PdfController extends Controller
{


    public function view_pdf()
    {
        // Mengambil data mahasiswa dari database
        $mahasiswas = Mahasiswa::where('prodi', 'Pendidikan IPA')->paginate(5);

        // Membuat PDF dari view dengan data mahasiswa
        $pdf = PDF::loadView('pdf', compact('mahasiswas'));

        // Menampilkan PDF di browser tanpa mengunduh
        return $pdf->stream('invoice.pdf', ["Attachment" => false]);
    }

    // public function view_pdf()
    // {
     

    //     return view('pdf');
    // }
}
