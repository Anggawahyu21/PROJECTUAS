<html>
    <head>
      <link rel="icon" type="image/png" href="img/LogoKoki.png">
      <title>Login</title>
    </head>
    <link rel="stylesheet" href="css/stylelogin.css">
<body>
 <img src="img/logoresep.png" alt="">
    <div id="card">
        <div id="card-title">
            <h2>LOGIN</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" class="form" action="proses.php"> 
            <label for="email" style="padding-top:13px">&nbsp;Email</label>
            <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
            <div class="form-border"></div>
          <label for="password" style="padding-top:22px">&nbsp;Password</label>
            <input id="password" class="form-content" type="password" name="password" required />
            <div class="form-border"></div>
          <a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
          <button id="submit-btn" type="submit" name="login" value="login" />LOGIN</button>
          <a href="signup.php" id="signup">Don't have account yet?</a>
          </form>
    </div>
    </div>
	<footer class="footer">
		<font color="white">Copyright &#169; Angga Wahyu</white>
	</footer>
</div>
</body>
</html>