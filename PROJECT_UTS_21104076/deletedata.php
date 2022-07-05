<?php

include_once("koneksi.php");
$sql = "DELETE FROM menu WHERE harga ='25.000';";

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo "Proses hapus berhasil<br>";
}else{
    echo "Proses hapus gagal<br>";
}