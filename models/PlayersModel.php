<?php

class PlayersModel extends Model
{

    public function playersHasTeams($id)
    {
        $request = 'SELECT * ,
        players.name AS pl_name,
        pht.number AS pl_number
        FROM teams 
        INNER JOIN players_has_teams AS pht
        ON pht.id_team = teams.id
        INNER JOIN players
        ON pht.id_player = players.id 
        WHERE teams.id = :id';

        $stmt = $this->db->prepare($request);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
