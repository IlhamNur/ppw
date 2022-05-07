<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>PPW07 - Halaman Target</title>
</head>
<body>
    <?php function acak($jml, $nm) {
            $nomor = 0;
            for ($i = 1; $i <= $jml; $i++) {
                $jmlh[] = $i;
            }
            for ($i = 0; $i < count($nm); $i++) {
                $anggota[$jmlh[$nomor]][]=$nm[$i];
                $nomor++;
                if ($nomor==count($jmlh)) {
                    $nomor = 0;
                    shuffle($jmlh);
                }
            }
            foreach ($anggota as $key => $value) {
                echo "Kelompok $key <br />";
                for ($i = 0; $i < count($value); $i++) {
                    $namaKecil = strtolower($value[$i]);
                    echo ucfirst($namaKecil)."<br />";
                }
            }
        }
    if (isset($_POST['submit'])) { 
        $jumlah = $_POST['jumlah'];
        $nama = explode(PHP_EOL, $_POST['nama']);
        ?>  
        <table>
            <tr>
                <td>
                    <?php acak($jumlah, $nama); ?>
                </td>
            </tr>
            <tr>
                <?php date_default_timezone_set("Asia/Jakarta"); ?>
                <td>Pengacakan dilakukan pada <?php echo date("j F Y H:i:s") ?> WIB</td>
            </tr>
        </table>
    <?php } ?>
</body>
</html>