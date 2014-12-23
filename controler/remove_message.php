<?php

remove_message($_GET['messageID'], $userInfo['utilisateurID']);

include('view/messageprive.php');
?>