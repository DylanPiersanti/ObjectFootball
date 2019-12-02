<?php

class MyTeamModel extends Model {
    public function allPlayers()
    {
        $request = "SELECT * FROM players";
        $stmt = $this->db->prepare($request);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}