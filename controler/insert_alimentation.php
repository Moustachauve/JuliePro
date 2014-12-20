<?php

insert_alimentation($_POST['nomRepas'], $_POST['calorieIngere'], $_POST['date'], $_POST['categorie'], $_SESSION['userID']);

include('view/alimentation.php');
?>