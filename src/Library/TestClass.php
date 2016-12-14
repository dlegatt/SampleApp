<?php

namespace Legattd\Library;

class TestClass {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
}