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
    echo "DEBUG: 2";
    $posts = $this->repository->all();

    require_once("views/postIndex.php");
  }

  function show(int $id)
  {
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
