<?php
$title = "Liste des équipes";
ob_start();
?>

<main class="teamList">
    <div class="container">
        <div class="py-5">
            <div class="container">
                <div class="row hidden-md-up">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Logo</th>
                                <th scope="col">Nom de l'équipe</th>
                                <th scope="col">Président</th>
                                <th scope="col">site web</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($teams as $listTeams) { ?>
                                <tr>
                                    <th class="teamIcon">
                                        <a href="?path=teams&id=<?= $listTeams['id'] ?>">
                                            <img src="<?= $listTeams['logo'] ?>" />
                                        </a>
                                    </th>
                                    <td>
                                        <?= $listTeams['name'] .
                                                " <br/> (" .
                                                $listTeams['short_name'] .
                                                ")" ?>
                                    </td>
                                    <td>
                                        <?= $listTeams['president'] ?>
                                    </td>
                                    <td>
                                        <a href="http://<?= $listTeams['website'] ?>" class="fas fa-external-link-alt"></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</main>

<?php $content = ob_get_clean(); ?>
<?php include('public/index.php'); ?>