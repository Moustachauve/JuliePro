<?php
include('view/header.php');
include('view/sidemenu.php');
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->

<div class="panel panel-default">
    <div class="panel-heading">Données du profil</div>
    <div class="panel-body">
        <strong style="margin-bottom: 15px; display: block;">Pour changer des informations, remplacez simplement les informations ci-dessous et appuyer sur le bouton</strong>
        <div class="col-md-6">

            <form action="#">



                <div class="form-group">
                <label>Nom:</label>
                <input class="form-control" value="<?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?>" readonly>
                </div>

                <div class="form-group">
                <label>Âge:</label>
                <input class="form-control" value="<?php echo $userInfo['age']; ?>" readonly >
                    </div>
                <div class="form-group">
                <label>Adresse:</label>
                <input class="form-control" value="<?php echo $userInfo['adresse']; ?>" placeholder="numéro de rue et rue" >
                    </div>
                <div class="form-group">
                <label>Ville:</label>
                <input class="form-control" value="<?php echo $userInfo['ville']; ?>" placeholder="Ville" >
                    </div>

        </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>Adresse Courriel:</label>
                <input class="form-control" type="email" value="<?php echo $userInfo['courriel']; ?>" placeholder="exemple@exemple.ca" >
                </div>

                <div class="form-group">
                <label>Numéro de téléphone:</label>
                <input class="form-control" value="<?php echo $userInfo['noTel']; ?>" placeholder="(000)000-0000" type="tel" >
                </div>
                <div class="form-group">
                <label>Date d'inscription:</label>
                <input class="form-control" value="<?php echo $userInfo['dateInscription']; ?>" readonly >
                    </div>
                    <div class="form-group">
                        <label>Code Postal:</label>
                        <input class="form-control" value="<?php echo $userInfo['codePostal']; ?>" placeholder="X0X 0X0" >
                    </div>

                </div>
        <div class="col-md-6">

            <button type="submit" class="btn btn-primary">Modifier vos informations</button>
        </div>

        </form>

    </div>
</div>


</div>

<?php include('view/footer.php'); ?>
