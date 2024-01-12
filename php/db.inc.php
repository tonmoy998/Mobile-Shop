<?php
class DBConnection
{
  protected $host = "localhost";
  protected $db = "moteshop";
  protected $password = "16211621";
  protected $usr = "root";
  public $con = null;

  public function __construct()
  {
    $this->con = mysqli_connect($this->host, $this->usr, $this->password, $this->db);
    if ($this->con->connect_error) {
      echo "Connection failed " . $this->con->connect_error;
    }
  }
  public function __destruct()
  {
    $this->closeConnection();
  }
  public function closeConnection()
  {
    if ($this->con != null) {
      $this->con->close();
    }
  }
}
