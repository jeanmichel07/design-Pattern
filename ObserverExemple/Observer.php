<?php
require_once "Subject.php";

class Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update(Subject $subject) {
        $state = $subject->getState();
        echo "Observateur {$this->name} a été notifié avec l'état : $state <br/>";
    }
}

