<?php 
include "view/layout/header.php";
?>

<div class="row">
    <?php foreach($accounts as $id => $account) : ?>
        <div class="col-6 col-md-4">
            <ul class="list-group my-5">
                <?php foreach($account as $key=>$value) : ?>
                    <li class="list-group-item"><?php echo "$key : $value" ?></li>
                <?php endforeach; ?>
                    <li class="list-group-item text-center">
                        <a class="btn btn-warning text-danger px-5" href="singleAccount.php?id=<?php echo $id;?>">Voir</a>
                    </li>       
            </ul>
        </div>
    <?php endforeach; ?>
</div>

<?php include "layout/footer.php"; ?>