<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTEST 4</title>
    <link rel="stylesheet" href="Masuk.css" />
</head>
<body>
<?php
    if (isset($_POST['commit'])) {
        $nma = $_POST['nma'];
        $tlp = $_POST['tlp'];
        $kta = $_POST['kta'];
        $lksi = $_POST['lksi'];

        echo "<br>nama : $nma";
        echo "<br>tlp : $tlp";
        echo "<br>kta : $kta";
        echo "<br>lksi : $lksi";
    }
    ?>
</body>
</html>