<?php
require 'functionadmin.php';
$koki = query("SELECT * FROM data_koki");

if( isset($_POST["cari"])){
  $koki = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/LogoKoki.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Data Koki</title>
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.php"><img src="../img/foto.jpg" alt=""></a>
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
          <form method="post">
  <input type="text" name="keyword" placeholder="Masukkan Keyword...."
    aria-label="Search" autocomplete="off">
    <button type="submit" class="btn btn-outline-warning" name="cari">Search</button>&nbsp&nbsp
</form>
          <form class="form" action="">
			<a class="btn btn-outline-warning" href="../logout.php" role="button">Log Out</a>
          </form>
        </div>
    </nav>

    <!-- Data Koki -->
    <br>
    <center><h1>DATA KOKI</h1></center>
    <div class="kotak">
    <a href="tambah.php" >Tambah Data Koki</a>
    <center><table class="table" border="2" cellpadding="10" cellspacing="0">
      <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Karir</th>
          <th>Asal Negara</th>
          <th>Aksi</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach($koki as $row) : ?>
      <tr>
          <td><?= $i; ?></td>
          <td><?= $row["nama_koki"]; ?></td>
          <td><?= $row["karir"]; ?></td>
          <td><?= $row["asal"]; ?></td>
          <td>
            <a href="edit.php?id=<?= $row["id"]?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]?>">Hapus</a>
          </td>
      </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
      </div>
    </center>
  <!-- Footer -->
  </div>
	  <footer id="footer">
		  <font color="#cabd07">Copyright &#169; Angga Wahyu</white>
	  </footer>
  </div>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    

</body>
</html>