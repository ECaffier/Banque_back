<?php
    include "layout/header.php";
 ?>

<?php if(isset($singleAccounts)): ?>
<div class="container text-dark py-5 text-center">
        <h2 class="border border-dark py-5"><?php echo $singleAccounts->getAccount_type();?></h2>
        <p class="border border-dark py-3"><?php echo $singleAccounts->getSolde();?></p>
        <p class="border border-dark py-3"><?php echo $singleAccounts->getDate_creation();?></p>
        <a class="btn btn-blue text-white px-5" href="deposit.php?id=<?php echo $singleAccounts->getAccountID();?>">Depot</a>
        <a class="btn btn-blue text-white px-5" href="withdraw.php?id=<?php echo $singleAccounts->getAccountID();?>">Retrait</a>
        <a class="btn btn-danger text-white px-5" href="deleteAccount.php?id=<?php echo $singleAccounts->getAccountID();?>">Supprimer le compte</a>
        
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