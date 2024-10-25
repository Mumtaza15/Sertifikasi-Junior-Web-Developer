<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pendaftaran Beasiswa</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body style="background-image: url('bg_tilc.png');">
    <nav class="navbar navbar-expand-lg navbar-light bg-color-1">
        <div class="container-fluid mx-4">
        <img src="logo.png" alt="" class="navbar-brand logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-color-2" href="/pendaftaran">Pendaftaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/hasil">Hasil</a>
              </li>
            </ul>
          </form>
        </div>
    </nav>

    <div class="col-xs-1 my-auto mt-5">
        <div class="bg-white form-container shadow rounded">
            <div class="my-4" align="center">
                <h2>Registrasi Beasiswa</h2>
                <p>Silahkan daftar beasiswa dengan isi form berikut</p>
            </div>
            <form action="{{ route('submitForm') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
                    <label for="inputName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="inputPhone" class="col-sm-4 col-form-label">Nomor Hp</label>
                    <div class="col-sm-8">
                        <input type="number" name="handphone" placeholder="Phone" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="semester" class="col-sm-4 col-form-label">Semester:</label>
                    <div class="col-sm-8 ">
                        <select id="semesterSelect" name="semester" class="form-select">
                            <option selected>Pilih Semester</option>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="inputIPK" class="col-sm-4 col-form-label">IPK</label>
                    <div class="col-sm-8">
                        <input type="text" id="ipkValue" class="form-control" readonly>
                        <input type="hidden" name="ipk" id="ipkHidden" value="">
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="pilihan_beasiswa" class="col-sm-4 col-form-label">Jenis Beasiswa</label>
                    <div class="col-sm-8 ">
                        <select name="pilihan_beasiswa" required id="beasiswaTypeSelect" class="form-select">
                            <option value="akademik">Akademik</option>
                            <option value="non_akademik">Non Akademik</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="document" class="col-sm-4 col-form-label">Upload Berkas</label>
                    <div class="col-sm-8 ">
                        <input class="form-control" type="file" name="document" required id="documentInput">
                    </div>
                </div>

                <div align="center" class="mt-4">
                    <!-- Button Submit untuk mengirimkan form -->
                    <button type="submit" class="btn btn-primary" id="submitButton">Daftar</button>

                    <!-- Button Batal untuk menghapus isian form -->
                    <button type="button" class="btn btn-danger" id="resetButton">Batal</button>
                </div>
                <br>
                {{-- Pesan error apabila yang dikirimkan tidak sesuai --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>                
        </div>
    </div>  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>