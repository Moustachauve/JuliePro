<?php

function get_stat_resultat($userID)
{
    global $db;
    $query = 'SELECT *
        FROM `resultat` R
        INNER JOIN `entrainement` E
        ON R.`entrainementID` = E.`entrainementID
        WHERE R.clientID = '.$userID;
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}
