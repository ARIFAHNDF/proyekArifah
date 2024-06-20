<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Buku</title>
    <style>
        body {
            background: #eee;
            color: #333;
            font-family: sans-serif;
            font-size: 15px;
            margin: 0;
            padding: 0;
        }

        #wrapper {
            width: 80%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        h1 {
            color: #6699cc; /* Biru Soft */
            text-align: center;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #6699cc; /* Biru Soft */
            color: #fff;
        }

        td {
            background-color: #f9f9f9;
        }

        .center {
            text-align: center;
        }

        .alert {
            margin: 20px auto;
            padding: 10px;
            width: 80%;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #dff0d8;
            color: #3c763d;
        }

        .alert-error {
            background-color: #f2dede;
            color: #a94442;
        }

        a {
            text-decoration: none;
            color: #6699cc;
            font-weight: bold;
        }

        a:hover {
            color: #557a99;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>FORM DATA BUKU</h1>
        <div class="center">
            <?php echo anchor('crud/tambah', 'Tambah Data'); ?>
        </div>
        <div class="center">
            <!-- Tampilkan alert berhasil -->
            <?php if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-success">' . $this->session->flashdata('message') . '</div>';
            } ?>
            <!-- Tampilkan alert gagal -->
            <?php if ($this->session->flashdata('error')) {
                echo '<div class="alert alert-error">' . $this->session->flashdata('error') . '</div>';
            } ?>
        </div>
        <table>
            <tr>
                <th>Id Buku</th>
                <th>Judul Buku</th>
                <th>Tahun Terbit</th>
                <th>Nama Pengarang</th>
                <th>Aksi</th>
            </tr>
            <?php foreach($user as $u) { ?>
                <tr>
                    <td><?php echo $u->id_buku ?></td>
                    <td><?php echo $u->judul_buku ?></td>
                    <td><?php echo $u->tahun_terbit ?></td>
                    <td><?php echo $u->nama_pengarang ?></td>
                    <td>
                        <?php echo anchor('crud/edit/'.$u->id_buku, 'edit'); ?> |
                        <?php echo anchor('crud/hapus/'.$u->id_buku, 'hapus'); ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
