<!DOCTYPE html>
<html>
<head>
    <title>Membuat Pagination Dengan Codeigniter</title>
</head>
<body>
    <center>
        <h1>Membuat Pagination Dengan Codeigniter</h1>
    </center>
    <table style="margin: 20px auto;" border="1">
    <tr>
        <th>Id Buku</th>
        <th>Judul Buku</th>
        <th>Tahun Terbit</th>
        <th>Nama pengarang</th>
    </tr>
    <?php
    $from = $this->uri->segment('3');
    foreach ($user as $u) { ?>
        <tr>
            <td><?php echo $u->id_buku?></td>
            <td><?php echo $u->judul_buku ?></td>
            <td><?php echo $u->tahun_terbit ?></td>
            <td><?php echo $u->nama_pengarang ?></td>
        </tr>
    <?php } ?>
    </table>
    <center>
        <?php echo $this->pagination->create_links(); ?>
    </center>
</body>
</html>
