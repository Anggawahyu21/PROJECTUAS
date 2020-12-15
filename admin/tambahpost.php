<?php
require 'functionadmin.php';
if (isset($_POST["submit"])){
    if(tambahpost ($_POST) > 0 ){
    echo "
        <script>
            alert('data berhasil di-upload');
            document.location.href='index.php';
        </script>";
    } else {
    echo "
        <script>
            alert('data gagal di-upload');
            document.location.href='tambahpost.php';
        </script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/LogoKoki.png">
    <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Upload</title>
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
          <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
    aria-label="Search">
</form>
          <form class="form" action="">
			<a class="btn btn-outline-warning" href="logout.php" role="button">Log Out</a>
          </form>
        </div>
    </nav>


      <!-- Konten -->
  <form action="" method="post" enctype="multipart/form-data">
    <div class="kotak">
		<center><h1> Upload Postingan </h1></center>
    <h3 class="text-success">Judul</h3>
    <hr>
      <input class="input" type="text" name="judul" id="judul" autocomplete="off" required ><br><br>
    <h3 class="text-success">Isi</h3>
    <hr>
		<textarea name="isi" cols="60" rows="10"></textarea>
		<br/>
    <h3 class="text-success">Gambar</h3>
    <hr>
    <input type="file" name="gambar" id="gambar">
    <br><br>
		<button class="btn btn-outline-warning btn-dark" type="submit" name="submit">Upload</button>
	  </div>
  </form>
  <!-- Footer
  </div>
	  <footer id="footer">
		  <font color="#cabd07">Copyright &#169; Angga Wahyu</white>
	  </footer>
  </div> -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>