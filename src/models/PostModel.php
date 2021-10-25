<?php

class Post
{
  public $id;
  public $user_id;
  public $title;
  public $content;

  function __construct(int $id, int $user_id, string $title = "", string $content = "")
  {
    $this->id = $id;
    $this->user_id = $user_id;
    $this->title = $title;
    $this->content = $content;
  }
}
