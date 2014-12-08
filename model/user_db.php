<?php

function get_user($userID) {
    global $db;
    $query = 'SELECT * FROM utilisateur
              WHERE utilisateurID = '.$userID;
    $result = $db->query($query);
	$result = $result->fetch();
    return $result;
}