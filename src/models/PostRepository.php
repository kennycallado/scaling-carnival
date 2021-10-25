<?php

/* Clases requeridas */
require_once("models/PostModel.php");
require_once("Database.php");

/* Interfaces requeridas */
require_once("interfaces/CrudInterface.php");

class PostRepository implements CrudInterface
{
  public $db;

  function __construct()
  {
    $this->db = new Database();
  } // __construct()

  function getAll(): array
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
      die("error: Problemas PostRepository getAll().");
    }

    return $posts;
  } // getAll()

  function getOne($id): object
  {
    $dbh = $this->db->conn;

    try {
      $query = $dbh->prepare("SELECT * FROM t_posts WHERE id = $id;");
      $query->execute();

      if ($row = $query->fetch(PDO::FETCH_OBJ)) {
        $post = new Post(
          $row->id,
          $row->user_id,
          $row->title,
          $row->content,
        );
      }
    } catch (PDOException $e) {
      echo "Error: $e->getMessage()";
      die("error: Problemas PostRepository getOne().");
    }

    if ($post) return $post;
    die("Post no existente.");
  } // getOne()

  function add($values): bool
  {
    $dbh = $this->db->conn;

    try {
      $query = $dbh->prepare("INSERT INTO t_posts(user_id, title, content) values(? ? ?)");
      $query->execute([$values->user_id, $values->title, $values->content]);

      /* No se como manejar lo que devuelve sql */
      return true;
    } catch (PDOException $e) {
      echo "Error: $e->getMessage()";
      die("error: Problemas PostRepository all().");
    }
  } // add()

  function update($values)
  {
  } // update()
}
