<!DOCTYPE html>
<head>

    <title>menghubungkan CodeIgniter dengan database mysql</title>
</head>
<body>
    <h1>Mengenal model pada CodeIgniter</h1>
    <center>
    <table border="1">
<tr>
    <th>ID BUKU</th>
    <th>JUDUL</th>
    <th>TAHUN TERBIT</th>
    <th>NAMA PENGARANG</th>
    <th>AKSI</th>
</tr>
<?php
foreach($user as $u){ ?>
<tr>
    <td>
        <?php echo $u->id_buku ?>
    </td>
    <td>
        <?php echo $u->judul_buku ?>
    </td>
    <td>
        <?php echo $u->tahun_terbit ?>
    </td>
    <td>
        <?php echo $u->nama_pengarang ?>
    </td>
    
</tr>
<?php } ?>
    </table>
</center>
</body>
</html>