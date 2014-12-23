<?php

function get_all_alimentation($userID){

    global $db;
    $query = '      SELECT a.`alimentationID`, a.`nomRepas`, a.`calorieIngere`,`date`, c.categorieID, c.nom
                    FROM `alimentation` a
                    INNER JOIN categorienourriture c
                    on c.categorieID = a.categorieID
                    WHERE a.clientID = '.$userID.'
                    ORDER BY `date` DESC';


    $result = $db->query($query);

    $alimentation = Array();

    while($data = $result->fetch())
    {
        $alimentation[$data['alimentationID']] = $data;
    }

    return $alimentation;
}

function get_alimentation($userID, $alimentationID)
{
    global $db;
    $query = '      SELECT a.`alimentationID`, a.`nomRepas`, a.`calorieIngere`,`date`, c.categorieID, c.nom
                    FROM `alimentation` a
                    INNER JOIN categorienourriture c
                    on c.categorieID = a.categorieID
                    WHERE a.clientID = '.$userID.' AND a.alimentationID = '.$alimentationID;


    $result = $db->query($query);

    return $result->fetch();
}

function get_all_categorie(){

    global $db;
    $query = 'SELECT * FROM  `categorienourriture` ; ';


    $result = $db->query($query);

    return $result;
}
function insert_alimentation($nomRepas,  $calorieIngere, $date, $categorieID, $clientID){
    global $db;

    $query = "
              INSERT INTO `alimentation` (`nomRepas`,`calorieIngere`, `date`, `categorieID`, `clientID`)
              VALUES ('$nomRepas', '$calorieIngere', '$date', '$categorieID', '$clientID');
          ";

    $db->exec($query);
}


function remove_alimentation($alimentationID, $userID){
    global $db;

    $query = "
              DELETE FROM `alimentation`
              WHERE `alimentationID` = '$alimentationID' AND `clientID` = '$userID'
          ";

    $db->exec($query);
}

function update_alimentation($clientID, $alimentationID, $categorie, $nomRepas, $calorie, $date)
{
    global $db;

    $query = "
              UPDATE `alimentation`
              SET `nomRepas` = '$nomRepas',
              `calorieIngere` = '$calorie',
              `date` = '$date',
              `categorieID` = '$categorie'
              WHERE `alimentationID` = $alimentationID AND `clientID` = $clientID;
          ";

    $db->exec($query);
}