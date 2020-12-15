<?php
require 'function.php';

if(isset($_POST["submit"])){
  if(regis($_POST) > 0){
    echo "<script>
      alert('Selamat kamu berhasil terdaftar');
      document.location.href='login.php';
    </script>";
  }else{
    echo "<script>
      alert('Kamu gagal mendaftar, silahkan coba lagi');
      document.location.href='signup.php';
    </script>";
  }
}
?>
<html>
    <head>
      <link rel="icon" type="image/png" href="img/LogoKoki.png">
      <title>Sign Up</title>
    </head>
    <link rel="stylesheet" href="css/stylesignup.css">
<body>
  <center><img src="img/logoresep.png" alt=""></center>
    <div id="card">
        <div id="card-title">
            <h2>REGISTER</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" class="form" action=""> 
            <label for="user-name" style="padding-top:13px">&nbsp;Username</label>
                <input id="user-name" class="form-content" type="text" name="nama" id="nama" autocomplete="on" required />
                <div class="form-border"></div>
            <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
                <input id="user-email" class="form-content" type="email" name="email" id="email" autocomplete="on" required />
                <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input id="user-password" class="form-content" type="password" name="password" id="password" required />
                <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Re-Password</label>
                <input id="user-password" class="form-content" type="password" name="password" id="password" required />
                <div class="form-border"></div>
            <label for="role" style="padding-top:22px">&nbsp;Role</label>
            <label>
            <center><table>
              <tr>
                <td>
                <input id="user-admin" class="form-content" type="radio" name="role" id="role" />Admin
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="user-user" class="form-content" type="radio" name="role" id="role" />User
                </td>
              </tr>
            </table></center>
            </label>
                <div class="form-border"></div>
          <input id="submit-btn" type="submit" name="submit" value="REGISTER" />
          <a href="login.php" id="login">Back To Login</a>
          </form>
    </div>
  </div>
	<footer class="footer">
		<font color="white">Copyright &#169; Angga Wahyu</white>
	</footer>
</div>
</body>
</html>