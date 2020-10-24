<?php 

// db接続

// ini_set("display_errors",1);
// error_reporting(E_ALL);

function insertContact($data){

require 'db.php';
// 入力 DB保存

$params = [
  'id' => null,
  'your_name' => $data['your_name'],
  'email' => $data['email'],
];


// $params = [
//   'id' => null,
//   'your_name' => 'なまえ123',
//   'email' => 'test@gmail.com',
// ];


$count = 0;
$columns = "";
$values = "";

foreach(array_keys($params) as $key){
  if($count++>0){
    $columns .= ",";
    $values .= ",";
  }
  $columns .= $key;
  $values .= ":".$key;
}

$sql = 'insert into contacts ('.$columns.')values('.$values.')';

// var_dump($sql);

$stmt = $pdo->prepare($sql);//prepare
$stmt->execute($params); //実行
}

?>

