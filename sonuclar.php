<?php
require_once("baglan.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $AnketSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM anket LIMIT 1");
    $AnketSorgusu->execute();
    $KayitSayisi = $AnketSorgusu->rowCount();
    $Kayitlar = $AnketSorgusu->fetchAll(PDO::FETCH_ASSOC);
    
    if($KayitSayisi > 0){
        $Kayit = $Kayitlar[0]; // İlk kaydı almak için
        $AnketinBirinciSikkiIcinOySayisi = $Kayit["oysayisibir"];
        $AnketinIkinciSikkiIcinOySayisi = $Kayit["oysayisiiki"];
        $AnketinUcuncuSikkiIcinOySayisi = $Kayit["oysayisiuc"];
        $AnketiToplamOySayisi = $Kayit["toplamoysayisi"];
        
        // Toplam oy sayısının sıfır olup olmadığını kontrol edin
        if ($AnketiToplamOySayisi > 0) {
            $BirinciSecenekIcinYuzdeHesapla = ($AnketinBirinciSikkiIcinOySayisi / $AnketiToplamOySayisi) * 100;
            $BirinciSecenekIcinYuzde = number_format($BirinciSecenekIcinYuzdeHesapla, 2, ",","");
            $IkinciSecenekIcinYuzdeHesapla = ($AnketinIkinciSikkiIcinOySayisi / $AnketiToplamOySayisi) * 100;
            $IkinciSecenekIcinYuzde = number_format($IkinciSecenekIcinYuzdeHesapla, 2, ",","");
            $UcuncuSecenekIcinYuzdeHesapla = ($AnketinUcuncuSikkiIcinOySayisi / $AnketiToplamOySayisi) * 100;
            $UcuncuSecenekIcinYuzde = number_format($UcuncuSecenekIcinYuzdeHesapla, 2, ",","");
        } else {
            $BirinciSecenekIcinYuzde = "0,00";
            $IkinciSecenekIcinYuzde = "0,00";
            $UcuncuSecenekIcinYuzde = "0,00";
        }
    ?>
    <table width="300" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="30">
            <td colspan="2"><?php echo $Kayit["soru"];?></td>
        </tr>
        <tr height="30">
            <td width="75">%<?php echo $BirinciSecenekIcinYuzde; ?></td>
            <td width="225"><?php echo $Kayit["cevapbir"];?></td>
        </tr>
        <tr height="30">
            <td width="75">%<?php echo $IkinciSecenekIcinYuzde; ?></td>
            <td width="225"><?php echo $Kayit["cevapiki"];?></td>
        </tr>
        <tr height="30">
            <td width="75">%<?php echo $UcuncuSecenekIcinYuzde; ?></td>
            <td width="225"><?php echo $Kayit["cevapuc"];?></td>
        </tr>
        <tr height="30">
            <td colspan="2" align="right"><a href="index.php" style="color:blue; text-decoration: none;">Anasayfaya dön</a></td>
        </tr>
    </table>
    <?php
    } else {
        header("Location:index.php");
        exit();
    }
    ?>
</body>
</html>

<?php
$VeritabaniBaglantisi = null;
?>
