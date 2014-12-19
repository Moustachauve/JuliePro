<?php

insert_alimentation($_SESSION['userID'],$_POST['alimentationID'],$_POST['nomRepas'],$_POST['calorieIngere']);

$userInfo = get_user($_SESSION['userID']);

include('view/alimentation.php');
?>