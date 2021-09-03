 <?php 
//VT BAĞLAN
header("Content-Type: text/html; charset=utf-8");
//error_reporting(0);
setlocale(LC_ALL,'tr_TR.UTF-8','tr_TR','turkish');

$DBhost  = "localhost";
$DBuser  = "root";
$DBpass  = "";
$DBname  ="proje";
try{
    $db = new PDO("mysql:host=$DBhost;DBname=$DBname",$DBuser, $DBpass);

}catch(PDOExpception $e){

    echo $e->getMessage();
   
}
$db->exec("SET NAMES'utf8'; SET CHARSET 'utf8'");
define("_URL","http://localhost/light/admin/pages/");
?>