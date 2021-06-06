<?php
namespace App\Database;
class SkillPDO{
  private $dbcon;
  function __construct(){
    $this->dbcon = Database::getDb();
  }
  /* retrieve skills of a specify type */
  public function getSkills($typeSkill){
    $query = "SELECT * FROM skills inner join skill_types on
    skills.skill_type_id = skill_types.id WHERE skill_types.type =:type";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->bindParam(':type', $typeSkill);
    $pdostm->execute();

    //fetch all result
    $skills = $pdostm->fetchAll(\PDO::FETCH_OBJ);
    return $skills;
  }



}
?>
