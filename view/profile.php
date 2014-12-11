<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->

<?php
if(isset($success))
    if($success === true)
    {
        ?>
        <div class="alert bg-success" role="alert">
            <span class="glyphicon glyphicon-check"></span> Vos modifications ont été enregistrées avec succès
        </div>
    <?php
    }
    else
    {
        echo '<div class="alert bg-danger" role="alert">';
        echo '<span class="glyphicon glyphicon-exclamation-sign"></span> ';

        if($success == 'tel')
            echo 'Le numéro de téléphone est incorrect';
        elseif($success == 'cell')
            echo 'Le numéro de téléphone cellulaire est incorrect';

        echo '</div>';
    }

 ?>

<div class="panel panel-default">
    <div class="panel-heading">Données du profil</div>
    <div class="panel-body">
        <form action="?action=view_profile" method="post" id="profile_form">
        <strong style="margin-bottom: 15px; display: block;">Pour changer des informations, remplacez simplement les informations ci-dessous et appuyer sur le bouton</strong>
        <div class="col-md-6">

                <div class="form-group">
                <label>Nom:</label>
                <input class="form-control" value="<?php echo $userInfo['nom']; ?>" readonly name="nom">
                </div>
                <div class="form-group">
                    <label>Prénom:</label>
                    <input class="form-control" value="<?php echo $userInfo['prenom']; ?>" readonly name="prenom">
                </div>

                <div class="form-group">
                <label>Âge:</label>
                <input class="form-control" value="<?php echo $userInfo['age']; ?>" readonly name="age">
                    </div>
                <div class="form-group">
                <label>Adresse:</label>
                <input class="form-control" value="<?php echo $userInfo['adresse']; ?>" placeholder="numéro de rue et rue" required name="adresse">
                    </div>
                <div class="form-group">
                <label>Ville:</label>
                <input class="form-control" value="<?php echo $userInfo['ville']; ?>" placeholder="Ville" required name="ville">
                    </div>

        </div>
                <div class="col-md-6">
                <div class="form-group">
                <label>Adresse Courriel:</label>
                <input class="form-control" type="email" value="<?php echo $userInfo['courriel']; ?>" placeholder="exemple@exemple.ca" required name="adressecourriel">
                </div>

                <div class="form-group">
                <label>Numéro de téléphone:</label>
                <input class="form-control telephone" value="<?php echo $userInfo['noTel']; ?>" placeholder="(000)000-0000" type="tel" required name="notel">
                </div>
                    <div class="form-group">
                        <label>Numéro de téléphone cellulaire:</label>
                        <input class="form-control telephone" value="<?php echo $userInfo['noCell']; ?>" placeholder="(000)000-0000" type="tel" required name="nocell">
                    </div>
                <div class="form-group">
                <label>Date d'inscription:</label>
                <input class="form-control" value="<?php echo $userInfo['dateInscription']; ?>" readonly name="date">
                    </div>
                    <div class="form-group">
                        <label>Code Postal:</label>
                        <input class="form-control" value="<?php echo $userInfo['codePostal']; ?>" placeholder="X0X 0X0" required name="codepostal">
                    </div>

                </div>
        <div class="col-md-6">

            <button type="submit" class="btn btn-primary" name="action" value="update_profile">Modifier vos informations</button>
        </div>

        </form>

    </div>
</div>


</div>