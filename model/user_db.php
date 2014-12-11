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
    $query = 'SELECT count(clientID), sum(calorieBrulee),avg(FQmax)  FROM `resultat`
                WHERE `date` >= adddate(curdate(), INTERVAL 1-DAYOFWEEK(curdate()) DAY)
                AND `date` <= adddate(curdate(), INTERVAL 7-DAYOFWEEK(curdate()) DAY)
                AND `clientID` = '.$userID;
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}
function get_stat_calorie_ingere($userID)
{
    global $db;
    $query = 'SELECT AVG(calories)
                FROM (
                    SELECT sum(calorieIngere) AS calories
                    FROM `alimentation`
                    WHERE `date` >= adddate(curdate(), INTERVAL 1-DAYOFWEEK(curdate()) DAY)
                    AND `date` <= adddate(curdate(), INTERVAL 7-DAYOFWEEK(curdate()) DAY)
                    AND `clientID` = '.$userID.'
                    GROUP BY date
                ) AS caloriesParJour';
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}

function save_user($userID, $noRue, $rue, $ville, $adressecourriel, $notel, $nocell, $codepostal)
{
    global $db;
    $query = "UPDATE `utilisateur` SET `noTel` = '$notel', `noCell` = '$nocell', `noRue` = '$noRue',`rue` = '$rue' `ville` = '$ville', `codePostal` = '$codepostal', `courriel` = '$adressecourriel' WHERE `utilisateurID` = '$userID';";
    $result = $db->exec($query);


}