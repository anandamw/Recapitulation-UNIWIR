@extends('layouts.template')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <div class="d-flex align-items-center justify-content-between">

                    <div>
                        <h4>Data Mahasiswa</h4>
                        <ol class="breadcrumb">

                            <li class="" style="margin-right: 5px"><a href="">Table</a></li>
                            <li class=" active"><a href=""> Data Mahasiswa</a></li>
                        </ol>
                    </div>

                    <a class="btn btn-primary" href="/mahasiswa/create">Tambah Data</a>
                </div>
            </div>
            <!-- row -->


            <div class="row">

                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display min-w850">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Npm</th>
                                            <th>Name</th>
                                            <th>Prodi</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>No Telepon</th>
                                            <th>Ipk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($mahasiswas as $item)
                                            <tr>

                                                <td>
                                                    @php

                                                        $npm = $item->npm;

                                                        $folderPath = public_path('ass_mahasiswa/mahasiswa/');

                                                        $files = scandir($folderPath);

                                                        $matchingFiles = array_filter($files, function ($file) use (
                                                            $npm,
                                                        ) {
                                                            return preg_match('/^' . preg_quote($npm) . '/i', $file); // Cocokkan NPM di awal nama file
                                                        });

                                                        $fileExists = !empty($matchingFiles)
                                                            ? reset($matchingFiles)
                                                            : null;
                                                    @endphp

                                                    @if ($fileExists)
                                                        <img class="rounded-circle" width="35"
                                                            src="{{ asset('ass_mahasiswa/mahasiswa/' . $fileExists) }}"
                                                            alt="Foto Mahasiswa">
                                                    @else
                                                        <img class="rounded-circle" width="35"
                                                            src="{{ asset('') }}assets/noimage.jpg"
                                                            alt="Foto Mahasiswa">
                                                    @endif
                                                </td>


                                                <td>{{ $item->npm }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->prodi }}</td>
                                                <td>{{ $item->jk }}</td>
                                                {{-- <td>{{ $item->tmp_lahir }}</td> --}}
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->tlpn }}</td>
                                                <td>{{ $item->ipk }}</td>

                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/mahasiswa/{{ $item->id }}/edit"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fa fa-pencil"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                                                                                            Content body end
                                                                                                                                                                                                                                                                                                                                                                                                                        ***********************************-->
@endsection
