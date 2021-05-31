<?php 

include "layout/header.php";
?>

<div class="row w-100">
<h2 class="text-dark p-5">Accéder à votre espace</h2>
  <form action="" method="post" class="w-75 mx-auto">
  <?php if(isset($error_message)): ?>
    <div class="alert alert-danger">
      <?php echo $error_message; ?>
      <?php endif; ?>
      <div>
        <label for="email" class="form-label text-dark">Email:</label>
        <input type="email" name="email" class="form-control my-2">
     </div>
     <div>
        <label for="password" class="form-label text-dark">Mot de passe :</label>
        <input type ="password" name="password" id="password" class="form-control my-2">
     </div>
     <div>
        <input class="form-control btn btn-warning text-dark my-2" type="submit" value="Connexion">
     </div>
  </form>   
</div>

<?php include "layout/footer.php"; ?>