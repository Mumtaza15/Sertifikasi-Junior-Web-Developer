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
              <a class="nav-link active text-color-2" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/pendaftaran">Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/hasil">Hasil</a>
            </li>
          </ul>
        </form>
      </div>
    </nav>
    
    <div class="banner-container bg-color-1 text-white" align="center">
      <h1>
       Selamat Datang
      </h1>
        <p>
        Selamat datang di platform pendaftaran beasiswa TRPL!. 
        Kami menyediakan kesempatan bagi mahasiswa berprestasi untuk memperoleh bantuan finansial/keuangan dalam pendidikan. 
        Anda dapat mendaftar program beasiswa sesuai dengan pilihan beasiswa yang tersedia, baik akademik maupun non-akademik.
        </p>
      <button class="btn btn-primary bg-color-2"><a class="text-white text-decoration-none" href="/pendaftaran">Mulai Daftar</a></button>
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