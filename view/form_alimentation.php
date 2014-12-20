<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->

<script>
    $(function() {
        $.datepicker.ISO_8601;
        $("#datepicker").datepicker({ format: "yyyy/mm/dd" });

    });
</script>

<div class="panel panel-default">
    <div class="panel-heading">Alimentation de la journee</div>
    <div class="panel-body">
        <strong style="margin-bottom: 15px; display: block;">Veillez entre les calories ingerees pendant la journee </strong>
        <div class="col-md-6">

            <form action="#">

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
                    <input class="form-control"  id="datepicker" name="date">
                    <!--value="<?php //echo date('Y-m-d'); ?>" -->
                </div>
                <button type="submit" class="btn btn-primary" name="action" value="insert_alimentation">Ajouter</button>
            </form>
        </div>
        <div class="col-md-6">

        </div>


    </div>
</div>
