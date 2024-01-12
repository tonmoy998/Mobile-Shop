<?php
class Product
{
  public $db = null;
  public function __construct(DBConnection $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }
  public function getData($table = "mobile")
  {
    $result = $this->db->con->query("select * from {$table};");
    $resultArray = array();
    while ($item = $result->fetch_assoc()) {
      $resultArray[] = $item;
    }
    return $resultArray;
  }
}
