<!-- page listant tous les objets-->
<!-- Created by a-sellier-->

<h1>Objets mis en vente</h1>

<?php

if (sizeof($objets) == 0)
{
    echo '<p>Aucun objet en vente !</p>';
}

echo '<ul>';
foreach ($objets as $row)
{

    echo '<li>'.$row['nom_objet'].' : '.$row['desc_objet'].'</li>';
}

echo '</ul>';


?>

