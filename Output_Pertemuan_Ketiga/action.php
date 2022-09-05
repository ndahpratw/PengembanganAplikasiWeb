<?php

    echo "Data Diri Berhasil Diinputkan<br>";
    echo "<br>";
    echo "SELAMAT DATANG !!<br>";
    echo "<br>";

    $nama = $_POST['nama_mahasiswa'];
    echo "Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;" . $nama;
    echo "<br>";

    $nim = $_POST['nim_mahasiswa'];
    echo "NIM  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;" . $nim;
    echo "<br>";

    $angkatan = $_POST['angkatan'];
    echo "Angkatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;" .$angkatan;
    echo "<br>";

    $gender = $_POST['gender'];
    if ($gender == "Laki-Laki") 
    {
        echo "Jenis Kelamin : &nbsp;&nbsp;Laki-laki";
    }else {
        echo "Jenis Kelamin : &nbsp;&nbsp;Perempuan";
    }
    echo "<br>";

    $alamat = $_POST['alamat_mahasiswa'];
    echo "Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;" . $alamat;
    echo "<br>";

    session_start();
    $_SESSION['tampilkan_nama']=$nama; 
    $_SESSION['tampilkan_nim']=$nim;
    $_SESSION['tampilkan_angkatan']=$angkatan;
    $_SESSION['tampilkan_gender']=$gender;
    $_SESSION['tampilkan_alamat']=$alamat;
       
?>

<a href="session.php" style="margin:300px">Uji Session</a>

<!-- NB : &nbsp; digunakan untuk menambah spasi -->