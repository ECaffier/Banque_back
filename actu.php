
<?php
  include ("view/layout/header.php");
  if(!isset($_SESSION["user"])): 
  header("Location:login.php");
endif; 

?>


  <section class ="row justify-content-around cardAlign" id="apiContent">

  </section>


<?php include ("view/layout/footer.php") ?>

