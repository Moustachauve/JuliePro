<script>

    $(function() {
        $('#<?php echo $action; ?>').addClass('active');
    });

</script>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">


        <li id="accueil"><a href="index.php"><span class="glyphicon glyphicon-dashboard"></span> Tableau de bord</a></li>
        <li id="view_alimentation"><a href="?action=view_alimentation"><span class="glyphicon glyphicon-cutlery"></span>Alimentation</a></li>
        <li id="view_resultat"><a href="?action=view_resultat"><span class="glyphicon glyphicon-stats"></span>Résultats</a></li>

        <li role="presentation" class="divider"></li>
        <li id="view_messageprive"><a href="?action=view_messageprive"><span class="glyphicon glyphicon-envelope"></span>Messages privés</a></li>
        <li id="view_profile"><a href="?action=view_profile"><span class="glyphicon glyphicon-user"></span>Profil</a></li>
        <li><a href="?action=view_profile"><span class="glyphicon glyphicon-log-out"></span>Déconnexion</a></li>

     </ul>
    <div class="attribution">Template par <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a></div>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
