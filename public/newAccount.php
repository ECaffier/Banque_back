<?php
session_start();
    include "../layout/header.php";
    require "../model/createNewAccount.php";
    require "../model/connexion.php";


    if(!empty($_POST)) {
        if (!addAccount($db, $_POST)) {
            echo "L'enregistrement a échoué";
        }
    }


?>

<div class="row">
    <aside class="col-12 col-md-4">
        <h2>Créer un compte</h2>
        <form action="" method="POST">
            <input name="solde" class="form-control my-2" type="number">
            <p>
            <label for="pays">Dans quel pays habitez-vous ?</label><br />
                <select name="account_type" id="account_type" class="form-control my-2" type="text">
                    <option value="PEL">PEL</option>
                    <option value="Livret A">Livret A</option>
                    <option value="Courant">Courant</option>
                </select>
            </p>
            <input class="form-control btn btn-warning text-dark my-2" type="submit" value="Envoyer">
        </form>
    </aside>
    <section class="col-12 col-md-8">
        <h3>Vos informations</h3>
        <?php if(isset($account)): ?>
            <ul class="list-group my-3">
                <li class="list-group-item"><?php echo htmlspecialchars($account["account_type"]) ?></li>
                <li class="list-group-item"><?php echo $account["solde"] ?></li>
            </ul>
        <?php endif; ?>
    </section>
</div>


 <?php
    include "../layout/footer.php";
 ?>