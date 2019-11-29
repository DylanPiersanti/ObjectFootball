<?php

class TeamsController extends Controller 
{
    public $teams;

    public function listTeams() 
    {
        $teamsModel = new TeamsModel;
        $teams = $teamsModel->allTeams();
        require('views/teams.php');
    }

    public function currentTeam($id) {
        $teamsModel = new TeamsModel;
        $currentTeam = $teamsModel->showTeam($id);
        require('views/currentTeam.php');
    }

}
