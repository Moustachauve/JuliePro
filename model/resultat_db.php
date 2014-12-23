<?php

function get_all_resultat($userID)
{
    global $db;
    $query = 'SELECT *
        FROM `resultat` R
        INNER JOIN `entrainement` E
        ON R.`entrainementID` = E.`entrainementID`
        WHERE R.clientID = '.$userID.'
        ORDER BY `date` DESC';
    $result = $db->query($query);

    return $result;
}

function get_resultat($userID, $resultatID)
{
    global $db;
    $query = 'SELECT *
              FROM `resultat` R
              INNER JOIN `entrainement` E
              ON R.`entrainementID` = E.`entrainementID`
              WHERE R.clientID = '.$userID.' AND R.resultatID = '.$resultatID;

    $result = $db->query($query);

    return $result->fetch();
}

function get_all_entrainement(){

    global $db;
    $query = 'select * from  `entrainement` ; ';


    $result = $db->query($query);

    return $result;
}


    function insert_resultat($FQMax,$VO2Max, $calorieBrulee, $date, $entrainementID, $clientID){
        global $db;

        $query = "
              INSERT INTO `resultat` (`FQMax`,`VO2Max`, `calorieBrulee`, `date`, `entrainementID`, `clientID` )
              VALUES ('$FQMax', '$VO2Max', '$calorieBrulee', '$date', '$entrainementID', '$clientID' );
          ";

        $db->exec($query);
}


function remove_resultat($resultatID, $userID){
    global $db;

    $query = "
              DELETE FROM `resultat`
              WHERE `resultatID` = '$resultatID' AND `clientID` = '$userID'
          ";

    $db->exec($query);
}

function update_resultat($clientID, $resultatID, $FQMax, $VO2Max, $calorieBrulee, $date, $entrainementID)
{
    global $db;

    $query = "
              UPDATE `resultat`
              SET `FQMax` = '$FQMax',
              `VO2Max` = '$VO2Max',
              `calorieBrulee` = '$calorieBrulee',
              `date` = '$date',
              `entrainementID` = '$entrainementID'
              WHERE `resultatID` = $resultatID AND `clientID` = $clientID;
          ";

    $db->exec($query);
}