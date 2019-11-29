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

    <section class="container">
        <div class="accordion" id="collapseStadium">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#collapseStadium">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
$content = ob_get_clean();
require('public/index.php');
?>