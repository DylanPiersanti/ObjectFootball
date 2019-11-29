<?php

spl_autoload_register(function ($className) {
    $file = 'controllers/' . $className . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        include 'models/' . $className . '.php';
    }
});

$path = isset($_GET['path']) ? $_GET['path'] : 'home';

switch ($path) {
    case 'home':
        require('views/home.php');
        break;

    case 'teams':
        $teams = new TeamsController;

        if (isset($_GET['id'])) {
            $teams->currentTeam($_GET['id']);
        } else {
            $teams->listTeams();
        }
        break;

    default:
        include('views/404.php');
        break;
}
