<?php 
include "view/layout/header.php";
?>
<div class="row container ">
    <?php foreach($accounts as $id => $account) : ?>
        <div class="col-6 col-md-4 text-center">
            <ul class="list-group my-5">
                    <li class="list-group-item btn-blue text-white"><?php echo $account->getAccount_type() ?></li>
                    <li class="list-group-item">Solde : <?php echo $account->getSolde() ?></li>
                    <li class="list-group-item">Date de création : <?php echo $account->getDate_creation() ?></li>
                    <li class="list-group-item text-center">
                        <a class="btn btn-blue text-white px-5" href="singleAccount.php?id=<?php echo $account->getAccountID();?>">Voir</a>
                        <a class="btn btn-danger text-white px-5" href="deleteAccount.php?id=<?php echo $account->getAccountID();?>">Delete</a>
                    </li>       
            </ul>
        </div>
    <?php endforeach; ?>
</div>
<?php include "layout/footer.php"; ?>