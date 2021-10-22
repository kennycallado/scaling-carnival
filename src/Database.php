<?php

class Database
{
  public $conn;

  function __construct()
  {
    /* Datos conexión base de datos; */
    $host = "mysql";
    $user = "root";
    $pass = "toor";
    $db   = "db_blog";
    $dsn  = "mysql:dbname=$db;host=$host";

    try {
      /* Crea conexión con base de datos */
      $dbh = new PDO($dsn, $user, $pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
      die("error: Problemas con la conexión.");
    }

    $this->conn = $dbh;
  }

  function __destruct()
  {
    /* Cuando termina la vida de la clase la conexión se cierra */
    $this->conn = null;
  }
}
