<!DOCTYPE html>
<html>

    <head>
        <title>Ouput Pertemuan Ketiga</title>
    </head>

    <style type="text/css">
        body{
            background-color: gray;
        }
        h2{
            text-align: center;
        }
        
        form{
            background-color: white;
            border: 1px solid black;
            border-radius: 5px;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            padding: 15px;
        }
        input{
            padding-bottom: 2px;
            width: fit-content;
        }

        .nama::after{
            content: " ";
            margin-left: 17px;
        }
        .nim::after{
            content: " ";
            margin-left: 24px;
        }
        .angkatan::after{
            content: " ";
            margin-left: 17px;
        }
        .gender::after{
            content: " ";
            margin-left: 17px;
        }
        .alamat::after{
            content: " ";
            margin-left: 10px;
        }

        .submit{
            margin-top: 15px;
            background-color: gray;
            border: 1px solid white;
            border-radius: 3px;
            padding: 4px 5px;
        }
        .submit:hover {
            background-color: #363737;
            color: white;
        }
        .reset{
            margin-top: 15px;
            background-color: gray;
            border: 1px solid white;
            border-radius: 3px;
            padding: 4px 5px;
            float: right;
        }
        .reset:hover {
            background-color: #363737;
            color: white;
        }
    </style>

    <body>

        <h2>FORMULIR DATA DIRI MAHASISWA TEKNIK INFORMATIKA</h2>

        <form action="action.php" method="POST">
            <label class="nama">Nama</label>
            <input type="text" name="nama_mahasiswa"><br>

            <label class="nim">NIM</label>
            <input type="number" name="nim_mahasiswa" placeholder="masukkan 12 digit angka" max="999999999999"><br>

            <label class="angkatan">Angkatan</label>
            <select name="angkatan">
                <option value="" disabled selected>------</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select><br>

            <label class="gender">Jenis Kelamin</label>
            <input type="radio" name="gender" value="Laki-Laki"><label>Laki-laki</label>
            <input type="radio" name="gender" value="Perempuan"><label>Perempuan</label><br>

            <label class="alamat">Alamat</label>
            <input type="text" name="alamat_mahasiswa" maxlength="100"><br>

            <input type="submit" name="submit" value="kirim" class="submit">
            <input type="reset" value="reset ulang" class="reset">
        </form>

    </body>

</html>