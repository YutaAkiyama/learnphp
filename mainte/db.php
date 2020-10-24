<?php 



const DB_HOST = 'mysql:dbname=phptest;host=127.0.0.1;charset=utf8';
const DB_USER = "php_user";
const DB_PASSWORD  = "password123";



try{
  $pdo = new PDO(DB_HOST,DB_USER,DB_PASSWORD);
  echo '接続成功';
} 
catch(PDOException $e){
  echo "接続失敗". $e->getMessage()."\n";
  exit();
}

?>

