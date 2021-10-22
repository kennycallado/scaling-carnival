<?php

require_once("models/PostModel.php");
require_once("Database.php");

class PostRepository
{
  public $db;

  function __construct()
  {
    $this->db = new Database();
  }

  function all(): array
  {
    $posts = [];
    $dbh = $this->db->conn;

    try {
      $query = $dbh->prepare("SELECT * FROM t_posts");
      $query->execute();

      while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        array_push($posts, new Post(
          $row->id,
          $row->user_id,
          $row->title,
          $row->content,
        ));
      }
    } catch (PDOException $e) {
      echo "Error: $e->getMessage()";
      die("error: Problemas PostRepository all().");
    }

    return $posts;
  }
}
