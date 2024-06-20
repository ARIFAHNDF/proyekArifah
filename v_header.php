<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Template sederhana dengan CodeIgniter | Pemograman Web II | UNIRA Malang</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/uaswebarifah/assets/css/style.css"/>
</head>
</head>
<body>
<div id="wrapper">
    <header>
        <hgroup>
            <h3> WEBSITE PERPUSTAKAAN  </h3>
</hgroup>
<nav>
    <ul>
        <li>
            <a href="<?php echo base_url().'/web' ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url().'/form/aksi'?>">Form Validasi</a>
        </li>
        <li>
            <a href="<?php echo base_url().'/web/user'?>">Data Buku</a>
        </li>
        
    </ul>
</nav>
<div class="clear"></div>
</header>
</body>
</html>