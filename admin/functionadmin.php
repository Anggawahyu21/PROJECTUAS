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

function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama_koki"]);
    $karir = htmlspecialchars($data["karir"]);
    $asal = htmlspecialchars($data["asal"]);
     

    $query = "INSERT INTO data_koki
            VALUES 
            ('','$nama','$karir','$asal'
            )";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_koki WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_koki"]);
    $karir = htmlspecialchars($data["karir"]);
    $asal = htmlspecialchars($data["asal"]);
     

    $query = "UPDATE data_koki SET
           nama_koki = '$nama',
           karir = '$karir',
           asal = '$asal'
           WHERE id=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahpost($data){
    global $conn;
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);
    
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO data_posting
            VALUES 
            ('','$judul','$isi','$gambar'
            )";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo "<script>
            alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambarValid));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
            alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    if($ukuranFile > 5000000){
        echo "<script>
            alert('Ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    $namaFileBaru =  uniqid(); 
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../Progress/img/'. $namaFile);

    return $namaFileBaru;
}

function hapuspost($idpost){
    
    global $conn;
    mysqli_query($conn, "DELETE FROM data_posting WHERE id_post = $idpost");

    return mysqli_affected_rows($conn);
}

function editpost($data){
    global $conn;

    $id = $data["id_post"];
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "UPDATE data_posting SET
           id_post = '$id',
           judul = '$judul',
           isi = '$isi',
           gambar = '$gambar'
           WHERE id_post=$id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query="SELECT * FROM data_koki WHERE
            nama_koki LIKE '%$keyword%' OR karir LIKE '%$keyword%' OR asal LIKE '%$keyword%'
            ";
    return query($query);
}

function caripost($keywordpost){
    $query="SELECT * FROM data_posting WHERE
            judul LIKE '%$keywordpost%' OR isi LIKE '%$keywordpost%'
            ";
    return query($query);
}

?>