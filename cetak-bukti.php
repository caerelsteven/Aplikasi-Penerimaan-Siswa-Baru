<?php
    include 'koneksi.php';

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran 
    WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">"
</head>
<body>

<h2>Bukti Pendaftaran</h2>
<table class="table-form" border="0">
  <tr>
      <td>Kode Pendaftaran</td>
      <td>:</td>
      <td><?php echo $p->id_pendaftaran ?></td>
  </tr>
</table>

</body>
</html>
