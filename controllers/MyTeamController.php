<?php 

class MyTeamController extends Controller {

    public $players;

    public function listPlayers() 
    {
        $myTeam = new MyTeamModel;
        $players = $myTeam->allPlayers();
        require('views/myTeam.php');
    }

}