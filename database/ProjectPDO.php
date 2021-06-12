<?php
namespace App\Database;
class ProjectPDO{
  private $dbcon;
  function __construct(){
    $this->dbcon = Database::getDb();
  }
  /* retrieve projects from database */
  public function getProjects(){
    $query = "SELECT * FROM projects order by add_on desc";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->execute();

    //fetch all result
    $results = $pdostm->fetchAll(\PDO::FETCH_OBJ);
    return $results;
  }
/* retrieve thoughts process of a specific project */
  public function getProjectThoughtsProcess($project_id)
  {
    $query = "SELECT * FROM project_thoughts_processes where project_id = :projectId order by step asc";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->bindParam(':projectId', $project_id);
    $pdostm->execute();

    //fetch all result
    $results = $pdostm->fetchAll(\PDO::FETCH_OBJ);
    return $results;

  }
  /* retrieve a project challenges */
  public function getProjectChallenges($project_id)
  {
    $query = "SELECT * FROM project_challenges where project_id = :projectId";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->bindParam(':projectId', $project_id);
    $pdostm->execute();

    //fetch  result
    $result = $pdostm->fetch(\PDO::FETCH_OBJ);
    return $result;
  }
}
?>
