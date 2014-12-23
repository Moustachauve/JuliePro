<?php
include('../model/user_db.php');
include('../model/database.php');

session_start();

$userID = $_SESSION['userID'];

$caloriesParJour = Array();

global $db;
$query = '
                    SELECT sum(calorieBrulee) AS caloriesPerdu,  WEEKDAY(`date`) AS dayOfWeek
                    FROM `resultat`
                    WHERE `date` >= adddate(curdate(), INTERVAL 1-DAYOFWEEK(curdate()) DAY)
                    AND `date` <= adddate(curdate(), INTERVAL 7-DAYOFWEEK(curdate()) DAY)
                    AND `clientID` = '.$userID.'
                    GROUP BY `date`';

$result = $db->query($query);


$currentDay = date("N", time()) - 1;

for($i = 0; $i < $currentDay; $i++)
{
    $caloriesParJour[$i] = 0;
}

while($data = $result->fetch())
{
    $caloriesParJour[$data['dayOfWeek']] = $data['caloriesPerdu'];
}

echo json_encode($caloriesParJour);