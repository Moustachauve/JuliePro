<?php

insert_message($_POST['titre'], $_POST['message'], $_SESSION['userID'], $userInfo['entraineurID']);

include('view/messageprive.php');
?>