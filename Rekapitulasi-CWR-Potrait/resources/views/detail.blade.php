<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5" id="data-container">
        @foreach ($mahasiswas as $item)
            <div class="row mb-4 align-items-center">
                <div class="col-md-4 text-center">

                    @php

                        $npm = $item->npm;

                        $folderPath = public_path('ass_mahasiswa/unija/');

                        $files = scandir($folderPath);

                        $matchingFiles = array_filter($files, function ($file) use ($npm) {
                            return preg_match('/^' . preg_quote($npm) . '/i', $file); // Cocokkan NPM di awal nama file
                        });

                        $fileExists = !empty($matchingFiles) ? reset($matchingFiles) : null;
                    @endphp

                    @if ($fileExists)
                        <img class="img-fluid rounded-3 border" style="width: 200px;"
                            src="{{ asset('ass_mahasiswa/unija/' . $fileExists) }}" alt="Foto Mahasiswa">
                    @else
                        <img class="img-fluid rounded-3 border" style="width: 240px;"
                            src="{{ asset('assets/noimage.jpg') }}" alt="Foto Mahasiswa">
                    @endif





                </div>
                <div class="col-md-6">
                    <ul class=" container ">
                        <li style="list-style: none" class="row "><span class="col-3">Npm</span><span
                                class="col-6">: {{ $item->npm }}
                            </span> </li>
                        <li style="list-style: none" class="row"><span class="col-3">Nama</span><span
                                class="col-6">: {{ $item->nama }}
                            </span> </li>
                        <li style="list-style: none" class="row"><span class="col-3">Prodi</span><span
                                class="col-6">: {{ $item->prodi }}
                            </span> </li>
                        <li style="list-style: none" class="row"><span class="col-3">Jenis Kelamin</span><span
                                class="col-6">:
                                {{ $item->jk }} </span>
                        <li style="list-style: none" class="row"><span class="col-3">Tempat/Tgl Lahir</span><span
                                class="col-6">:
                                {{ $item->tmp_lahir }}
                        <li style="list-style: none" class="row"><span class="col-3">Prodi/Fakultas</span><span
                                class="col-6">:
                                {{ $item->prodi }}
                            </span>
                        </li>
                        <li style="list-style: none" class="row"><span class="col-3">Ipk</span><span
                                class="col-6">: {{ $item->ipk }}
                            </span>
                        </li>
                        <li style="list-style: none" class="row"><span class="col-3">Predikat</span><span
                                class="col-6">:
                                {{ $item->predikat }}
                            </span>
                        </li>
                        <li style="list-style: none" class="row"><span class="col-3">No. Hp</span><span
                                class="col-6">: {{ $item->tlpn }}
                            </span>
                        </li>
                        <li style="list-style: none" class="row"><span class="col-3">Alamat</span><span
                                class="col-6">: {{ $item->alamat }}
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="col-12  ">
                    <div class="row ">
                        <ul class="container ">
                            <li style="list-style: none" class="row text-center">
                                <span class="col-1"></span>
                                <span class="col-2 " style="text-transform: capitalize;">Judul Skripsi</span>
                                <div class="col-7" style="text-align: justify; text-transform: capitalize;">:
                                    {{ $item->judul_ta }}
                                </div>
                            </li>

                            <li style="list-style: none" class="row text-center">
                                <span class="col-1"></span>
                                <span class="col-2 " style="text-transform: capitalize;">Pesan & Kesan</span>
                                <span class="col-7" style="text-align: justify; text-transform: capitalize;">:
                                    {{ $item->pesan }} & {{ $item->kesan }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
