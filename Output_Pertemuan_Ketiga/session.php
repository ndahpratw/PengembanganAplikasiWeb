<?php

    echo "Ini Halaman Session<br>";
    echo "<br>";

    session_start();
    echo "Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;";
    echo $_SESSION['tampilkan_nama'];
    echo "<br>";

    echo "NIM  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;";
    echo $_SESSION['tampilkan_nim'];
    echo "<br>";

    echo "Angkatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;";
    echo $_SESSION['tampilkan_angkatan'];
    echo "<br>";

    echo "Jenis Kelamin : ";
    echo $_SESSION['tampilkan_gender'];
    echo "<br>";

    echo "Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;";
    echo $_SESSION['tampilkan_alamat'];
    echo "<br>";

?>

<!-- NB : &nbsp; digunakan untuk menambah spasi -->