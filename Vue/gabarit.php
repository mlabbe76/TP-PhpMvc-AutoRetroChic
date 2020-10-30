<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../Contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <nav style="background-color:#0dd4eb;" class="navbar navbar-expand-md navbar-dark sticky-top">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                            <i class="fas fa-bars fa-lg"></i>
                    </button>
                    <!-- Navbar-->        
                    <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
                        <ul class="nav nav-pills navbar-nav">
                           <p style ></p> <img class="logo" style="width:10%;margin-rightt:5%" src="image/AutoRetroChic.png" alt="logo">
                            <h1 id="titreSite" style="margin-left:2%;font-size:180%;font-family: 'Monoton', cursive;">Auto Retro Chic</h1>
                            <li class="nav-item"><a class="nav-link active" href="#about">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="vueConstructeurs.php">Les Constructeurs</a></li>
                            <li class="nav-item"><a class="nav-link" href="#auto">Les Voitures</a></li>
                            <li class="nav-item"><a class="nav-link" href="#livreOr">Livre d'or</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <footer class="text-center" style="background-color:#0dd4eb;" >
            <h6>© Mickaël Labbé Formation DWWM Afpa 2020/2021</h6>    
            <h6>Site web réalisé avec PHP, HTML5 et CSS en MVC.</h6>
            </footer>
        </div> <!-- #global -->
    </body>
</html>