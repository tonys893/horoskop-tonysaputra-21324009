<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Horoskop</title>
</head>
<body>

<h2>Cek Horoskop Anda</h2>

<form method="post">
    Masukkan Tanggal Lahir:<br><br>
    <input type="date" name="tanggal" required>
    <br><br>
    <input type="submit" name="submit" value="Cek Horoskop">
</form>

<?php
if(isset($_POST['submit'])){
    $tanggal = $_POST['tanggal'];

    $tgl = date('d', strtotime($tanggal));
    $bln = date('m', strtotime($tanggal));

    if(($tgl >= 21 && $bln == 3) || ($tgl <= 19 && $bln == 4)){
        $zodiac = "Aries";
        $sifat = "Berani dan percaya diri";
    }
    elseif(($tgl >= 20 && $bln == 4) || ($tgl <= 20 && $bln == 5)){
        $zodiac = "Taurus";
        $sifat = "Sabar dan setia";
    }
    elseif(($tgl >= 21 && $bln == 5) || ($tgl <= 20 && $bln == 6)){
        $zodiac = "Gemini";
        $sifat = "Cerdas dan komunikatif";
    }
    elseif(($tgl >= 21 && $bln == 6) || ($tgl <= 22 && $bln == 7)){
        $zodiac = "Cancer";
        $sifat = "Penyayang dan sensitif";
    }
    elseif(($tgl >= 23 && $bln == 7) || ($tgl <= 22 && $bln == 8)){
        $zodiac = "Leo";
        $sifat = "Pemimpin dan percaya diri";
    }
    elseif(($tgl >= 23 && $bln == 8) || ($tgl <= 22 && $bln == 9)){
        $zodiac = "Virgo";
        $sifat = "Teliti dan perfeksionis";
    }
    elseif(($tgl >= 23 && $bln == 9) || ($tgl <= 22 && $bln == 10)){
        $zodiac = "Libra";
        $sifat = "Adil dan suka damai";
    }
    elseif(($tgl >= 23 && $bln == 10) || ($tgl <= 21 && $bln == 11)){
        $zodiac = "Scorpio";
        $sifat = "Kuat dan misterius";
    }
    elseif(($tgl >= 22 && $bln == 11) || ($tgl <= 21 && $bln == 12)){
        $zodiac = "Sagittarius";
        $sifat = "Petualang dan optimis";
    }
    elseif(($tgl >= 22 && $bln == 12) || ($tgl <= 19 && $bln == 1)){
        $zodiac = "Capricorn";
        $sifat = "Disiplin dan pekerja keras";
    }
    elseif(($tgl >= 20 && $bln == 1) || ($tgl <= 18 && $bln == 2)){
        $zodiac = "Aquarius";
        $sifat = "Mandiri dan kreatif";
    }
    else{
        $zodiac = "Pisces";
        $sifat = "Imajinatif dan penyayang";
    }

    echo "<h3>Hasil Horoskop:</h3>";
    echo "Zodiac Anda: <b>$zodiac</b><br>";
    echo "Sifat: $sifat";
}
?>

</body>
</html>