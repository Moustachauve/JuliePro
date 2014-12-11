<?php

session_start();

$_SESSION['userID'] = 2;


include ("model/database.php");
include ("model/user_db.php");
include ("model/alimentation_db.php");
include ("model/resultat_db.php");

$userInfo = get_user($_SESSION['userID']);

if(isset($_GET['action']))
    $action = $_GET['action'];
elseif(isset($_POST['action']))
    $action = $_POST['action'];
else
    $action = 'accueil';

/* ===== ===== */

include('view/header.php');
include('view/sidemenu.php');

switch($action)
{
    case 'view_alimentation':
        include('view/alimentation.php');
        break;
    case 'view_resultat':
        include('view/resultat.php');
        break;
    default:
        $action = 'accueil';
        include('view/dashboard.php');
        break;
}


include('view/footer.php'); ?>