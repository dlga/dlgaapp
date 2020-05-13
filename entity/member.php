<?php
// Clase de definición de la Entidad referente al Miembro de la Delegación

class Member {
    private $idMember;
    private $name;
    private $position;
    private $commissions;
    private $departaments;

    public function __construct($user) {
    }

    public function getId() {
        return $this->idMember;
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

    public function getCommissions() {
        return $this->commissions;
    }

    public function addCommission($commission) {
        $this->commissions += $commission;
    }

    public function addAllCommissions($listCommissions) {
        $this->commissions += $listCommissions;
    }

    public function getDepartament() {
        return $this->departaments;
    }

    public function addDepartament($departament) {
        $this->departaments += $departament;
    }

    public function addAllDepartaments($listDepartaments) {
        $this->departaments += $listDepartaments;
    }
    
    public function toString() {
        return getName() + ", " + getPosition();
    }

}


?>