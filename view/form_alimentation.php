<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->

<script>
    $(function() {
        $( "#datepicker" ).datepicker();
        $( "#datepicker" ).datepicker( "option", "dateFormat", 'YYYY-mm-dd');
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
                    <input class="form-control" value="" required>
                </div>

                <div class="form-group">
                    <label>calorie:</label>
                    <input class="form-control" value=""  required>
                </div>
                <div class="form-group">
                    <label>date:</label>
                    <input class="form-control" value="<?php echo ''; ?>" id="datepicker">
                </div>

            </form>
        </div>
        <div class="col-md-6">

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>


    </div>
</div>
