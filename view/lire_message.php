

<?php
$message = get_message($userInfo['utilisateurID'], $_GET['messageID']);


if(!$message['estLu'])
    lire_message($userInfo['utilisateurID'], $message['messageID']);
?>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $message['titre'];?>
            <div class="pull-right">
                <?php echo $message['date']; ?> -
                <a href="?action=remove_message&messageID='.$messageCourant['messageID'].'" class="glyphicon glyphicon-remove color-red"> </a>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-md-6">
                <?php echo nl2br($message['message']);?>
            </div>
        </div>
    </div>
</div>