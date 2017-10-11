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
                <th>Id_Encheres</th>
                <th>Id_objet</th>
                <th>Id_acheteur</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tbody>

            <?php

            foreach ($encheres as $ench)
            {

                ?>
                <tr>
                    <td><?php echo $ench->id_ench ?></td>
                    <td><?php echo $ench->id_objet ?></td>
                    <td><?php echo $ench->id_acheteur ?></td>
                    <td><?php echo $ench->Prix ?></td>
                </tr>
                <?php
            }

            echo '</ul>';


            ?>
            </tbody>
        </table>
    </section>
</div>