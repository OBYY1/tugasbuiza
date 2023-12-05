<?php
mysqli_report(MYSQLI_REPORT_STRICT);

try {
  $mysqli = new mysqli("localhost", "root", "");

  // Cek apakah database myapp tersedia
  $mysqli->select_db("myapp");
  if ($mysqli->error){
    throw new Exception();
  }

  // Cek apakah tabel barang tersedia
  $query = "SELECT 1 FROM matakuliah";
  $mysqli->query($query);
  if ($mysqli->error){
    throw new Exception();
  }

  // Cek apakah tabel user tersedia
  $query = "SELECT 1 FROM user";
  $mysqli->query($query);
  if ($mysqli->error){
    throw new Exception();
  }

  // tutup koneksi ke database
  if (isset($mysqli)) {
    $mysqli->close();
  }

  // jika database myapp, tabel barang & user ada, redirect ke halaman login
  header('Location:login.php');
}
catch (Exception $e) {
  // kode catch ini akan diproses jika salah satu dari database myapp,
  // tabel barang dan tabel user tidak ada di database.
?>

  <!doctype html>
  <html lang="id">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">
      <title>SIPP UNDAR</title>
      <link rel="icon" href="img/favicon.png" type="image/png">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <div class="container" class="py-5">
      <div class="row">
        <div class="col-12 py-4 mx-auto text-center">
          <h3 class="mt-5">
            Selamat datang di Pemrograman Objek <strong>OOP Undar 2023</strong>
          </h3>
          <hr class="w-50 mx-auto">
          <p class="lead mt-5">Sistem kami mendeteksi database /
            tabel belum tersedia, apakah ingin dibuat sekarang?</p>
          <a href="db_generate.php"
             class="btn btn-info text-white">Ya</a>
          <a href="#" class="btn btn-danger">Tidak</a>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
  </html>
<?php
// kurung kurawal untuk menutup block catch
}