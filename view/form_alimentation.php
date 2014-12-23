<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->

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

<div class="panel panel-default">
    <div class="panel-heading">Alimentation de la journée</div>
    <div class="panel-body">
        <strong style="margin-bottom: 15px; display: block;">Veuillez entrer les calories ingérées pendant la journée </strong>
        <div class="col-md-6">
            <form action="?action=view_alimentation" method="post">

                <div class="form-group">
                    <label>Catégorie:</label>
                    <select name="categorie" class="form-control">
                        <?php
                        $categories = get_all_categorie();
                        foreach($categories as $categorieCourante)
                        {
                            echo '<option value="'.$categorieCourante['categorieID'].'">'.$categorieCourante['nom'].'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nom Repas:</label>
                    <input class="form-control" value="" required name="nomRepas">
                </div>

                <div class="form-group">
                    <label>calorie:</label>
                    <input class="form-control" value=""  required name="calorieIngere">
                </div>
                <div class="form-group">
                    <label>date:</label>
                    <input class="form-control"  id="datepicker" name="date" value="<?php echo date('Y-m-d'); ?>" >
                </div>
                <button type="submit" class="btn btn-primary" name="action" value="insert_alimentation">Ajouter</button>
            </form>
        </div>
        <div class="col-md-6">

        </div>


    </div>
</div>
