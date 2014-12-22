<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Résultat de <?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?></h1>
    </div>
</div><!--/.row-->

    <?php $resultat = get_all_resultat($userInfo['utilisateurID']); ?>

    <div class="col-md-7">
        <div class="panel panel-default">
            <div class="panel-heading">Tableau des résultats</div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Nom de l'exercice</th>
                        <th>FQ Max</th>
                        <th>VO2 Max</th>
                        <th>Calories brûlées</th>
                        <th>Type</th>
                        <th>Date</th>

                    </tr>
                    </thead>

                    <?php

                    foreach($resultat as $resultatCourant)
                    {
                        echo '<tr>';
                            echo'<td>'.$resultatCourant['nom'].'</td>';
                            echo'<td>'.$resultatCourant['FQMax'].'</td>';
                            echo'<td>'.$resultatCourant['VO2Max'].'</td>';
                            echo'<td>'.$resultatCourant['calorieBrulee'].'</td>';
                            echo'<td>'.$resultatCourant['type'].'</td>';
                            echo'<td>'.$resultatCourant['date'].'</td>';
                        echo '<td>';
                            echo '<td><a href="#" class="glyphicon glyphicon-pencil "> </a>' ;
                            echo '<a href="?action=remove_resultat&resultatID='.$resultatCourant['resultatID'].'" class="glyphicon glyphicon-remove color-red"> </a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                ?>
                </table>
                <a href="?action=form_resultat" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Ajouter</a>
            </div>
        </div>
    </div>
