<?php

class Database {

  protected function connect() {
    try {
      $username = "root";
      $password = "";
      $database = new PDO('mysql:host=localhost;dbname=sinaindonesia', $username, $password);
      return $database;
    } catch (PDOException $e) {
      print "Database error: " . $e->getMessage() . "<br/>";
      die();
    }
  }
}
