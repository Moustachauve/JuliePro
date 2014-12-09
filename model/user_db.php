<?php

function get_user($userID) {
    global $db;
    $query = 'SELECT * FROM utilisateur
              WHERE utilisateurID = '.$userID;
    $result = $db->query($query);
	$result = $result->fetch();
    return $result;
}

function get_stat_entrainement_semaine($userID)
{
    global $db;
    $query = 'SELECT count(clientID), sum(calorieBrulee) FROM `resultat`
                WHERE `date` >= adddate(curdate(), INTERVAL 1-DAYOFWEEK(curdate()) DAY)
                AND `date` <= adddate(curdate(), INTERVAL 7-DAYOFWEEK(curdate()) DAY)
                AND `clientID` = '.$userID;
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}