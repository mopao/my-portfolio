<?php
namespace App\Database;
class EducationPDO{
  private $dbcon;
  function __construct(){
    $this->dbcon = Database::getDb();
  }
  /* retrieve education info from the database */
  public function getEducationInfos(){
    $query = "SELECT * FROM educations inner join schools on
    educations.school_id = schools.id order by educations.start_date desc";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->execute();

    //fetch all result
    $results = $pdostm->fetchAll(\PDO::FETCH_OBJ);
    return $results;
  }



}
?>
