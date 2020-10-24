<?php 

require 'db.php';

//ユーザー入力なし
$sql = 'select * from contacts where id = 2'; //sql
$stmt = $pdo->query($sql); //sql実行
$result = $stmt->fetchall();

var_dump($result);


//ユーザー入力あり
$sql = 'select * from contacts where id = ;id';
$stmt = $pdo->prepare($sql);//prepare
$stmt->bindvalue('id',2,PRO::PARAM_INT);
$stmt->execute(); //実行


// <!-- SQLインジェクション　ユーザー入力 -->


// <!-- /トランザクション begin transaction,commit, roolback-->
// <!-- 残高確認→aさん引き出し→bさんに振り込み -->




$pdo -> beginTransaction();

try{
$stmt = $pdo->prepare($sql);//prepare
$stmt->bindvalue('id',2,PRO::PARAM_INT);
$stmt->execute(); //実行

$pdo-> commit();
}
catch(PDOException $e){
  $pdo -> rollback();
}
?>
