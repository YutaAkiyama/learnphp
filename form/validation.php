<?php  

function validation($date){
  $error = [];
  if (empty($date['your_name'])){
    $error[]="氏名は必須";
  }
  return $error;
}

?>