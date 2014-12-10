<?php

$alimentation = Array();

global $db;
$query = '          select a.`alimentationID`, a.`nomRepas`, a.`calorieIngere`,`date`, c.nom
                    from `alimentation` a
                    inner join categorienourriture c
                    on c.categorieID = a.categorieID
                    where a.clientID = '.$userID;


$result = $db->query($query);

?>
    <table border="1">
        <tr>
            <th>bouffe</th>
            <th>calories</th>
            <th>catégorie</th>
            <th>date</th>
            <th>Action</th>
        </tr>
<?php

while($data = $result->fetch())
{
    $alimentationCourante = Array();

    ?>
        <tr>
            <td><?php echo $data['nomRepas']; ?></td>
            <td><?php echo $data['calorieIngere']; ?></td>
            <td><?php echo $data['nom']; ?></td>
            <td><?php echo $data['date']; ?></td>
            <td><a href="#">Supp.</a> <a href="#">Modif.</a></td>
        </tr>
    <?php

    //$alimentation['']

    //$alimentation[$data['alimentationID']] = $data;
}

echo '</table>';

//echo json_encode($alimentation);