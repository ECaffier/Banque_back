<?php 

try{
  $db = new PDO('mysql:host=localhost;dbname=banque_php', 'root' );
}catch (Exception $e){
  echo $e->getMessage();
}

?>