<?php

namespace Model;

use R;

require_once '../index.php';
class AppModel {

    public function getTask($variant) {
      return R::getAll("SELECT * FROM math WHERE variant=$variant");

    }

    public function getAnswer($task_id) {
        return R::getCell("SELECT answers FROM answers WHERE id=$task_id");


    }

    public function getImage($task_id) {
        return R::getCell("SELECT description FROM math WHERE id=$task_id");
    }
}