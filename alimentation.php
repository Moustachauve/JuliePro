<?php
include('view/header.php');
include('view/sidemenu.php');
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Alimentation de <?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->



    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Tableau des aliments</div>
            <div class="panel-body">
                <table data-toggle="table" data-url="tables/data2.json" >
                    <thead>
                    <tr>
                        <th data-field="name" data-align="right">Nom du repas</th>
                        <th data-field="name">Calories ingérées</th>
                        <th data-field="name">Date de la consommation</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>



<?php include('view/footer.php'); ?>