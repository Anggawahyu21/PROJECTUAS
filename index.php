<?php
require 'admin/functionadmin.php';
$posting = query("SELECT * FROM data_posting");
if( isset($_POST["caripost"])){
  $posting = caripost($_POST["keywordpost"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/LogoKoki.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Beranda Resepic</title>
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.php"><img src="img/foto.jpg" alt=""></a>
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
              <a class="nav-link text-warning" href="tentang.php">Tentang</a>
            </li>
          </ul>
          <form method="post">
          <input type="text" name="keywordpost" placeholder="Masukkan Keyword...."
    aria-label="Search" autocomplete="off">
    <button type="submit" class="btn btn-outline-warning" name="caripost">Search</button>&nbsp&nbsp
</form>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="widget">
        <h2>View</h2>
          <ul class="menusidebar">
            <li><a class="nav-link text-warning" href="datakoki.php">Koki</a></li>
          </ul>
      </div>
      <div class="widget">
        <h2>Resep Populer</h2>
          <ul class="menusidebar">
            <li><a class="nav-link text-warning" href="">Rendang Daging Padang</a></li>
            <li><a class="nav-link text-warning" href="">Rawon</a></li>
            <li><a class="nav-link text-warning" href="">Sate Ayam Madura</a></li>
      <br><br>
          </ul>
      </div>
      </aside>

      <!-- Konten -->
      <?php $i = 1; ?>
      <?php foreach ($posting as $row) : ?>
      <div class="blog">
      <div class="conteudo">
        <h1> <?= $row["judul"]; ?> </h1>
        <?= $row["gambar"]; ?> 
      <hr>
      <div class="post-info">
      Di Posting Oleh <b>Admin</b>
      </div>
        <p>
        <?= $row["isi"]; ?> 
        <a href="Post/post1.php" class="continue-lendo">Selengkapnya →</a>
        </p>
      </div>
      <?php $i++; ?>
      <?php endforeach; ?>
      </div>

  <!-- Footer -->
  </div>
	  <footer id="footer">
		  <font color="#cabd07">Copyright &#169; Angga Wahyu</white>
	  </footer>
  </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>