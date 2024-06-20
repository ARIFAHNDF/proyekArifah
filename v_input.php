<!DOCTYPE html>
<html>
<head>
    <title>FORM TAMBAH DATA BARU </title>
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
            width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        #wrapper h1, #wrapper h3 {
            color: #6699cc; /* Biru Soft */
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

        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #6699cc; /* Biru Soft */
            outline: none;
        }

        input[type="submit"] {
            background-color: #6699cc; /* Biru Soft */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #557a99; /* Biru Soft yang Lebih Gelap */
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <center>
            <h1>FORM TAMBAH DATA BARU</h1>
        </center>
        <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
            <table>
                <tr>
                    <th>Id Buku</th>
                    <td><input type="text" name="id_buku"></td>
                </tr>
                <tr>
                    <th>Judul Buku</th>
                    <td><input type="text" name="judul_buku"></td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td><input type="text" name="tahun_terbit"></td>
                </tr>
                <tr>
                    <th>Nama Pengarang</th>
                    <td><input type="text" name="nama_pengarang"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" value="Tambah"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
