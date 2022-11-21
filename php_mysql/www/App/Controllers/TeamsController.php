<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Team;

class TeamsController extends AControllerBase
{

    public function index() : Response
    {
        $teams = Team::getAll();
        return $this->html($teams);
    }

    public function delete() : Response {
        $id = $this->request()->getValue('id');


        $teamToBeDeleted = Team::getOne($id);

        if ($teamToBeDeleted) {
            $teamToBeDeleted->delete();
        }

        return $this->redirect("?c=teams");
    }

    public function store() : Response {
        $id = $this->request()->getValue('id');

        $team = ( $id ? Team::getOne($id) : new Team());

        $team->setTeamName($this->request()->getValue('teamName'));
        $team->setLeague($this->request()->getValue('league'));

        $team->save();

        return $this->redirect("?c=teams");
    }

    public function create() : Response {
        return $this->html(new Team(), 'create.form');
    }

    public function edit() {
        $id = $this->request()->getValue('id');
        $teamToEdit = Team::getOne($id);
        return $this->html($teamToEdit, viewName: 'create.form');
    }
}