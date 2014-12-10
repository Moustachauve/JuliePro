<?php
include('view/header.php');
include('view/sidemenu.php');
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Alimentation de <?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->

    <?php $alimentation = get_all_alimentation($userInfo['utilisateurID']); ?>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Tableau des aliments</div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>bouffe</th>
                        <th>calories</th>
                        <th>catégorie</th>
                        <th>date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <?php

                    foreach($alimentation as $alimentCourant)
                    {
                        $alimentationCourante = Array();


                        echo '<tr>';
                        echo'<td>'.$alimentCourant['nomRepas'].'</td>';
                        echo'<td>'.$alimentCourant['calorieIngere'].'</td>';
                        echo'<td>'.$alimentCourant['nom'].'</td>';
                        echo'<td>'.$alimentCourant['date'].'</td>';
                        echo '<td><a href="#">Supp.</a> <a href="#">Modif.</a></td>';
                        echo '</tr>';
                    }
                ?>
                </table>
            </div>
        </div>
    </div>



<?php include('view/footer.php'); ?>