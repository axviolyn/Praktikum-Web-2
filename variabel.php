<?php

    $namaLengkap = "Nurhayati"; //string
    $jurusan = "Teknik Informatika"; //string
    $semester = 2; //integer
    $sudahLulus = false;//bolean

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel</title>
</head>
<body>
    <h2> <?php echo $namaLengkap ?></h2>
    <p>
        Haiii nama saya <?php echo $namaLengkap?>
    </p>
    <p>
        Saya kuliah di jurusan <?php echo $jurusan?>
    </p>
    <p>
        Saat ini saya berada di semester <?php echo $semester?>
    </p>
</body>
</html>