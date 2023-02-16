<?php
class DatabaseConnection {
  private $dbh;
  
  public function __construct() {
    try {
      $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
      $this->dbh = new PDO($dsn, DB_USER, DB_PASS);
    } catch (PDOException $e) {
      die("Failed to connect to database: " . $e->getMessage());
    }
  }
  
  public function query($sql) {
    return $this->dbh->query($sql);
  }
  
  public function close() {
    $this->dbh = null;
  }
}