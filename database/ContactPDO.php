<?php
namespace App\Database;
class ContactPDO{
  private $dbcon;
  function __construct(){
    $this->dbcon = Database::getDb();
  }
  /* retrieve  a contact based on its type info from database */
  public function getContact($type){
    $query = "SELECT * FROM contacts where type = :type";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->bindParam(':type', $type);
    $pdostm->execute();
    //fetch all result
    $result = $pdostm->fetch(\PDO::FETCH_OBJ);
    return $result;
  }
}
?>
