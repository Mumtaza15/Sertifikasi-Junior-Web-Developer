<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Hasil Pendaftaran</title>
    
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
                <a class="nav-link text-white" href="/pendaftaran">Pendaftaran</a>
              </li>
              <li class="nav-item text-color-2">
                <a class="nav-link active" href="/hasil">Hasil</a>
              </li>
            </ul>
          </form>
        </div>
    </nav>

    <div class="container my-5">
      {{-- <h1>Hasil Pendaftaran Beasiswa</h1> --}}
      <div class="container table-container">
        <h2 class="text-center mb-4">Tabel Hasil Pendaftaran Beasiswa</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor HP</th>
                        <th>Semester</th>
                        <th>IPK</th>
                        <th>Pilihan Beasiswa</th>
                        <th>Status Ajuan</th>
                        <th>Berkas Syarat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beasiswa as $index => $b)
                        <tr>
                            <td>{{ ($beasiswa->currentPage() - 1) * $beasiswa->perPage() + $loop->iteration }}</td>
                            <td>{{ $b->nama }}</td>
                            <td>{{ $b->email }}</td>
                            <td>{{ $b->handphone }}</td>
                            <td>{{ $b->semester }}</td>
                            <td>{{ $b->ipk }}</td>
                            <td>{{ $b->pilihan_beasiswa }}</td>
                            <td>{{ $b->status_ajuan }}</td>
                            <td>
                                @if($b->berkas_syarat)
                                    <a href="{{ Storage::url($b->berkas_syarat) }}" target="_blank" class="text-decoration-none fas fa-eye"></a>
                                @else
                                    Tidak ada berkas
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $beasiswa->links("pagination::bootstrap-5") }}
        </div>
        
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            
        </div>

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