<?php
require_once("baglan.php");

$GelenCevap = Filtrele($_POST["cevap"]);

$KontrolSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM oykullananlar WHERE ipadresi = ? AND tarih >=?");
$KontrolSorgusu->execute([$IPAdresi, $ZamaniGeriAl]);
$KontrolSayisi = $KontrolSorgusu->rowCount();

if ($KontrolSayisi>0){
    echo"HATA";
    echo "Daha önce oy kullanmışsınız. 24 saat sonra tekrar deneyin.<br/>";
    echo "Anasayfaya dönmek için <a 'href=index.php'>tıklayınız.</a>";
}else{
    if($GelenCevap==1){
        $Guncelle = $VeritabaniBaglantisi->prepare("UPDATE anket SET oysayisibir=oysayisibir+1, toplamoysayisi=toplamoysayisi+1");
        $Guncelle->execute();
    }elseif($GelenCevap==2){
        $Guncelle = $VeritabaniBaglantisi->prepare("UPDATE anket SET oysayisibir=oysayisibir+1, toplamoysayisi=toplamoysayisi+1");
    }elseif($GelenCevap==3){
        $Guncelle = $VeritabaniBaglantisi->prepare("UPDATE anket SET oysayisibir=oysayisibir+1, toplamoysayisi=toplamoysayisi+1");
        $Guncelle->execute();
    }else {
        echo"HATA";
        echo "Cevap kaydı bulunamıyor<br/>";
        echo "Anasayfaya dönmek için <a 'href=index.php'>tıklayınız.</a>";
    }

    $Ekle = $VeritabaniBaglantisi->prepare("INSERT INTO oykullananlar (ipadresi, tarih) values (?, ?)");
    $Ekle->execute([$IPAdresi, $ZamaniGeriAl]);
    $EkleKontrol = $Ekle->rowCount();

    if ($EkleKontrol> 0){
        echo"Teşekkürler<br/>";
        echo "Vermiş olduğunuz oy sisteme kaydedildi<br/>";
        echo "Anasayfaya dönmek için <a 'href=index.php'>tıklayınız.</a>";
    }else{
        echo"HATA<br/>";
        echo "İşlem sırasında beklemeyen bir hata oluştu<br/>";
        echo "Anasayfaya dönmek için <a 'href=index.php'>tıklayınız.</a>";
    }
}
?>