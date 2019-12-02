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
                                        <td><a href="?path=coachs&id=<?= $currentTeam['id'] ?>"><?= $currentTeam['president'] ?></a></td>
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
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Composition de l'équipe
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <section class="container">
                        <div class="row">
                            <div class="col-12 mb-5 mt-5 pl-2 pr-2 stade">
                                <?php

                                $playersArray = array();

                                foreach ($pht as $players) {
                                    array_push($playersArray, $players['pl_name']);
                                }

                                $test = array_keys($playersArray);
                                $i = 0;

                                for ($i; $i < 12; $i++) {

                                    ?>

                                    <div class="p<?= $i ?>">
                                    
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

                                    <!-- <div class="p2"></div>
                                    <div class="p3"></div>
                                    <div class="p4"></div>
                                    <div class="p5"></div>
                                    <div class="p6"></div>
                                    <div class="p7"></div>
                                    <div class="p8"></div>
                                    <div class="p9"></div>
                                    <div class="p10"></div>
                                    <div class="p11"></div> -->
<?php

$content = ob_get_clean();
require('public/index.php');
?>