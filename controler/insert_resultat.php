
<?php

insert_resultat($_POST['FQMax'], $_POST['VO2Max'], $_POST['calorieBrulee'], $_POST['date'], $_POST['entrainementID'], $_SESSION['userID']);

include('view/resultat.php');
?>