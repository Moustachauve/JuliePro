<?php
include('model/user_db.php');
include('model/database.php');

$userID = $_GET['userID'];

$caloriesParJour = Array();

global $db;
$query = '
                    SELECT sum(calorieIngere) AS calories,  WEEKDAY(`date`) AS dayOfWeek
                    FROM `alimentation`
                    WHERE `date` >= adddate(curdate(), INTERVAL 1-DAYOFWEEK(curdate()) DAY)
                    AND `date` <= adddate(curdate(), INTERVAL 7-DAYOFWEEK(curdate()) DAY)
                    AND `clientID` = '.$userID.'
                    GROUP BY date';

$result = $db->query($query);

while($data = $result->fetch())
{
    $caloriesParJour[$data['dayOfWeek']] = $data['calories'];
}


echo json_encode($caloriesParJour);