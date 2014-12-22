<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->

<script>
    $(function() {
        $("#datepicker").datepicker({ format: "yyyy-mm-dd" });

    });
</script>

<div class="panel panel-default">
    <div class="panel-heading">Exercice de la journée</div>
    <div class="panel-body">
        <strong style="margin-bottom: 15px; display: block;">Veuillez entrer les informations par rapport à l'exercice accompli </strong>


            <form action="#" method="post">

                <div class="col-md-6">

                <div class="form-group">
                    <label>ID de l'exercice:</label>
                    <select name="categorie" class="form-control">
                        <?php
                        $entrainements = get_all_entrainement();
                        foreach($entrainements as $entrainementCourant)
                        {
                            echo '<option value="'.$entrainementCourant['entrainementID'].'">'.$entrainementCourant['nom'].'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>FQ Max:</label>
                    <input class="form-control" value=""  required name="FQMax">
                </div>
                <div class="form-group">
                    <label>VO2 Max:</label>
                    <input class="form-control" value=""  required name="VO2Max">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Calories brûlées:</label>
                    <input class="form-control" value=""  required name="calorieBrulee">
                </div>
                <div class="form-group">
                    <label>Date:</label>
                    <input class="form-control"  id="datepicker" name="date" value="<?php echo date('Y-m-d');?>">

                </div>
                </div>
                <button type="submit" class="btn btn-primary" name="action" value="insert_resultat">Enregistrer</button>
            </form>



    </div>
</div>
