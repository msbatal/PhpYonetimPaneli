<?php
    session_start();
    include("ayar.php");
    if ($_POST) {
        $kullanici = $_POST["kullanici"];
        $sifre = $_POST["sifre"];

        $sorgu = $baglan->query("select * from kullanici where (kullanici='$kullanici' && sifre='$sifre')");
        $kayitsay = $sorgu->num_rows;

        if ($kayitsay > 0) {
            setcookie("kullanici","msb",time()+60*60);
            $_SESSION["giris"] = sha1(md5("var"));

            echo "<script> window.location.href='anasayfa.php'; </script>";
        } else {
            echo "<script>
            alert('HATALI KULLANICI BİLGİSİ!'); window.location.href='index.php';
            </script>";
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Giriş</title>
</head>
<body style="text-align:center;padding-top:50px;">


    <form action="" method="post">
        <b>Kullanıcı Adı:</b><br>
        <input type="text" name="kullanici" size="30" required><br><br>
        <b>Parola:</b><br>
        <input type="password" name="sifre" size="30" required><br><br><br>
        <input type="submit" value="Giriş Yap">
    </form>

</body>
</html>