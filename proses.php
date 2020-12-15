<?php
    $conn = mysqli_connect("localhost","root","","webresep");

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $user = mysqli_query($conn, "SELECT * FROM data_admin WHERE email='$email' and password='$pass' ");
    $chek = mysqli_num_rows($user);
    if($chek > 0){
        session_start();
        $row = mysqli_fetch_array($user);
        $_SESSION['id'] = $row['id'];
        header("location:admin/index.php");
    }else
    {
        header("location:login.php");

    }


?>