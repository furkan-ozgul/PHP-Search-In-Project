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
    <table width="500" border="0" cellpadding="0" cellspacing="0" align="center" style="margin-top:150px">
        <tr>
            <td><input type="text" name="kelime" style="width: 100%;height:30px;padding: 0px 20px;margin-bottom:20px"></td>
        </tr>
        <tr>
            <td align="center"><input type="submit" value="Search" style="padding: 0 80px;height:30px"></td>
        </tr>
    </table>
</body>
</html>
<?php 
$VeritabaniBaglantisi   =   null;
?>