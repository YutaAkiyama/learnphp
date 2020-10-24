<?php  
require 'validation.php';

echo '<pre>';
var_dump($_POST);
echo'</pre>';

$pageFlag = 0;
// $error = validation($_POST);
  if (!empty($_POST['btn_confirm'])){
    $pageFlag = 1;
  }
  if (!empty($_POST['btn_submit'])){
    $pageFlag = 2;
  }

?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>

<?php if($pageFlag === 0) :?>

<div class="container">
<div class="row">
  <div class="col-md-6">
    <form method="POST" action="index.php">
    <div class="form-group">
      <label for="your_name">氏名</label>
      <input type="text" class="form-control" id="your_name" name="your_name" value="<?php echo $_POST['your_name'];?>"></input>
    </div>
    <div class="form-group">
      <label for="email">メールアドレス</label>
      <input type="text" class="form-control" id="email" name="email" value="<?php echo $_POST['email'];?>"></input>
    </div>

  </div>
</div>
</div>
<br>
<input type="submit" name="btn_confirm" value="確認する">
</form>
<?php endif; ?>


<?php if($pageFlag === 1) :?>
  <form method="POST" action="index.php">
  名前:<?php echo $_POST['your_name'];?>
  <br>
  メールアドレス:<?php echo $_POST['email'];?>
  <br>
  <input type="submit" name="back" value="戻る">
  <input type="submit" name="btn_submit" value="送信する">

  <input type="hidden" name="your_name" value="<?php echo $_POST['your_name'];?>" ></input>
  <input type="hidden" name="email" value="<?php echo $_POST['email'];?>"></input>
 </form>
<?php endif; ?>

<?php if($pageFlag === 2) :?>

<?php require '../mainte/insert.php' ;

insertContact($_POST)
?>
送信が完了しました。

<?php endif; ?>






 


</body>
</html>


