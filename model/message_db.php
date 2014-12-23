<?php

function get_messages($userID) {
    global $db;
    $query = '
        SELECT me.messageID, me.titre, me.message, me.`date`, me.estLu, me.expediteurID, me.destinataireID, CONCAT_WS(\', \', us.nom, us.prenom) AS auteur
        FROM message AS me
        INNER JOIN utilisateur AS us
        ON us.utilisateurID = me.expediteurID
        WHERE me.destinataireID = '.$userID.'
        order by date desc;';

    $result = $db->query($query);

    return $result;
}

function get_message($userID ,$messageID) {
    global $db;
    $query = '
        SELECT me.messageID, me.titre, me.message, me.`date`, me.estLu, me.expediteurID, me.destinataireID, CONCAT_WS(\', \', us.nom, us.prenom) AS auteur
        FROM message AS me
        INNER JOIN utilisateur AS us
        ON us.utilisateurID = me.expediteurID
        WHERE me.destinataireID = '.$userID.' AND  me.messageID = '.$messageID.';';

    $result = $db->query($query);

    return $result->fetch();
}


function get_nombre_messages($userID) {
    global $db;
    $query = '
        SELECT count(messageID)
        FROM message AS me
        WHERE me.destinataireID = '.$userID.' and estLu = 0;';

    $result = $db->query($query);

    return $result->fetch()[0];
}

function insert_message($titre,  $message, $expediteurID, $destinataireID){
    global $db;

    $query = "
              INSERT INTO `message` (`titre`,`message`, `date`, `expediteurID`, `destinataireID`)
              VALUES ('$titre', '$message', NOW(), '$expediteurID', '$destinataireID');
          ";

    $db->exec($query);
}


function remove_message($messageID, $userID){
    global $db;

    $query = "
              DELETE FROM `message`
              WHERE `messageID` = '$messageID' AND `destinataireID` = '$userID'
          ";

    $db->exec($query);
}

function lire_message($userID, $messageID){

    global $db;

    $query = "
                update message
                set estLu = 1
                where messageID = $messageID and destinataireID = $userID;

    ";

    $db->exec($query);
}