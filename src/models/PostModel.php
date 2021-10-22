<?php

class Post
{
  private $id;
  private $user_id;
  private $title;
  private $content;

  function __construct(int $id, int $user_id, string $title = "", string $content = "")
  {
    $this->id = $id;
    $this->user_id = $user_id;
    $this->title = $title;
    $this->content = $content;
  }
}
