<?php
    include_once("koneksi.php");
    $sql = "CREATE TABLE Menu(
        MAKANAN Varchar(20)PRIMARY KEY,
        MINUMAN Varchar(20), 
        HARGA FLOAT(10)
    );";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "pembuatan tabel berhasil";
    } else{
        echo "pembuatan tabel gagal";
    }
