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

        $data = $this->request()->getPost();

        $dataTeamName = $data["teamName"];
        $dataLeague = $data["league"];

        if (preg_match("/\d+/", $dataTeamName))
        {
            $error = "Nespravne vyplnene pole nazov";
            echo "<br><div> $error </div>";
        }
        else if ($dataLeague < 5 || $dataLeague > 7) {
            $error = "Nespravne vyplnene pole liga";
            echo "<br><div>$error</div>";
        } else {
            $team->save();
            return $this->redirect("?c=teams");
        }
        return $this->html($team, "create.form");
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