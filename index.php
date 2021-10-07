<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
     <?php
     $tajuk = '<h1> Hello world</h1>';
     $isi= 'You are great';
     echo $tajuk . $isi;
     $jumlah = strlen($tajuk) + strlen($isi);
     echo "<p> Bilangan huruf = $jumlah </p>";
    
    
    # <strstr()
    $nama = "Nur Fatihah Binti Rosali";
    $cari = strstr($nama, 'nur');
    echo "<p>$cari</p>";

    $nomatrik ='18DDT19F1008';
    $bilangan = strstr($nomatrik,'F');
    echo "<p>Bilangan : $bilangan</p>";

    # substr()
    $kod = substr($nomatrik,2,3);
    echo "<p>$kod</p>";

    #strpos () & substr ()
    $lokasi = strpos($nomatrik,'F',) + 1;
    $bilangan = substr($nomatrik,$lokasi,2);
    echo "<p>Bilangan : $bilangan</p>";

    
    ?/

</body>
</html>