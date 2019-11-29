<?php

class TeamsModel extends Model {
    
    public function allTeams()
    {
        $request = "SELECT * FROM teams";
        $stmt = $this->db->prepare($request);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } 

    public function showTeam($id)
    {
        $request = 'SELECT *, 
        stadiums.name 
        AS stadeName,
        stadiums.adress
        AS stadeAdress
        FROM teams 
        INNER JOIN stadiums 
        ON teams.id_stadium = stadiums.id 
        WHERE teams.id = :id';

        $stmt = $this->db->prepare($request);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}