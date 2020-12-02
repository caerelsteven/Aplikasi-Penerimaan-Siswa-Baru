<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){

        //mengambil 1 id terbesar di kolom id_pendaftaran, kemudian mengambil 5 karakter dari sebelah kanan
        $getmaxId = mysqli_query($conn,"SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getmaxId);
        $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
        
        //proses insert
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $insert = mysqli_query($conn, "INSERT INTO tb_Pendaftaran VALUES(
            '".$generateId."',
            '".date('Y-m-d')."',
            '".$_POST['th_ajaran']."',
            '".$_POST['jurusan']."',
            '".$_POST['nm']."',
            '".$_POST['tmp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['jk']."',
            '".$_POST['agama']."',
            '".$_POST['alamat']."'
        )");

    if($insert){
        echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
    }else{
        echo 'huft' .mysqli_error($conn);
    }

    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset+"utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<!--bagian box formulir-->
<section class="box-formulir">

    <h2>Pendaftaran Siswa Baru SMA Diponegoro</h2>

<!--bagian form-->

<div class="box">
<table border="0" class="table-form">
    <tr>
        <td>Tahun Ajaran</td>
        <td>:</td>
        <td>
            <input type="text" name="th_ajaran" class="input-control" value="2021/2022" readonly>
        </td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>
        <select class="input-control" name="jurusan">
            <option value="">--Pilih--</option>
            <option value="MIPA">MIPA</option>
            <option value="IPS">IPS</option>
        </select>
        </td>
    </tr>
</table>
</div>

<h3>Data Diri Calon Siswa</h3>
<div class="box">
<table border="0" class="table-form">
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>
            <input type="text" name="nm" class="input-control">
        </td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>
            <input type="text" name="tmp_lahir" class="input-control">
        </td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>
            <input type="date" name="tgl_lahir" class="input-control">
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
            <input type="radio" name="jk" class="input-control" value="Laki-Laki">Laki-laki &nbsp;&nbsp;&nbsp;
            <input type="radio" name="jk" class="input-control" value="Perempuan">Perempuan
        </td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td>
        <select class="input-control" name="agama">
            <option value="">--Pilih--</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Khonghucu</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>Alamat Lengkap</td>
        <td>:</td>
        <td>
            <textarea class="input-control" name="alamat"></textarea>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
        <form action="" method="post"> 
            <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
        </td>
    </tr>
</table>
</div>

</form>

</section>

</body>
</html>

</section>

</body>
</html>