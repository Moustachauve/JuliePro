<?php

remove_alimentation($_GET['alimentationID'], $userInfo['utilisateurID']);

include('view/alimentation.php');
?>