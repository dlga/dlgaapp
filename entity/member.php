<?php
// Clase de definición de la Entidad referente al Miembro de la Delegación

include_once("connections.php");

class Member {
    private $name;
    private $position;

    public function __construct($user) {
    }

    public function getName() {
        return $this->name;
    }
    
    public function getPosition() {
        switch ($this->position) {
            case 0:
                $res = "Delegado de Centro";
                break;
            case 1:
                $res = "Colaborador";
                break;
            case 2:
                $res = "Delegado Nato";
                break;
        }
        return $res;
    }
    
    public function toString() {
        return getName() + ", " + getPosition();
    }

}


?>