<?php
$title = "Accueil";
ob_start();
?>

<div class="sepparator">
    <div class="container otherNews pt-2">
        <p class="col-12 text-center">
            <i class="fa fa-newspaper"> Neymar revient, Rennes replonge</i>
            <i class="fa fa-newspaper"> Zidane : "Je suis amoureux de Mbappé"</i>
            <i class="fa fa-newspaper"> Quel PSG contre le Real ?</i>
        </p>
    </div>
</div>

<main class="container-fluid">
    <div class="row contentMain">
        <div class="col-sm-12 col-lg-6 currentVersus">
            <div class="currentMatch">
                <span>Match en cours</span>
                <div class="currentTeams">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <img src="https://medias.lequipe.fr/logo-football/47/200" />
                        </div>
                        <div class="col-sm-12 col-lg-4 versus">
                            VS
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <img src="https://medias.lequipe.fr/logo-football/20/200" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            2
                        </div>
                        <div class="col-sm-12 col-lg-4 versus">

                        </div>
                        <div class="col-sm-12 col-lg-4">
                            0
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 nextMatch">
            <div class="nextMatchContent">
                <span>Prochain match</span>
                <div class="timeToNext">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <img src="https://medias.lequipe.fr/logo-football/43/200" />
                        </div>
                        <div class="col-sm-12 col-lg-4 versus">
                            VS
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <img src="https://medias.lequipe.fr/logo-football/26/200" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 timerToNext">
                            Dans HH:MM:SS
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $content = ob_get_clean(); ?>
<?php include('public/index.php'); ?>