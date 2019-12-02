<?php
$title = "Titre de la page";
ob_start();

?>

<main class="teamList">
    <div class="container">
        <div class="row">

            <div class="col-12 mt-5 mb-4">
                <h1 class="text-white">
                    <?=
                        $currentTeam['name']
                            . " (" .
                            $currentTeam['short_name']
                            . ")"
                    ?>
                </h1>
                <div class="jumbotron currentTeam">

                    <div class="row">

                        <div class="col-4">

                            <div class="card currentLogoContainer" style="width: 18rem;">
                                <img src="<?= $currentTeam['logo'] ?>" class="card-img-top mt-2 mb-2" alt="...">
                            </div>
                        </div>

                        <div class="col-8">
                            <table class="table table-striped table-dark">
                                <tbody>
                                    <tr>
                                        <td>Nom de l'équipe :</td>
                                        <td><?=
                                                $currentTeam['name']
                                                    . " (" .
                                                    $currentTeam['short_name']
                                                    . ")"
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date de fondation :</td>
                                        <td><?= $currentTeam['fundation_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Président : </td>
                                        <td><?= $currentTeam['president'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Adresse : </td>
                                        <td><?= $currentTeam['adress'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Site internet : </td>
                                        <td><a href="<?= $currentTeam['website'] ?>"><?= $currentTeam['website'] ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lequipe.fr : </td>
                                        <td><a href="<?= $currentTeam['link'] ?>"><?= $currentTeam['link'] ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Stade : </td>
                                        <td>
                                            <?=
                                                $currentTeam['stadeName'] .
                                                    " | (" . $currentTeam['stadeAdress'] . ")";
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">

            </div>
            <div class="card">

                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Composition de l'équipe
                        </button>

                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <button class="btn btn-dark mt-5 ml-5" onclick="getOneCompo()">4-4-2</button>
                    <button class="btn btn-dark mt-5 ml-5" onclick="getTwoCompo()">4-3-3</button>
                    <button class="btn btn-dark mt-5 ml-5" onclick="getThreeCompo()">4-5-1</button>
                    <section class="container">
                        <div class="row">
                            <div id="s4-4-2" class="s4-4-2 col-12 mb-5 mt-5 pl-2 pr-2 stade">
                                <?php

                                $playersArrayPhoto = array();
                                $playersArrayName = array();

                                foreach ($pht as $players) {
                                    array_push($playersArrayPhoto, $players['pl_photo']);
                                    array_push($playersArrayName, $players['pl_name']);
                                }

                                foreach ($pht as $players) {
                                    array_push($playersArrayPhoto, $players['pl_photo']);
                                }


                                for ($i = 1; $i < 12; $i++) {

                                    ?>

                                    <div class="p<?= $i ?> playerPhoto">
                                        <button type="button" class="btn btn-lg" data-toggle="popover" title="<?= $playersArrayName[$i] ?>">
                                            <img class="animated bounceIn" src="<?= $playersArrayPhoto[$i] ?>" />
                                        </button>
                                    </div>

                                <?php
                                }
                                ?>
                                <img src="./public/images/stadium.png" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="row">
                            <div id="s4-3-3" class="s4-3-3 col-12 mb-5 mt-5 pl-2 pr-2 stade ">
                                <?php

                                $playersArrayPhoto = array();
                                $playersArrayName = array();

                                foreach ($pht as $players) {
                                    array_push($playersArrayPhoto, $players['pl_photo']);
                                    array_push($playersArrayName, $players['pl_name']);
                                }


                                for ($i = 1; $i < 12; $i++) {

                                    ?>

                                    <div class="g<?= $i ?> playerPhoto">
                                        <button type="button" class="btn btn-lg" data-toggle="popover" title="<?= $playersArrayName[$i] ?>">
                                            <img class="animated bounceIn" src="<?= $playersArrayPhoto[$i] ?>" />
                                        </button>
                                    </div>

                                <?php
                                }
                                ?>
                                <img src="./public/images/stadium.png" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="row">
                            <div id="s4-5-1" class="s4-5-1 col-12 mb-5 mt-5 pl-2 pr-2 stade ">
                                <?php

                                $playersArrayPhoto = array();
                                $playersArrayName = array();

                                foreach ($pht as $players) {
                                    array_push($playersArrayPhoto, $players['pl_photo']);
                                    array_push($playersArrayName, $players['pl_name']);
                                }


                                for ($i = 1; $i < 12; $i++) {

                                    ?>

                                    <div class="h<?= $i ?> playerPhoto">
                                        <button type="button" class="btn btn-lg" data-toggle="popover" title="<?= $playersArrayName[$i] ?>">
                                            <img class="animated bounceIn" src="<?= $playersArrayPhoto[$i] ?>" />
                                        </button>
                                    </div>

                                <?php
                                }
                                ?>
                                <img src="./public/images/stadium.png" alt="" class="img-fluid">
                            </div>
                        </div>

                    </section>
                </div>
            </div>
            <br />
        </div>
    </div>
</main>

<?php

$content = ob_get_clean();
require('public/index.php');
?>