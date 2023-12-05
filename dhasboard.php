<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    nav {
      background-color: #555;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    main {
      padding: 20px;
    }

    section {
      margin: 10px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
        /* Gaya untuk tombol logout */
        form {
      position: fixed;
      top: 10px; /* Sesuaikan dengan posisi vertikal */
      right: 10px; /* Sesuaikan dengan posisi horizontal */
    }

    button {
      background-color: #f44336;
      color: white;
      padding: 10px 15px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
<body>

  <header>
    <h1>Dashboard Sederhana</h1>
  </header>

  <nav>
    <a href="dhasboard.php">Beranda</a> |
    <a href="yo.php">gabut</a> |
      <!-- Tombol Logout -->
  <form action="logout.php" method="post">
    <button type="submit">Logout</button>
  </form>
  </nav>

  <main>
    <section>
      <h2>Selamat datang di Dashboard Sederhana</h2>
      <p>Ini adalah tampilan dasbor sederhana dengan beberapa bagian utama.</p>
    </section>

    <section>
      <h2>Data Penting</h2>
      <p>Informasi atau grafik penting dapat ditampilkan di sini.</p>
    </section>
  </main>

  <footer>
    <p></p>
  </footer>

</body>
</html>
