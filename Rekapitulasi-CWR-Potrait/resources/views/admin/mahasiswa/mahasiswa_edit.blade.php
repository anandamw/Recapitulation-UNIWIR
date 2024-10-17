@extends('layouts.template')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Project -->

            <div class="page-titles">
                <h4>Validation</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Validation</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" method="POST"
                                    action="/mahasiswa/{{ $mahasiswa->id }}/update" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="npm">NPM
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="npm" class="form-control"
                                                        value="{{ $mahasiswa->npm }}" id="npm"
                                                        placeholder="Enter NPM.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter NPM.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="nama">Nama <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"
                                                        class="form-control" id="nama" placeholder="Your name.."
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Please enter a name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="prodi">Program Studi <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}"
                                                        class="form-control" id="prodi"
                                                        placeholder="Your program study.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a program study.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="jk">Jenis Kelamin <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <select name="jk" class="form-control" id="jk" required>
                                                        <option value="">Select Gender</option>
                                                        <option value="L"
                                                            {{ $mahasiswa->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                        <option value="P"
                                                            {{ $mahasiswa->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select gender.</div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="alamat">Alamat <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}"
                                                        class="form-control" id="alamat" placeholder="Place of address.."
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Please enter the place of address.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="tmp_lahir">Tempat Lahir <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tmp_lahir"
                                                        value="{{ $mahasiswa->tmp_lahir }}" class="form-control"
                                                        id="tmp_lahir" placeholder="Place of birth.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter the place of birth.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="tgl_lahir">Tanggal Lahir <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tgl_lahir"
                                                        value="{{ $mahasiswa->tgl_lahir }}" class="form-control"
                                                        id="tgl_lahir" placeholder="date of birth..." required>
                                                    <div class="invalid-feedback">
                                                        Please enter the date of birth.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="pesan">Pesan <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="pesan" value="{{ $mahasiswa->pesan }}"
                                                        class="form-control" id="pesan"
                                                        placeholder="date of Order..." required>
                                                    <div class="invalid-feedback">
                                                        Please enter the date of Order.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="kesan">Kesan <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="kesan" value="{{ $mahasiswa->kesan }}"
                                                        class="form-control" id="kesan"
                                                        placeholder="date of impression..." required>
                                                    <div class="invalid-feedback">
                                                        Please enter the date of impression.
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="alamat">Alamat <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="alamat"
                                                        value="{{ $mahasiswa->alamat }}" class="form-control"
                                                        id="alamat" placeholder="Your address.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter your address.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="tlpn">Telepon <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="tlpn" value="{{ $mahasiswa->tlpn }}"
                                                        class="form-control" id="tlpn"
                                                        placeholder="Your phone number.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter your phone number.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="email">Email <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="email" name="email" value="{{ $mahasiswa->email }}"
                                                        class="form-control" id="email"
                                                        placeholder="Your valid email.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a valid email.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="judul_ta">Judul TA <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="judul_ta"
                                                        value="{{ $mahasiswa->judul_ta }}" class="form-control"
                                                        id="judul_ta" placeholder="Your thesis title.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter your thesis title.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="ipk">IPK <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="ipk" value="{{ $mahasiswa->ipk }}"
                                                        class="form-control" id="ipk" placeholder="Your GPA.."
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Please enter your GPA.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="predikat">Predikat <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="predikat"
                                                        value="{{ $mahasiswa->predikat }}" class="form-control"
                                                        id="predikat" placeholder="Your grade.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter your grade.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="foto_mhs">Foto Mahasiswa <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <!-- Input file -->
                                                    <input type="file" name="foto_mhs" class="form-control"
                                                        id="foto_mhs" accept="image/*">
                                                    <!-- Feedback error -->
                                                    <div class="invalid-feedback">
                                                        Silakan upload foto mahasiswa.
                                                    </div>
                                                    <!-- Image preview -->
                                                    <img id="preview"
                                                        src="{{ $mahasiswa->foto_mhs ? asset('uploads/' . $mahasiswa->foto_mhs) : asset('assets/noimage.jpg') }}"
                                                        alt="Preview Foto Mahasiswa"
                                                        style="max-width: 100%; margin-top: 10px; display: block;">
                                                </div>
                                            </div>

                                            <script>
                                                // Script untuk menampilkan pratinjau gambar setelah dipilih
                                                document.getElementById('foto_mhs').addEventListener('change', function(event) {
                                                    const preview = document.getElementById('preview');
                                                    const file = event.target.files[0];

                                                    if (file) {
                                                        const reader = new FileReader();
                                                        reader.onload = function(e) {
                                                            preview.src = e.target.result;
                                                        };
                                                        reader.readAsDataURL(file);
                                                    } else {
                                                        preview.src =
                                                            "{{ asset('assets/noimage.jpg') }}"; // Jika tidak ada file, kembali ke gambar default
                                                    }
                                                });
                                            </script>



                                            <div class="mb-3 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
