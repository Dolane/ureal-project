<?php

namespace Model;

use R;

class User {

    public $name;
    public $unique_code;

    public function __construct() {

    }

    public function checkAuth() {
        if (isset($_POST)) {
            if ($_POST['submit']) {
                $_SESSION['full_name'] = $_POST['full_name'];
                $_SESSION['unique_code'] = $_POST['unique_code'];
                $this->name = $_SESSION['full_name'];
                $this->unique_code = $_SESSION['unique_code'];
                $code = R::getCell("SELECT unique_code FROM pupils WHERE full_name=$this->name");
                $name = R::getCell("SELECT full_name FROM pupils WHERE code=$code");
                if (($name == ($_SESSION['full_name']) && ($code == $_SESSION['unique_code']))) {
                    pp($name);
                    pp($code);
                }
            }
        }
//        }
//        if (isset($_SESSION['full_name']) && isset($_SESSION['unique_code'])) {
//            pp($_SESSION['full_name']);
//            pp($this->name);
//
//            }
        }


}