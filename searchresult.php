<?php 
require_once("connect.php");
?>

<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="searchresult.php" method="post">
		<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td><input type="text" name="kelime" style="width: 100%; height: 30px; margin-bottom: 20px; padding: 0 20px;"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="Arama Yap" style="padding: 0 100px; height: 30px;"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="left"><?php
					$GelenKelime	=	filtre($_POST["kelime"]);
					$Kosul			=	"%$GelenKelime%";

					$Sorgu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM products WHERE isim LIKE ?");
					$Sorgu->execute([$Kosul]);
					$KayitSayisi	=	$Sorgu->rowCount();
					$Kayitlar		=	$Sorgu->fetchAll(PDO::FETCH_ASSOC);

					echo "Bulunan Kayıtlar<br />";
					foreach($Kayitlar as $Satirlar){
						echo $Satirlar["isim"] . "<br />";
					}
				?></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
$VeritabaniBaglantisi   =   null;
?>