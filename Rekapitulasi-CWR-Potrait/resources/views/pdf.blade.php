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
            /* padding: 0; */
            /* margin: 0; */
        }

        .container {
            height: 100vh;

        }
    </style>

    <div class="container">

        @foreach ($mahasiswas as $index => $item)
            @if ($index % 3 == 0 && $index != 0)
                <div style="page-break-after: always;"></div>
            @endif
            <table width="730px" border="0" align="center" cellpadding="0" style="margin-bottom: 5px;  ">
                <tr>
                    <td align="center" rowspan="8">
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

                        <div style="width: 100px;  padding: 20px; ">
                            @if ($fileExists)
                                <img class="img-fluid rounded-3 border" style="width: 100%; "
                                    src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('ass_mahasiswa/unija/' . $fileExists))) }}"
                                    alt="Foto Mahasiswa">
                            @else
                                <img class="img-fluid rounded-3 border" style="width: 100px; padding: 20px;"
                                    src="
                                    {{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('assets/noimage.jpg'))) }}"
                                    alt="Foto Mahasiswas">
                            @endif
                        </div>

                    </td>
                    <td style="padding-left: 23px ; width: 200px ;font-size: 15px;  ">NPM</td>
                    <td style="font-size: 15px;">
                        :{{ $item->npm }}
                    </td>
                </tr>

                <tr>

                    <td style="padding-left: 23px; font-size: 15px;">Nama</td>
                    <td style="font-size: 15px;">
                        :{{ $item->nama }}
                    </td>
                </tr>
                <tr>

                    <td style="padding-left: 23px; font-size: 15px;">Temp/Tgl Lahir</td>
                    <td style="font-size: 15px;">
                        :{{ $item->tmp_lahir }}, {{ $item->tgl_lahir }}
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 23px; font-size: 15px;">Prodi</td>
                    <td style="font-size: 15px; text-transform: uppercase; ">
                        {{-- : S1 KEBIDANAN --}}
                        :{{ $item->prodi }}
                    </td>
                </tr>

                <tr>

                    <td style="padding-left: 23px; font-size: 15px;">IPK</td>
                    <td style="font-size: 15px;">
                        :{{ $item->ipk }}
                    </td>
                </tr>
                <tr>

                    <td style="padding-left: 23px; font-size: 15px;">Predikat</td>
                    <td style="font-size: 15px;">
                        :{{ $item->predikat }}
                    </td>
                </tr>
                <tr>

                    <td style="padding-left: 23px; font-size: 15px;">No. Hp</td>
                    <td style="font-size: 15px;">
                        :{{ $item->tlpn }}
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 23px; font-size: 15px;">Alamat</td>
                    <td style="font-size: 15px;">
                        :{{ $item->alamat }}
                    </td>
                </tr>
                <tr>
                    <th align="center" style="font-size: 14px;" colspan="1">Judul Skripsi</th>
                    <td align="left" width="400"
                        style="text-align: justify; text-transform: lowercase; font-size: 15px;" colspan="2">
                        :{{ $item->judul_ta }}
                    </td>
                </tr>
                <tr>
                    <th align="center" style="font-size: 14px;" colspan="1">Pesan & Kesan</th>
                    <td align="left" width="600"
                        style="text-align: justify; text-transform: lowercase; font-size: 15px;" colspan="2">
                        :{{ $item->pesan }} /
                        {{ $item->kesan }}
                    </td>
                </tr>
            </table>
        @endforeach

    </div>
</body>

</html>
