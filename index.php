<?php

session_start();

$_SESSION['userID'] = 2;


include ("model/database.php");
include ("model/user_db.php");
include ("model/alimentation_db.php");
include ("model/resultat_db.php");
include ("model/message_db.php");

$userInfo = get_user($_SESSION['userID']);

if(isset($_POST['action']))
    $action = $_POST['action'];
elseif(isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'accueil';

/* ===== ===== */

include('view/header.php');
include('view/sidemenu.php');

switch($action)
{
    /* ALIMENTATION */
    case 'view_alimentation':
        include('view/alimentation.php');
        break;

    case 'form_alimentation':
        include('view/form_alimentation.php');
        break;

    case 'remove_alimentation':
        include('controler/remove_alimentation.php');
        break;

    case 'insert_alimentation':
        include('controler/insert_alimentation.php');
        break;

    /* RESULTATS */
    case 'view_resultat':
        include('view/resultat.php');
        break;
    case 'form_resultat':
        include('view/form_resultat.php');
        break;
    case 'insert_resultat':
        include('controler/insert_resultat.php');
        break;
    case 'remove_resultat':
        include('controler/remove_resultat.php');
        break;
    /* PROFIL */
    case 'view_profile':
        include('view/profile.php');
        break;

    case 'update_profile':
        include('controler/update_profile.php');
        break;

    /* MESSASGES PRIVÉS */

    case 'view_messageprive':
        include('view/messageprive.php');
        break;

    case 'form_messageprive':
        include('view/form_messageprive.php');
        break;

		/* ACCUEUIL */
    default:
        $action = 'accueil';
        include('view/dashboard.php');
        break;
}


include('view/footer.php'); ?>