<?php

$success = true;

if(!isset($_POST['notel']) || !preg_match('/(\(\d{3}+\)+ \d{3}+\-\d{4}+)/', $_POST['notel']))
    $success = 'tel';
if(!isset($_POST['nocell']) || !preg_match('/(\(\d{3}+\)+ \d{3}+\-\d{4}+)/', $_POST['nocell']))
    $success = 'cell';

if($success === true)
    save_user($_SESSION['userID'],$_POST['noRue'],$_POST['rue'],$_POST['ville'],$_POST['adressecourriel'],$_POST['notel'],$_POST['nocell'],$_POST['codepostal']);

$userInfo = get_user($_SESSION['userID']);

include('view/profile.php');
