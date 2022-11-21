<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Team;

class TeamsController extends AControllerBase
{

    public function index(): Response
    {
        $teams = Team::getAll();
        return $this->html($teams);
    }
}