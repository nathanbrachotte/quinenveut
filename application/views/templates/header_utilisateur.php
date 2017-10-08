<!--
 * Created by PhpStorm.
 * User: a-sellier
 * Date: 08/10/17
 * Time: 14:58
 *
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Qui n'en veut !?</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
    margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
    padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        html {
    position: relative;
    min-height: 100%;
        }
        body {
    /* Margin bottom by footer height */
    margin-bottom: 60px;
        }

        /* Set black background color, white text and some padding */
        footer {
    background-color: #555;
            color: white;
            padding: 15px;
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 60px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
    .sidenav {
        height: auto;
        padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="accueil">Qui n'en veut</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="accueil"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-list"></span> Catégories</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-edit"></span> Vendre un objet</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-piggy-bank"></span> Mes objets en vente</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-euro"></span> Mes enchères</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="inscription"><span class="glyphicon glyphicon-user"></span> Mon compte</a></li>
                <li><a href="connexion"><span class="glyphicon glyphicon-log-out"></span> Se déconnecter</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-12 text-left">
            <h1><?php echo $title ?></h1>
        </div>
