<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=720, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./public/css/all.min.css" rel="stylesheet">
    <link href="./public/css/style.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body>
    <header>
        <div class="container topSite">
            <div class="row">
                <div class="col-4">
                    <img class="topLogo mt-2" src="./public/images/whiteLogo.png" />
                </div>
                <div class="socialLink col-8 text-right mt-5">
                    <ul>
                        <a href="">
                            <li class="fab fa-facebook"></li>
                        </a>
                        <a href="">
                            <li class="fab fa-twitter"></li>
                        </a>
                        <a href="">
                            <li class="fab fa-youtube"></li>
                        </a>
                        <a href="">
                            <li class="fab fa-pinterest"></li>
                        </a>
                    </ul>
                </div>

            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?path=teams">Les équipes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?path=coachs">
                                Les coatchs
                            </a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 searchBar" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger my-2 my-sm-0 fa fa-search" type="submit"></button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8 ml-auto">
                    <div class="actu mt-5">
                        <div class="row">
                            <div class="col-sm-12 col-lg-4">
                                <img src="./public/images/players/mbappe.png" />

                            </div>

                            <div class="col-sm-12 col-lg-8">
                                <h1 class="actuTitle">Mbappé,</h1>
                                <h2 class="actuSubTitle">Les négocations reprennent.</h2>
                            </div>
                        </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?= $content ?>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fab fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="mb-5 col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p>Ligue 1 corporation | un site réalisé pour les amateurs de foot</p>
                    <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="">Ligue1.fr</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section>

    <script src="./public/jquery/jquery.min.js"></script>
    <script src="./public/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>