<!-- formulaire permettant de s'inscrire sur le site -->
<!-- Created by HAN_Qianqian.-->

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="Content-Language" content="fr" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--    <link rel="stylesheet" href="bootstrap/css/bootstrap-datetimepicker.min.css" rel="external nofollow" >-->
<!--    <script src="bootstrap/js/bootstrap-datetimepicker.js"></script>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <title>Enchere</title>
    <style>
        .col-center-block {
            float: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /*$('#datetimepicker').datetimepicker({*/
            /*format: 'yyyymmdd',*/
            /*weekStart: 1,*/
            /*autoclose: true,*/
            /*startView: 2,*/
            /*minView: 2,*/
            /*forceParse: false,*/
            /*language: 'zh-CN'*/
        /*});*/



    </style>
</head>


<body>
<div class="container">
    <div class="row myCenter">
        <div class="col-xs-6 col-md-4 col-center-block">
            <?php echo form_open("Objets/ajout_vente"); ?>
            <form class="form-signin">
                <div class="row">
                    <div class="center-block" >
                        <h1 class="red-text text-center"> Créer une enchère <br/><small class="red-text text-center"> Donnez les informations de l'article </small> </h1>
                        <br/><br/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nom" class="sr-only">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom de l'article" required autofocus>
                </div>
                <div class="form-group">
                    <label for="description" class="sr-only">Descrption</label>
                    <input type="text" id="description" name="description" class="form-control" placeholder="Description" required>
                </div>
                <div class="form-group">
                    <label for="prix_bas" class="sr-only">Prix_bas</label>
                    <input type="text" id="prix_bas" name="prix_bas" class="form-control" placeholder="Le prix de base" required>
                </div>
                <div class="form-group">
                    <label for="prix_reserve" class="sr-only">Prix_reserve</label>
                    <input type="text" id="prix_reserve" name="prix_reserve" class="form-control" placeholder="Le prix de réserve" required>
                </div>

<!--                <div class='input-group date form_date' data-date-format="yyyymmdd">-->
<!--                    <input name="startTm" id="startTm" type='text' class="form-control input-sm" readonly="readonly"/>-->
<!--                    <span class="input-group-addon input-sm">-->
<!--                        <span class="glyphicon glyphicon-calendar"></span>-->
<!--                    </span>-->
<!--                </div><br>-->
<!--                <div class="form-group">-->
<!--                    <label for="date_limite" class="sr-only">Prix_reserve</label>-->
<!--                    <input type="text" id="date_limite" name="date_limite" class="form-control" placeholder="Le date limite xx/xx/xxxx" required>-->
<!--                </div>-->
                <select>
                    <option value ="1" selected="selected">Publique</option>
                    <option value ="2">Privée</option>
                </select><br> <br>

                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Ouvrir aux enchères</button>
                </div>

            </form>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</body>
</html>