<?php

interface CrudInterface
{
  function getAll();
  function getOne($id);
  function update($values);
  function add($values);
}
