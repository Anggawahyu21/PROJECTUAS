<?php
require 'functionadmin.php';
if (isset($_POST["submit"])){
    if(tambah ($_POST) > 0 ){
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='datakoki.php';
        </script>";
    } else {
    echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href='datakoki.php';
        </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/LogoKoki.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="../index.php"><img src="../img/foto.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <font size="6" ><a href="index.php" class="nav-link text-warning">RESEPiC</a></font>
            <li class="nav-item active">
              <a class="nav-link text-warning" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="../tentang/tentang.php">Tentang</a>
            </li>
          </ul>
          <form class="form" action="">
			<a class="btn btn-outline-warning" href="../logout.php" role="button">Log Out</a>
          </form>
        </div>
    </nav>

    <!-- Sidebar
    <aside class="sidebar">
      <div class="widget">
        <h2>Data</h2>
          <ul class="menusidebar">
            <li><a class="nav-link text-warning" href="datakoki.php">Koki</a></li>
            <li><a class="nav-link text-warning" href="">Post</a></li>
          </ul>
      </div>
      </div>
      </aside> -->
    <br>
    <center><h1>Tambah Data Koki</h1></center>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="kotak">
                <label for="nama_koki">Nama : </label>
                <input class="input" type="text" name="nama_koki" id="nama_koki" autocomplete="off" required>
                <hr>
                <label for="karir">Karir : </label>
                <input class="input" type="text" name="karir" id="karir" autocomplete="off" required>
                <hr>
                <label for="asal">Asal Negara : </label>
                <input class="input"  type="text" name="asal" id="asal" autocomplete="off" required>
                <hr>
                <button class="btn btn-outline-warning btn-dark" type="submit" name="submit">Tambah Data</button>
    </div>
    </form>
      <!-- Footer -->
  </div>
	  <footer id="footer">
		  <font color="#cabd07">Copyright &#169; Angga Wahyu</white>
	  </footer>
  </div>
</body>
</html>