<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>PPW07 - Halaman Utama</title>
</head>
<body>
    <form action="target.php" method="POST">
        <table>
            <tr>
                <td>Buat <input type="number" name="jumlah" id="jumlah" min="1" style="width: 30px" /> kelompok</td>
            </tr>
            <tr>
                <td>
                    <textarea name="nama" id="nama"></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" /></td>
            </tr>
        </table>
    </form>
</body>
</html>