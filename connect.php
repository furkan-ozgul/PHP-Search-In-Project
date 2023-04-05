<?php 

try{
        $VeritabaniBaglantisi   =    new PDO("mysql:local=localhost;dbname=crud_db;charset=UTF8","root","");
}
catch(PDOException $Hata){
    $Hata->getMessage();
    die();
}

function Filtre($Deger){
    $Bir          =       trim($Deger);
    $Iki          =       strip_tags($Bir);
    $Uc           =       htmlspecialchars($Iki,ENT_QUOTES);
    $Sonuc        =       $Uc;
    return $Sonuc;

}

?>