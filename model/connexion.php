<?php 

try{
  $db = new PDO('mysql:host=localhost;dbname=banque_php', 'root', 'root' );
}catch (Exception $e){
  echo $e->getMessage();
}

?>