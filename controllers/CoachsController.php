<?php

class CoachsController extends Controller
{
    public function listCoachs()
    {
        $coachsModel = new CoachsModel;
        $coachs = $coachsModel->allCoachs();
        require('views/coachs.php');
    }

    public function currentCoach($id) {
        $coachsModel = new CoachsModel;
        $currentCoach = $coachsModel->showCoach($id);
        require('views/currentCoach.php');
    }
}
