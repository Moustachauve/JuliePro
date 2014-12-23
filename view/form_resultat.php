<script>
    $(function() {
        var today=new Date();

        $("#datepicker").datepicker({
            language: "fr",
            endDate: today,
            autoclose: true,
            todayHighlight: true
        });
    });
</script>

<?php
if(isset($_GET['edit']))
{
    $edit = true;
    $resultat = get_resultat($userInfo['utilisateurID'], $_GET['edit']);
}
else
{
    $edit = false;
}
?>

<div class="panel panel-default">
    <div class="panel-heading">Exercice de la journée</div>
    <div class="panel-body">
        <strong style="margin-bottom: 15px; display: block;">Veuillez entrer les informations par rapport à l'exercice accompli </strong>

        <form action="#" method="post">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label>Choix de l'exercice:</label>
                        <select name="entrainementID" class="form-control">
                            <?php
                            $entrainements = get_all_entrainement();
                            foreach($entrainements as $entrainementCourant)
                            {
                                echo '<option value="'.$entrainementCourant['entrainementID'].'"';
                                if($edit && $entrainementCourant['entrainementID'] == $resultat['entrainementID'])
                                    echo ' selected ';
                                echo '>'.$entrainementCourant['nom'].'</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>FQ Max:</label>
                        <input class="form-control" value="<?php if($edit) echo $resultat['FQMax']; ?>"  required name="FQMax">
                    </div>
                    <div class="form-group">
                        <label>VO2 Max:</label>
                        <input class="form-control" value="<?php if($edit) echo $resultat['VO2Max']; ?>"  required name="VO2Max">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Calories brûlées:</label>
                        <input class="form-control" value="<?php if($edit) echo $resultat['calorieBrulee']; ?>"  required name="calorieBrulee">
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <input class="form-control"  id="datepicker" name="date" value="<?php if($edit) echo $resultat['date']; else echo date('Y-m-d');?>">
                    </div>
                </div>
            </div>

            <?php if($edit) echo '<input type="hidden" name="resultatID" value="'.$resultat['resultatID'].'" >'; ?>

            <button type="submit" class="btn btn-primary pull-right" name="action" value="<?php if($edit) echo 'update_resultat">Changer'; else echo 'insert_resultat">Ajouter'; ?></button>
        </form>
    </div>
</div>
