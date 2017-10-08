<!-- formulaire permettant de s'inscrire sur le site -->
<!-- Created by HAN_Qianqian.-->

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
        <meta name="Content-Language" content="fr" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Connexion</title>
        <style>
            .col-center-block {
                float: none;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>


    <body>
        <div class="container">
            <div class="row myCenter">
                <div class="col-xs-6 col-md-4 col-center-block">
                    <?php echo form_open("Users/connexion"); ?>
                    <form class="form-signin">
                        <div class="row">
                            <div class="center-block" >
                                <h1 class="red-text text-center"> Connexion <br/> <small class="red-text text-center"> Bienvenue chez qui n'en veut </small></h1>
                                <br/><br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="sr-only">Enter email</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter email" required autofocus> <br>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Mot de passe</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required><br><br>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
                        </div>

                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </body>
</html>