<?php

namespace App\Models;

use App\Core\Model;

class Team extends Model
{
    protected $idTeam;
    protected $teamName;
    protected $league;

    /**
     * @return mixed
     */
    public function getIdTeam()
    {
        return $this->idTeam;
    }

    /**
     * @param mixed $idTeam
     */
    public function setIdTeam($idTeam): void
    {
        $this->idTeam = $idTeam;
    }

    /**
     * @return mixed
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * @param mixed $teamName
     */
    public function setTeamName($teamName): void
    {
        $this->teamName = $teamName;
    }

    /**
     * @return mixed
     */
    public function getLeague()
    {
        return $this->league;
    }

    /**
     * @param mixed $league
     */
    public function setLeague($league): void
    {
        $this->league = $league;
    }


}