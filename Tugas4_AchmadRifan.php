<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas4_AchmadRifan.php</title>
</head>
<body>
    <form action="" method="POST">
        Jumlah Bintang = <input type="number" name="jumlahbintang" placeholder="Input your stars" />
        <br />
        <input type="submit" name="submit" value="kirim">
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $bintang = $_POST['jumlahbintang'];
        for($a = 1; $a <= $bintang; $a++) {
            for($b = 1; $b <= $a; $b++) {
                echo "*";
            }
            echo "<br />";
        };
    };
    ?>
</body>
</html>
