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
    $alimentation = get_alimentation($userInfo['utilisateurID'], $_GET['edit']);
}
else
{
    $edit = false;
}
?>

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
                            echo '<option value="'.$categorieCourante['categorieID'].'"';
                            if($edit && $categorieCourante['categorieID'] == $alimentation['categorieID'])
                                echo ' selected ';
                            echo '>'.$categorieCourante['nom'].'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nom Repas:</label>
                    <input class="form-control" value="<?php if($edit) echo $alimentation['nomRepas']; ?>" required name="nomRepas">
                </div>

                <div class="form-group">
                    <label>calorie:</label>
                    <input class="form-control" value="<?php if($edit) echo $alimentation['calorieIngere']; ?>"  required name="calorieIngere">
                </div>
                <div class="form-group">
                    <label>date:</label>
                    <input class="form-control"  id="datepicker" name="date" value="<?php if($edit) echo $alimentation['date']; else echo date('Y-m-d'); ?>" >
                </div>

                <?php if($edit) echo '<input type="hidden" name="alimentationID" value="'.$alimentation['alimentationID'].'" >'; ?>

                <button type="submit" class="btn btn-primary pull-right" name="action" value="<?php if($edit) echo 'update_alimentation">Changer'; else echo 'insert_alimentation">Ajouter'; ?></button>
            </form>
        </div>
        <div class="col-md-6">

        </div>


    </div>
</div>
