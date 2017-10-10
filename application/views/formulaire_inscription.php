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
        <link rel="stylesheet" href="style.css" />
        <title>Inscription</title>
    </head>

    <body class="my_background">

        <div class="container">


            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h1> Inscription <br/> <small> Merci de renseigner vos informations </small></h1>
                </div>
            </div>

            <?php echo form_open("Users/inscription"); ?>
            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                        <?php echo form_error('lastname','<span>','</span>')?>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                        <?php echo form_error('firstname','<span>','</span>')?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-7">
                    <div class="form-group">
                        <label for="email">Email address *</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                        <?php echo form_error('email','<span>','</span>')?> <br>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="form-group">
                        <label for="password">Mot de passe *</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                        <?php echo form_error('password','<span>','</span>')?>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <div class="form-group">
                        <label for="passconf">Vérification mot de passe *</label>
                        <input type="password" class="form-control" id="passconf" name="passconf" placeholder="Vérification mot de passe">
                        <?php echo form_error('passconf','<span>','</span>')?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon glyphicon glyphicon-globe"></span>
                        <input type="text" class="form-control" placeholder="Adresse" id="adresse" name="adresse" aria-describedby="basic-addon1">
                        <?php echo form_error('address','<span>','</span>')?>
                    </div>
                </div>
            </div>

            <br/>

            <div class="row">
                <div class="col-md-offset-5 col-md-1">
                    <input type="submit" class="btn btn-lg btn-primary" value="Envoyer mes informations"></input>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </body>
</html>
