<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST' ){

    $nama = $_POST['nama'];
    $tinggiBadan = $_POST['tinggiBadan'];
    $beratBadan = $_POST['beratBadan'];
    $umur = $_POST['umur'];


    include 'Mahasiswa.php';
    $Mahasiswa = new Mahasiswa($nama, $tinggiBadan, $beratBadan, $umur);
        
}


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
 

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">Umur</th>

    </tr>
  </thead>
  <tbody>
    <tr  class=" bg-info ">
      <th scope="row">1</th>
      <td> <?= $nama ?> </td>
      <td> <?= $tinggiBadan ?></td>
      <td> <?= $beratBadan ?></td>
      <td> <?= $umur ?> </td>

    </tr>
  </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>