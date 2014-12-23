
<?php $objectifs = get_objectif_semaine($userInfo['utilisateurID'], time()); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tableau de bord</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h2>Objectifs de la semaine</h2>
    </div>
</div><!--/.row-->


<?php
$entrainementsSemaine = get_stat_entrainement_semaine($userInfo['utilisateurID']);
$calorieIngere = get_stat_calorie_ingere($userInfo['utilisateurID']);
?>
<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Nombre d'entrainement</h4>
                <?php
                if(empty($objectifs['nbExercice']))
                    echo '<div class="easypiechart"><span class="percent">Pas d\'objectif</span></div>';
                else
                { ?>
                <div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $entrainementsSemaine[0] / $objectifs['nbExercice'] * 100; ?>" >
                    <span class="percent"><?php echo $entrainementsSemaine[0].'/'.$objectifs['nbExercice']; ?>
                    </span>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Calories perdues</h4>
                <?php
                if(empty($objectifs['nbCaloriePerdue']))
                echo '<div class="easypiechart"><span class="percent">Pas d\'objectif</span></div>';
                else
                { ?>
                <div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo $entrainementsSemaine[1] / $objectifs['nbCaloriePerdue'] * 100; ?>" ><span class="percent"><?php echo number_format($entrainementsSemaine[1], 0).'/'.$objectifs['nbCaloriePerdue'] ; ?></span>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Max. Battement/minute</h4>
                <?php
                if(empty($objectifs['maxBattement']))
                echo '<div class="easypiechart"><span class="percent">Pas d\'objectif</span></div>';
                else
                { ?>
                <div class="easypiechart">
                    <span class="percent">
                        <?php
                            if($entrainementsSemaine[2] == 0) echo '- ';
                            else echo number_format($entrainementsSemaine[2],1);
                            echo '/'.$objectifs['maxBattement'];
                        ?>
                    </span>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Calorie ingérées/jour</h4>
                <div class="easypiechart">
                    <span class="percent">
                        <?php
                        if(empty($objectifs['calorieIngereesParJour']))
                            echo 'Pas d\'objectif';
                        else
                            echo round($calorieIngere[0],2).'/'.$objectifs['calorieIngereesParJour'];
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <h2>Vue d'ensemble de la semaine</h2>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">Mes calories ingérées</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="graphCalorieIng" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">Mes calories perdues</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="graphCaloriePerd" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->
<div class="row">
    <div class="col-md-8">

    </div><!--/.col-->
</div><!--/.row-->
</div>	<!--/.main-->

<script src="js/graphCalorie.js"></script>