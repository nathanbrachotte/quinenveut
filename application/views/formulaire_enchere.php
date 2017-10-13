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


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="Content-Language" content="fr" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <style>
        .col-center-block {
            float: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>


        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <h1> ENCHÉRIR<br/> <small> Merci d'entrer le montant de votre enchère </small></h1>
            </div>
        </div>
<center>
        <?php echo form_open("Encheres/encherir"); ?>
        <form class="encherir">

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
            <input type="reset" class="btn btn-default" value="Annuler" />
        </div>
        </form>
        <?php echo form_close(); ?>
</center>
</section>
</html>

