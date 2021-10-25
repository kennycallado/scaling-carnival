<?php

echo "<ul>";
foreach ($posts as $post) {
  echo "<li>";
  echo "<a href='/posts/$post->id'>$post->title</a>";
  echo "</li>";
}
echo "</ul>";
