<?php
// Clase de definición de la Entidad referente al Miembro de la Delegación

include_once("connections.php");

class Member {
    private $name;
    private $position;

    public function __construct($user) {
        $data = $this->getMember($user);
        
        $this->name = $data["name"];
        $this->position = $data["position"];
    }

    public function getName() {
        return $this->name;
    }
    
    public function getPosition() {
        return $this->position;
    }
    
    public function toString() {
        return $name + ", " + $position;
    }

    private function getMember($user) {
        $connection = openBDConnection();

        try {
            $consulta = "SELECT * FROM Miembros WHERE user=:user";
            $stmt = $connection->prepare($consulta);
            $stmt->bindParam(':user',$user);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            $errors["database"] = "Error al realizar la consulta a la base de datos";
            $_SESSION["errorMember"] = $errors;
            header("Location: index.php");
        }
    }

}


?>