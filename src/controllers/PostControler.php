<?php

require_once("models/PostRepository.php");

class PostController
{
  public $repository;

  function __construct()
  {
    $this->repository = new PostRepository();
  }

  function index()
  {
    $posts = $this->repository->getAll();

    require_once("views/postIndex.php");
  }

  function show(int $id)
  {
    $post = $this->repository->getOne($id);

    require_once("views/postDetails.php");
  }

  function store(object $values)
  {
  }

  function update(object $values)
  {
  }

  function delete(int $id)
  {
  }
}
