<?php
namespace App\Database;
class PageContentPDO{
  private $dbcon;
  function __construct(){
    $this->dbcon = Database::getDb();
  }
  /* retrieve content based on title */
  public function getContent($title){
    $query = "SELECT * FROM page_contents WHERE title =:title";
    $pdostm = $this->dbcon->prepare($query);
    $pdostm->bindParam(':title', $title);
    $pdostm->execute();

    //fetch all result
    $content = $pdostm->fetch(\PDO::FETCH_OBJ);
    return $content;
  }



}
?>
