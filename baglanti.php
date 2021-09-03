<?php
define("_HOST", "localhost");
define("_DB", "proje");
define("_DBUSER", "root");
define("_DBPASS", "");

//define methodu değişmeyecek değerler için kullanılır .Burada veritabanı adı bağlantısı vs değişmeyeceği için define içinde kullanılır

try{
  $db=new PDO("mysql:host="._HOST.";dbname="._DB."",_DBUSER,_DBPASS);
  $db->exec("SET NAMES 'utf8';SET CHARSET 'utf8'");

}catch (PDOException $ex){
  echo $ex->getMessage();

}

