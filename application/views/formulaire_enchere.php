<!-- formulaire permettant de faire une offre pour un objet -->

<?php

$id_objet = '';
$nom_objet = '';
$desc_objet = '';
$prix_base = '';
$prix_res = '';
$date_limit = '';
$id_cat = '';
$photo = '';
$id_vendeur = '';
$statut = '';
$id_visibilite = '';

foreach ($objets as $objet)
{
    $id_objet = $objet->id_objet;
    $nom_objet = $objet->nom_objet;
    $desc_objet = $objet->desc_objet;
    $prix_base = $objet->prix_base;
    $prix_res = $objet->prix_res;
    $date_limit = $objet->date_limit;
    $id_cat = $objet->id_cat;
    $photo = $objet->photo;
    $id_vendeur = $objet->id_vendeur;
    $statut = $objet->statut;
    $id_visibilite = $objet->id_visibilite;
}
?>

<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<!-- Content Header (Page header) -->
<section class="content-header">
    </br>    </br>


    <center>
    <h1>Encherir</h1>

    <form role="form" id="encherir" action="<?php echo base_url() ?>Encherir" method="post"  role="form">

        <input type="hidden" value="<?php echo $id_objet; ?>" name="id_objet" id="id_objet" />
        <input type="hidden" value="<?php echo $id_vendeur; ?>" name="id_vendeur" id="id_vendeur" />

        <label id="nobjet" > <h4>Nom d'objet :</h4> </label> <?php echo $nom_objet ?></br>
        <label id="dobjet" > <h4>Description de L'objet :</h4> </label> <?php echo $desc_objet ?></br>
        <label id="plobjet" > <h4>Prix Limite :</h4> </label> <?php echo $date_limit ?></br>
        <label id="sobjet" > <h4>Statut :</h4> </label> <?php echo $statut ?></br>
        <label id="peobjet" > <h4>Entrer Le prix D'enchere :</h4>

        <input type="number" id="prix" name="prix" />

        <div class="box-footer">
            <input type="submit" class="btn btn-primary" value="Enregister" />
            <input type="reset" class="btn btn-default" value="Anuler" />
        </div>
    </form>
    </center>
</section>

