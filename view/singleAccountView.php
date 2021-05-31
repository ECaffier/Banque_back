<?php
    include "layout/header.php";
 ?>

<?php if(isset($account)): ?>
<div class="container text-dark py-5 text-center">
        <h2 class="border border-danger py-5"><?php echo $account["account_type"];?></h2>
        <p class="border border-danger py-3"><?php echo $account["solde"];?></p>
        <p class="border border-danger py-3"><?php echo $account["date_creation"]?></p>
    </div>
<?php else: ?>
    <div class="alert alert-secondary text-center" role="alert">
        <?php echo $error ?>
        <p>Pourquoi ne pas retourner à l'accueil ?</p>
        <a href="index.php" class="btn btn-dark text-white">Accueil</a>
    </div>
<?php endif ?>

 <?php
    include "layout/footer.php";
 ?>