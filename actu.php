
<?php
  include ("view/layout/header.php");

  session_start();
  if(!isset($_SESSION["user"])): 
  header("Location:login.php");
  endif; 

?>


  <section class ="row justify-content-around cardAlign" id="apiContent">

  </section>


<?php include ("view/layout/footer.php") ?>

