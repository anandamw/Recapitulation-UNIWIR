<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <style>
        * {
            text-transform: capitalize;
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            height: 100%;
            width: 100%;
        }
    </style>

    <div class="container" style="">
        @foreach ($mahasiswas as $index => $item)
            @if ($index % 1 == 0 && $index != 0)
                <div style="page-break-after: always;"></div>
            @endif

            <h1
                style="position: absolute; z-index: 100; font-size: 60px; right: 50px; top: 120px; color: #00489C; font-weight: bold;  ">
                UNIVERSITAS
                WIRARAJA
            </h1>

            <h1
                style="position: absolute; z-index: 100; font-size: 60px; right: 100px; bottom: 50px; color: rgb(251, 251, 251) ; font-weight: bold; ">
                IPK: {{ $item->ipk }}
            </h1>
            <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('assets/wiraraja.jpg'))) }}"
                alt="" style="position: relative; z-index: 0; width: 100%; height: 100%; top: 1px;">


            {{-- <table width="1000px" border="0" align="center" cellpadding="1"
                style="margin-bottom: 15px;  position: absolute; z-index: 20; left: 200px; top: 190px;"> --}}
                <table width="1000px" border="0" align="center" cellpadding="1"
                style="margin-bottom: 15px;  position: absolute; z-index: 20; left: 200px; top: 210px;">
                <tr>
                    <td align="center" rowspan="5">
                        @php
                            $npm = $item->npm;

                            // Path folder gambar
                            $folderPath = public_path('ass_mahasiswa/unija/');

                            // Ambil semua file di folder
                            $files = scandir($folderPath);

                            // Filter file yang cocok dengan NPM
                            $matchingFiles = array_filter($files, function ($file) use ($npm) {
                                return preg_match('/^' . preg_quote($npm, '/') . '/i', $file); // Cocokkan NPM di awal nama file
                            });

                            // Ambil file pertama yang cocok (jika ada)
                            $fileExists = count($matchingFiles) > 0 ? reset($matchingFiles) : false;

                        @endphp

                        {{-- <div style="width: 300px; padding: 10px;"> --}}
                            <div style="width: 250px; padding: 10px;">
                            @if ($fileExists)
                                {{-- <img class="img-fluid rounded-3 border"
                                    style="width: 100%; display: block; padding: 7px; "
                                    src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('ass_mahasiswa/unija/' . $fileExists))) }}"
                                    alt="Foto Mahasiswa"> --}}
                                <img class="img-fluid rounded-3 border"
                                    style="width: 100%; display: block; padding: 7px; background-color: white; border: 1px solid black"
                                    src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('ass_mahasiswa/unija/' . $fileExists))) }}"
                                    alt="Foto Mahasiswa">
                            @else
                                <!-- Tampilkan gambar default jika tidak ada kecocokan -->
                                <img class="img-fluid rounded-3 border" style="width: 100%; padding: 20px;"
                                    src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('assets/noimage.jpg'))) }}"
                                    alt="Foto Mahasiswas">
                            @endif
                        </div>


                    </td>
                    <td style="padding-left: 23px ; width: 250px ;font-size: 30px; color: #00489C; font-weight: bold; ">
                        NPM</td>
                    <td style="font-size: 30px;">
                        :{{ $item->npm }}
                    </td>
                </tr>

                <tr>

                    <td style="padding-left: 23px; font-size: 30px; color: #00489C; font-weight: bold;">Nama</td>
                    <td style="font-size: 30px;">
                        :{{ $item->nama }}
                    </td>
                </tr>
                <tr>

                    <td style="padding-left: 23px; font-size: 30px; color: #00489C; font-weight: bold;">
                        Temp/Tgl Lahir
                    </td>
                    <td style="font-size: 30px; width: 430px;">
                        :{{ $item->ttl }}
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 23px; font-size: 30px; color: #00489C; font-weight: bold;">Prodi
                    </td>
                    <td style="font-size: 30px; text-transform: uppercase;">
                        :{{ $item->prodi }}
                    </td>
                </tr>


                <tr>

                    <td style="padding-left: 23px; font-size: 30px; color: #00489C; font-weight: bold;">Predikat</td>
                    <td style="font-size: 30px;">
                        :{{ $item->predikat }}
                    </td>
                </tr>


            </table>
        @endforeach

    </div>
</body>

</html>
