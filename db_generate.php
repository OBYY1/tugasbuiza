<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>SIIP Undar</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <!--<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">-->
  </head>
  <body>

  <div class="container" class="py-5">
    <div class="row">
      <div class="col-12 py-4 mx-auto text-center">
        <h3 class="mt-5">Proses Generate Database</h3>
        <hr class="w-50 mx-auto">
        <ul>

        <?php

        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
          $mysqli = new mysqli("localhost", "root", "");

          // Buat database "myapp" (jika belum ada)
          $query = "CREATE DATABASE IF NOT EXISTS myapp";
          $mysqli->query($query);
          if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
          }
          else {
           echo "<li>Database 'myapp' berhasil di buat / sudah tersedia</li>";
          };

          // Pilih database "myapp"
          $mysqli->select_db("myapp");
          if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
          }
          else {
            echo "<li>Database 'myapp' berhasil di pilih</li>";
          };

          // Hapus tabel "matakuliah" (jika ada)
          $query = "DROP TABLE IF EXISTS matakuliah";
          $mysqli->query($query);
          if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
          }

          // Buat tabel "matakuliah"
          $query = "CREATE TABLE matakuliah (
                  id_mk INT PRIMARY KEY AUTO_INCREMENT,
                  kode_mk VARCHAR(10),
                  nama_mk VARCHAR(50),
                  sks_mk INT,
                  semester_mk INT,
                  dosen_mk VARCHAR(50),
                  tanggal_update TIMESTAMP
                  )";
          $mysqli->query($query);
          if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
          }
          else {
            echo "<li>Tabel 'matakuliah' berhasil di buat</li>";
          };

          // Isi tabel "matakuliah"
          $sekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
          $timestamp = $sekarang->format("Y-m-d H:i:s");

          $query = "INSERT INTO matakuliah
            (kode_mk, nama_mk, sks_mk, semester_mk, dosen_mk, tanggal_update) VALUES
              ('DUA1101','Pendidikan Agama',3,1,'MKDU','$timestamp'),
              ('DUA1103','Trisula ',3,1,'MKDU','$timestamp'),
              ('TIB1104','Matematika 1',2,1,'Winarti, S.Kom, M.Kom','$timestamp'),
              ('TIC1102','Logika dan Algoritma',3,1,'Gugus Azhari, M.Kom','$timestamp'),
              ('TIC1108',' Pemrograman Terstruktur',3,1,'Arif Rahman Sujatmika, M.Kom','$timestamp'),
              ('TIB1105','Sistem Digital',3,1,'Winarti, S.Kom, M.Kom','$timestamp'),
              ('TIB1107','Pengantar Teknologi Informasi',3,1,'Lailia Rahmawati, M.Kom','$timestamp'),
              ('TIB3103','Jaringan Komputer',3,1,'Arif Rahman Sujatmika, M.Kom','$timestamp')

            ;";
          $mysqli->query($query);
          if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
          }
          else {
            echo "<li>Tabel 'matakuliah' berhasil di isi ".$mysqli->affected_rows."
                baris data</li>";
          };

          // Hapus tabel "user" (jika ada)
          $query = "DROP TABLE IF EXISTS user";
          $mysqli->query($query);
          if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
          }

          // Buat tabel "user"
          $query = "CREATE TABLE user (
                  username VARCHAR(50) PRIMARY KEY,
                  password VARCHAR(255),
                  email VARCHAR(100)
                  )";
          $mysqli->query($query);
          if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
          }
          else {
            echo "<li>Tabel 'user' berhasil di buat</li>";
          };

          // Isi tabel "user"
          $passwordAdmin = password_hash('rahasia',PASSWORD_DEFAULT);

          $query = "INSERT INTO user
            (username, password, email) VALUES
              ('admin','$passwordAdmin','izza.tiundar@gmail.com')
            ;";
          $mysqli->query($query);
          if ($mysqli->error){
            throw new Exception($mysqli->error, $mysqli->errno);
          }
          else {
            echo "<li>Tabel 'user' berhasil di isi ".$mysqli->affected_rows."
                baris data</li>";
          };

        ?>
        </ul>

        <hr class="w-50 mx-auto">
        <p class="lead">Database berhasil dibuat, silahkan <a href="login.php">
        Login</a> dengan username: <code>admin</code>, password:
        <code>rahasia</code><br>Atau <a href="register_user.php">Register</a>
        untuk membuat user baru</p>

        <?php
        }
        catch (Exception $e) {
          echo "<p>Koneksi / Query bermasalah: ".$e->getMessage().
              " (".$e->getCode().")</p>";
        }
        finally {
          if (isset($mysqli)) {
            $mysqli->close();
          }
        }
        ?>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
