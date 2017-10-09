<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Liste des Encheres
        </h1>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Liste des Encheres</h3>
                        <div class="box-tools">
                            <form action="<?php echo base_url() ?>enchereslisting" method="POST" id="searchList">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Id_Encheres</th>
                                <th>Id_objet</th>
                                <th>Id_acheteur</th>
                                <th>Prix</th>

                            </tr>
                            <?php
                            if(!empty($encheres))
                            {
                                foreach($encheres as $ench)
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
                            }
                            ?>
                        </table>

                    </div><!-- /.box-body -->

