<?php

namespace Legattd\Library;

class TestClass {
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}