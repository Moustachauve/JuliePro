<?php
	include ("model/database.php");
	include ("model/user_db.php");

	$userInfo = get_user(2);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JuliePro - Tableau de bord</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"> <span class="sr-only">Afficher la navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="index.php"><span>JuliePro</span>Admin</a>
			<?php if(!empty($userInfo))
			{ ?>
			<ul class="user-menu">
				<li class="dropdown pull-right"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> <?php echo $userInfo['prenom'].' '.$userInfo['nom']; ?> <span class="caret"></span> </a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Paramètres</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
					</ul>
				</li>
			</ul>
			<?php } ?>
		</div>
	</div>
	<!-- /.container-fluid --> 
</nav>
