<!-- page listant tous les objets-->
<!-- Created by a-sellier-->

<div class="row">
    <section class="col-sm-8 col-md-offset-1 margin">
        <table class="table table-bordered table-striped table-condensed">
            <caption>
                <h4><?php echo $title ?></h4>
            </caption>
            <thead>
            <tr>
                <th>Objet</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>

<?php

foreach ($objets as $row)
{

    echo '<tr><td>'.$row['nom_objet'].'</td><td> '.$row['desc_objet'].'</td></tr>';
}
?>
            </tbody>
        </table>
    </section>
</div>