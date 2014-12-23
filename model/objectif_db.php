<?php

function get_objectif_semaine($userID, $timestamp) {

    $week = date("W", $timestamp) - 1;
    $year = date("Y", $timestamp);

    global $db;
    $query = "SELECT * FROM objectif
              WHERE clientID = '.$userID.' AND
              WEEK(semaine) = $week AND YEAR(semaine) = $year";
    $result = $db->query($query);
    $result = $result->fetch();
    return $result;
}



