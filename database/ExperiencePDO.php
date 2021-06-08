<?php
namespace App\Database;
class ExperiencePDO{
  private $dbcon;
  function __construct(){
    $this->dbcon = Database::getDb();
  }
  /* retrieve experiences from database */
  public function getExperienceInfos(){
    $query = "SELECT * FROM experiences order by experiences.start_date desc";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->execute();

    //fetch all result
    $results = $pdostm->fetchAll(\PDO::FETCH_OBJ);
    return $results;
  }
 /* retrieve tasks related to a work experience */
  public function getExperienceTasks($experience_id){

    $query = "SELECT * FROM experience_tasks where experience_id = :experienceId";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->bindParam(':experienceId', $experience_id);
    $pdostm->execute();

    //fetch all result
    $results = $pdostm->fetchAll(\PDO::FETCH_OBJ);
    return $results;
  }



}
?>
