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


function insert_alimentation($userID, $alimentationID, $nomRepas, $calorieIngere){
    global $db;
    $query = "insert into `alimentation`(`userID`,`alimentationID`,`nomRepas`,`calorieIngere`)
    values ('$userID', '$alimentationID','$nomRepas','$calorieIngere');";

}