<?php

function get_all_alimentation($userID){

    global $db;
    $query = '      select a.`alimentationID`, a.`nomRepas`, a.`calorieIngere`,`date`, c.nom
                    from `alimentation` a
                    inner join categorienourriture c
                    on c.categorieID = a.categorieID
                    where a.clientID = '.$userID;


    $result = $db->query($query);

    $alimentation = Array();

    while($data = $result->fetch())
    {
        $alimentation[$data['alimentationID']] = $data;
    }

    return $alimentation;
}


function insert_alimentation($nomRepas,  $calorieIngere, $date, $categorieID, $clientID){
    global $db;

    $query = "
              INSERT INTO `alimentation` (`nomRepas`,`calorieIngere`, `date`, `categorieID`, `clientID`)
              VALUES ('$nomRepas', '$calorieIngere', '$date', '$categorieID', '$clientID');
          ";

    $db->exec($query);
}


function remove_alimentation($nomRepas, $date){
    global $db;

    $query = "
              DELETE FROM `alimentation`
              WHERE `nomRepas` = '$nomRepas' and `date` = '$date'
          ";

    $db->exec($query);
}