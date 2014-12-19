<?php $messages = get_messages($userInfo['utilisateurID']); ?>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">Messages privés <a href="#" class="btn btn-primary pull-right">Envoyer un message</a></div>
        <div class="panel-body">

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th width="35"> </th>
                    <th width="200">Auteur</th>
                    <th>Titre</th>
                    <th>Message</th>
                    <th width="165">date</th>
                    <th width="35"> </th>
                </tr>
                </thead>

                <?php

                foreach($messages as $messageCourant)
                {
                    echo '<tr';
                    if(!$messageCourant['estLu'])
                        echo ' class="info" ';
                    echo '>';
                    echo'<td><span class="glyphicon glyphicon-envelope"></span>';
                    echo'<td>'.$messageCourant['auteur'].'</td>';
                    echo'<td>'.$messageCourant['titre'].'</td>';
                    echo'<td>'.$messageCourant['message'].'</td>';
                    echo'<td>'.$messageCourant['date'].'</td>';
                    echo'<td><a href="#" class="glyphicon glyphicon-remove color-red"></td></td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
