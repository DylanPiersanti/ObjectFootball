<?php
$title = "Liste des équipes";
ob_start();
?>
<main class="teamList">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <canvas id="pitch" width="600" height="650"></canvas>

                <ul id="starting_11" class="4-4-2">
                    <li data-pos="gk" id="pos1"></li>
                    <li data-pos="df" id="pos2" draggable="true"></li>
                    <li data-pos="df" id="pos3" draggable="true"></li>
                    <li data-pos="df" id="pos4" draggable="true"></li>
                    <li data-pos="df" id="pos5" draggable="true"></li>
                    <li data-pos="md" id="pos6" draggable="true"></li>
                    <li data-pos="md" id="pos7" draggable="true"></li>
                    <li data-pos="md" id="pos8" draggable="true"></li>
                    <li data-pos="md" id="pos9" draggable="true"></li>
                    <li data-pos="fw" id="pos10" draggable="true"></li>
                    <li data-pos="fw" id="pos11" draggable="true"></li>
                </ul>
            </div>
            <div class="col-6">
                <div class="playerList mb-5 mt-5">
                    <div class="positions menu">
                        <ul data-pos="gk" class="playersList">
                            <?php foreach ($players as $myTeams) { ?>
                                <img class="selectedPlayer" draggable="true" data-toggle="popover" title="<?= $myTeams['name'] ?>"" src="<?= $myTeams['photo'] ?>" />
                            <?php
                            }
                            ?>
                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>



</main>

<script>
document.querySelector('playersList').querySelectorAll('selectedPlayer')

</script>



<?php $content = ob_get_clean(); ?>
<?php include('public/index.php'); ?>