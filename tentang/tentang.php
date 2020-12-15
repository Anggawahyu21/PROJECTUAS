<?php
session_start();
if($_SESSION['id']==''){
    header("location:views/login.php");
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
    <title>Tentang</title>
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="../admin/index.php"><img src="../img/foto.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <font size="6" ><a href="../admin/index.php" class="nav-link text-warning">RESEPiC</a></font>
            <li class="nav-item active">
              <a class="nav-link text-warning" href="../admin/index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="tentang.php">Tentang</a>
            </li>
          </ul>
          <form class="form" action="">
			<a class="btn btn-outline-warning" href="../views/logout.php" role="button">Log Out</a>
          </form>
        </div>
    </nav>

  <!-- Konten -->
    <div class="conteudo">
    <div class="jumbotron">
    <h1 class="display-4">Tentang Resepic</h1>
      <p class="lead">&nbsp Web sederhana yang membahas resep-resep makanan Indonesia<br><br>
      &nbsp Resepic adalah web sederhana yang membagikan informasi seputar resep makanan indonesia yang sangat mudah untuk diikuti.<br>
      &nbsp Selain bisa melihat resep, web ini bisa melihat nama-nama koki terkenal mulai koki yang berasal dari dalam negeri sampai luar negeri</p>
      <hr>
            <div class="container">
              <div class="row">
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <h5>Admin</h5>
                    <p>Made Angga Wahyu Darsana</p>
                  </div>
                </div>
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <h5>Kontak</h5>
                    <p>Telp. 089-772-471-2021<br>
                    Email : Anggawahyu@gmail.co.id</p>
                  </div>
                </div>
                <div class="col m4 s12">
                  <div class="card-panel center">
                    <h5>Media Sosial</h5>
                    <p>Facebook : <a href="#">Angga Wahyu</a><br>
                      Instagram : <a href="#">Angga_Wahyu</a><br>
                      Line : Angga_wahyu</p>
                  </div>
                </div>
              </div>              
            </div>
          </section>
      <hr>
      <h2>SKILL</h2>
      <br><div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
      </div>
      <p>EDITOR</p>
      <br><div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
      </div>
      <p>WEB DEVELOPMENT</p>
      <br><div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
      </div>
      <p>PHOTOGRAPHER</p>
    </div>
    </div>

  <!-- Footer -->
  <div id="container">
  </div>
	  <footer id="footer">
		  <font color="#cabd07">Copyright &#169; Angga Wahyu</white>
	  </footer>
  </div>
</div>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    

</body>
</html>