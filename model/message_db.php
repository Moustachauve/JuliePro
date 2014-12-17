<?php

function get_messages($userID) {
    global $db;
    $query = '
        SELECT me.messageID, me.titre, me.message, me.`date`, me.estLu, me.expeditaireID, me.destinataireID, CONCAT_WS(\', \', us.nom, us.prenom) AS auteur
        FROM message AS me
        INNER JOIN utilisateur AS us
        ON us.utilisateurID = me.expeditaireID
        WHERE me.destinataireID = '.$userID.';';

    $result = $db->query($query);


    $messages = Array();

    while($data = $result->fetch())
    {
        $messages[$data['messageID']] = $data;
    }

    return $messages;
}