<?php
class VehicleListings {
  private $db;
  
  public function __construct($db) {
    $this->db = $db;
  }
  
  public function search($vin) {
    $sql = "SELECT * FROM inventory WHERE vin = '" . $vin . "'";
    $result = $this->db->query($sql);
    return $result->fetch(PDO::FETCH_ASSOC);
  }
}