<?php
    $adsoyad = $_POST["adsoyad"];
    $telefon = $_POST["telefon"];
    $eposta = $_POST["eposta"];
    $mesaj = $_POST["mesaj"];

    $konu = "Yeni Mesaj";
    $kime = "batalms@gmail.com";
    $ustbilgi = "From: $eposta\r\n";
    $ustbilgi .= "Reply-To: $eposta\r\n";
    $ustbilgi .= "X-Mailer: PHP/".phpversion();

    if (mail($kime, $konu, $mesaj, $ustbilgi)) {
        echo "<script> window.location.href = 'index.php'; </script>";
    } else {
        echo "<script> alert('HATA: Mesaj Gönderilemedi!'); window.location.href = 'index.php'; </script>";
    }
?>