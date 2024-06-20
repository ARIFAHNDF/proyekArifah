<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat form validation pada CodeIgniter</title>
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

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"], input[type="hidden"] {
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
        <h1>FORM VALIDASI </h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('form/aksi'); ?>
        <table>
            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name="nama">
                    <?php echo form_error('nama'); ?>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <input type="text" name="email">
                    <?php echo form_error('email'); ?>
                </td>
            </tr>
            <tr>
                <th>Konfirmasi Email</th>
                <td>
                    <input type="text" name="konfir_email">
                    <?php echo form_error('konfir_email'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Simpan"></td>
            </tr>
        </table>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
