<?php
update_resultat($userInfo['utilisateurID'], $_POST['resultatID'], $_POST['FQMax'], $_POST['VO2Max'], $_POST['calorieBrulee'], $_POST['date'], $_POST['entrainementID']);

$succes = true;

include('view/resultat.php');