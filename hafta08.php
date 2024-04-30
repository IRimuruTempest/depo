<?php
session_start();

if (isset($_POST['Adi'] , $_POST['Soyadi'], $_POST['Sifre'] )){
    if ($_POST['Adi'] == 'Ali' , $_POST['Soyadi'] == 'Veli' , $_POST['Sifre'] == '1234') {
    $_SESSION['Adi'] = $_POST['Adi'];
    $_SESSION['Soyadi'] = $_POST['Soyadi'];

    else {
        $hata = "Ad , Soyad veye Sifre bilgisi hatalıdır ";
    }

    } else if (isset($_GET['Cikis'])){
    session_destroy();
    session_start();
}
}
?>
<html>
    <head>

    </head>
    <body>

        <?php
        if (isset($hata)){
            echo "<p style='color:red". $hata;


        }
        if(isset($_SESSION['AdSoyad']))
        {
            echo "Hoşgeldiniz" . $_SESSION['Adi'] . " " . $_SESSION['Soyadi'] .
            " | <a href='?Cikis'> Çıkış Yap </a>";

            else if (isset($_GET['Cikis'])) 
            {
                echo "Hoşgeldiniz" .$_SESSION['AdSoyad'].
                
                
            }
        }
        $_SESSION['AdSoyad'] ='veli Yılmaz';
        echo "Hoşgeldiniz" .$_SESSION['AdSoyad'];
        ?>
    </body>
</html>