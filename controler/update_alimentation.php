<?php

update_alimentation($userInfo['utilisateurID'], $_POST['alimentationID'], $_POST['categorie'], $_POST['nomRepas'], $_POST['calorieIngere'], $_POST['date']);

$succes = true;

include('view/alimentation.php');