<?php

function get_all_resultat($userID)
{
    global $db;
    $query = 'SELECT *
        FROM `resultat` R
        INNER JOIN `entrainement` E
        ON R.`entrainementID` = E.`entrainementID`
        WHERE R.clientID = '.$userID;
    $result = $db->query($query);

    $resultat = Array();

    while($data = $result->fetch())
    {
        $resultat[$data['resultatID']] = $data;
    }

    return $resultat;
}
