<!-- formulaire permettant de s'inscrire sur le site -->
<!-- Created by HAN_Qianqian.-->

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
        <meta name="Content-Language" content="fr" />
        <meta name="Description" content="" />
        <meta name="Keywords" content="Tutoriel Bootstrap avec une page d'inscriptionl" />
        <meta name="Subject" content="" />
        <meta name="Content-Type" content="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <title>Profil</title>
    </head>
<body>
<br><b>
    <a href="../accueil" >Page Accueil</a>
<br><br><br><br><br><br><br><br>
<div class="col-md-12 col-md-offset-4 margin">
<ul class="list-group col-sm-3" >
    <li class="list-group-item active"> Informations personnelles</li>
    <li class="list-group-item">Nom:     <?php echo $profil['nom'] ?></li>
    <li class="list-group-item">Prénom:  <?php echo $profil['prenom'] ?></li>
    <li class="list-group-item">Mail:    <?php echo $profil['mail'] ?></li>
    <li class="list-group-item">Adresse: <?php echo $profil['adresse'] ?></li>
</ul>
</div>

</body>
</html>