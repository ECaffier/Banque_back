<?php include "view/layout/header.php"?>

<div class="row">
    <aside class="col-12 col-md-4">
        <h2>Déposer de l'argent</h2>
        <form action="" method="POST">
        <p>
            <label for="withdraw">Combien souhaitez vous déposer ?</label><br />
        </p>
            <input name="amount" class="form-control my-2" type="number" placeholder="amount">
            <input name="motif_operation" class="form-control my-2" type="text" placeholder="motif">
            <input class="form-control btn btn-warning text-dark my-2" type="submit" value="Envoyer">
        </form>
    </aside>
</div>

<?php include "view/layout/footer.php"?>