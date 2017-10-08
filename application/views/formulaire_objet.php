<!-- formulaire permettant de mettre un objet en vente -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="Content-Language" content="fr" />
    <meta name="Description" content="" />
    <meta name="Subject" content="" />
    <meta name="Content-Type" content="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css" />
    <title>Inscription</title>
</head>

<body class="my_background">

<div class="container">

    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h1> Ajout d'une vente <br/> <small> Merci de renseigner les informations sur l'objet en vente </small></h1>
        </div>
    </div>

    <?php echo form_open("Objets/ajouter_objet"); ?>
    <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <div class="form-group">
                <label for="nom">Nom de l'objet</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'objet">
                <?php echo form_error('nom','<span>','</span>')?>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-3">
            <div class="form-group">
                <label for="categ">Categorie de l'objet </label>
                <select name="categ" id="categ">
                    <option value="1">Categorie1</option>
                    <option value="2">Categorie2</option>
                </select>
                <?php echo form_error('categ','<span>','</span>')?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <div class="form-group">
                <label for="desc">Description de l'objet</label>
                <input type="textarea" class="form-control" id="desc" name="desc" placeholder="Description de l'objet" rows="3" cols="10">
                <?php echo form_error('desc','<span>','</span>')?>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-3">
            <div class="form-group">
                <label for="img">Photo de l'objet</label>
                <input type="file" class="form-control" id="img" name="img" >
                <?php echo form_error('img','<span>','</span>')?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <div class="form-group">
                <label for="prixb">Prix de base</label>
                <input type="number" class="form-control" id="prixb" name="prixb" placeholder="Euro">
                <?php echo form_error('prixb','<span>','</span>')?>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-3">
            <div class="form-group">
                <label for="prixr">Prix de reserve</label>
                <input type="number" class="form-control" id="prixr" name="prixr" placeholder="Euro">
                <?php echo form_error('prixr','<span>','</span>')?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <div class="form-group">
                <label for="datel">Date limite de la vente</label>
                <input type="datel" class="form-control" id="datel" name="datel">
                <?php echo form_error('datel','<span>','</span>')?>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-3">
            <div class="form-group">
                <label for="timel">Heure limite de la vente</label>
                <input type="time" class="form-control" id="timel" name="timel" >
                <?php echo form_error('prixr','<span>','</span>')?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <div class="input-group">
                <label for="visib">Visibilité de l'enchere</label>
                <select name="visib" id="visib">
                    <option value="1">Privée</option>
                    <option value="2">Publique</option>
                    <option value="2">Sur invitation</option>
                </select>
                <?php echo form_error('visib','<span>','</span>')?>
            </div>
        </div>
    </div>

    <br/>
    <div class="row">
        <div class="col-md-offset-5 col-md-1">
            <input type="submit" class="btn btn-primary" value="Envoyer mes informations"></input>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
</body>
</html>

