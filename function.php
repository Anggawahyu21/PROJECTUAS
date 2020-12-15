<?php
    $conn = mysqli_connect("localhost","root","","webresep");

function query($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows =[];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

function regis($data){
    global $conn;
    $user = $data["nama"];
    $email = $data["email"];
    $pass = $data["password"];

    $query = "INSERT INTO data_admin VALUES ('','$user','$email','$pass')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>