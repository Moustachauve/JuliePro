<div class="col-md-12">
<?php
    $alimentation = get_all_alimentation($userInfo['utilisateurID']);

    if(isset($succes))
    {
        ?>
        <div class="alert bg-success" role="alert">
            <span class="glyphicon glyphicon-check"></span> Vos modifications ont été enregistrées avec succès
        </div>
        <?php
    }
    ?>
        <div class="panel panel-default">
            <div class="panel-heading">Tableau des aliments</div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Nom du repas</th>
                        <th>Calories</th>
                        <th>Catégorie</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <?php

                    foreach($alimentation as $alimentCourant)
                    {
                        echo '<tr>';
                            echo'<td>'.$alimentCourant['nomRepas'].'</td>';
                            echo'<td>'.$alimentCourant['calorieIngere'].'</td>';
                            echo'<td>'.$alimentCourant['nom'].'</td>';
                            echo'<td>'.$alimentCourant['date'].'</td>';
                            echo '<td>';
                                echo '<a href="?action=form_alimentation&edit='.$alimentCourant['alimentationID'].'" class="glyphicon glyphicon-pencil "> </a> ';
                                echo '<a href="?action=remove_alimentation&alimentationID='.$alimentCourant['alimentationID'].'" class="glyphicon glyphicon-remove color-red"> </a>';
                            echo '</td>';
                        echo '</tr>';
                    }
                ?>
                </table>
                <a href="?action=form_alimentation" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Ajouter</a>
            </div>
        </div>
    </div>
