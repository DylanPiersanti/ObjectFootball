<?php
$title = "Coach";
ob_start();

?>

<main class="teamList">
    <div class="container">
        <div class="row">

            <div class="col-12 mt-5 mb-4">
                <h1 class="text-white">
                    <?=
                        $currentCoach['coachName'];
                    ?>
                </h1>
                <div class="jumbotron currentTeam">

                    <div class="row">

                        <div class="col-4">

                            <div class="card currentPhotoContainer" style="width: 18rem;">
                                <img src="<?= $currentCoach['photo'] ?>" class="card-img-top mt-2 mb-2" alt="...">
                            </div>
                        </div>

                        <div class="col-8">
                            <table class="table table-striped table-dark">
                                <tbody>
                                    <tr>
                                        <td>Nom / prénom :</td>
                                        <td><?=
                                                $currentCoach['coachName'];
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date de naissance :</td>
                                        <td><?= $currentCoach['birthday_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Lieu de naissance : </td>
                                        <td><?= $currentCoach['birthday_place'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nationalité : </td>
                                        <td><?= $currentCoach['nationality'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Equipe : </td>
                                        <td>
                                            <a href="?path=teams&id=<?= $currentCoach['teamId'] ?>"><?= $currentCoach['teamName'] ?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lequipe.fr : </td>
                                        <td><a href="<?= $currentCoach['link'] ?>"><?= $currentCoach['link'] ?></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
$content = ob_get_clean();
require('public/index.php');
?>