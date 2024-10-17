<?php

namespace App\Http\Controllers;

use App\Models\Lorem;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function detail()
    {
        $mahasiswas = Lorem::all();
        return view('detail', compact('mahasiswas'));
    }
    public function mahasiswa()
    {
        $mahasiswas = Lorem::all();
        // Kirim data mahasiswa ke view
        return view('admin.mahasiswa.home', compact('mahasiswas'));
    }



    public function create()
    {
        return view('admin.mahasiswa.mahasiswa_create');
    }
    public function store(Request $request)
    {

        $data = [
            'npm' => $request->npm,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'tlpn' => $request->tlpn,
            'email' => $request->email,
            'judul_ta' => $request->judul_ta,
            'kesan' => $request->kesan,
            'pesan' => $request->pesan,
            'ipk' => $request->ipk,
            'predikat' => $request->predikat,
        ];




        if ($request->hasFile('foto_mhs')) {
            $file = $request->file('foto_mhs');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
        }
        $get = Mahasiswa::create($data);



        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::where('id', $id)->first();

        return view('admin.mahasiswa.mahasiswa_edit', compact('mahasiswa'));
    }
    public function update(Request $request, $id)
    {

        $mahasiswa = Mahasiswa::findOrFail($id);

        $nama_mhs = $request->nama;
        $npm_mhs = $request->npm;
        $data = [
            'npm' => $npm_mhs,
            'nama' => $nama_mhs,
            'prodi' => $request->prodi,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'tlpn' => $request->tlpn,
            'email' => $request->email,
            'judul_ta' => $request->judul_ta,
            'kesan' => $request->kesan,
            'pesan' => $request->pesan,
            'ipk' => $request->ipk,
            'predikat' => $request->predikat,
        ];



        // Upload file baru
        $file = $request->file('foto_mhs');
        $filename = time() . '__' . $npm_mhs . $nama_mhs . '.'  . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);
        $data['foto_mhs'] = $filename;

        $mahasiswa->update($data);

        return redirect('/mahasiswa');
    }
}
