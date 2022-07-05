<?php
     include_once("Koneksi.php");
     $makanan = "Nasi Goreng";
     $minuman = "Teh Poci";
     $harga = "25.000";
     

     $sql = "INSERT INTO menu(MAKANAN, MINUMAN, HARGA) Values('$makanan,'$minuman','$harga')";
     $hsl = mysqli_query($cnn, $sql);
     if($hsl){
         echo "Insert Data sukses<br>";
     }else{
        echo "Insert Data gagal<br>";
     }