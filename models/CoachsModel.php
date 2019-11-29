<?php

class CoachsModel extends Model
{
    public function allcoachs()
    {
        $request = "SELECT * FROM coachs";
        $stmt = $this->db->prepare($request);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function showCoach($id)
{
    $request = 'SELECT *, 
	cht.id_team,
    cht.id_coach,
    coachs.name
    AS coachName,
    teams.name
    AS teamName,
    teams.id
    AS teamId
    FROM coachs 
    INNER JOIN coachs_has_teams AS cht
    ON cht.id_coach = coachs.id
    INNER JOIN teams
    ON teams.id = cht.id_team
    WHERE coachs.id = :id';

    $stmt = $this->db->prepare($request);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}
