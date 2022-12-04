<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-warning-70">
<!-- NAVBAR  -->
<nav class="navbar navbar-expand-lg bg-dark">
 <div class="container">
 <a class="navbar-brand text-light" href="/Home">
 <strong>PT GROW UP</strong>
 </a>
 <button class="navbar-toggler" type="button" data-bs toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
 <ul class="navbar-nav ms-auto">
 <li class="nav-item">
 <a class="nav-link active text-light fs-5" aria current="page" href="/Home">Home</a>
 </li>
 <li class="nav-item">
 <a class="nav-link text-light fs-5"
href="/jabatan/index">Jabatan</a>
 </li>
 <li class="nav-item">
 <a class="nav-link text-light fs-5" href="/karyawan/index">Karyawan</a>
 </li>
 <li class="nav-item">
 <a class="nav-link text-light fs-5" href="/Gaji/index">Gaji</a>
 </li>
 <li class="nav-item">
 <a class="nav-link text-light fs-5"
href="/Laporan">Laporan</a>
 </li>
 </ul>
 </div>
 </div>
 </nav>

<!-- CONTENT -->
 <div class="div container">
    <div class="row m-4">
        <div class="col">
            @yield('content')
        </div>
    </div>
 </div>

<!-- JAVASCRIPT -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>