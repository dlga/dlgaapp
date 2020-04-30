<?php

    session_start();

    require_once("connections.php");

    require_once("/entity/member.php");

    $errors = array();

    //Comprobar que se ha pasado el campo user.
    if(!isset($_REQUEST["user"])) {
        $errors["user"] = "Usuario inválido";
        header("Location: index.php");
    }
    
    //Comprobar que se ha pasado el campo pass y cumple el patrón $pattern.
    if(!isset($_REQUEST["pass"]) || preg_match($pattern, $_REQUEST["pass"])) {
        $errors["pass"] = "Contraseña inválida";
        header("Location: index.php");
    }

    //Mandar al usuario a la vista index.php en caso de que se cumpla cualquier condición de las anteriores
    if(!empty($errors)) {
        $_SESSION["errorLogin"] = $errors;
        exit;
    }
    
	//Comprueba que el usuari y la constaseña son correctas. En caso de no serlo, vuelve a la vista index.php
	if (isset($_POST["submit"])){
		$user = $_POST["user"];
		$pass = $_POST["pass"];

		$connection = openBDConnection();
		$member = findUserByCredentials($connection, $user, $pass);
		
		closeBDConnection($connection);
		
		if (is_bool($member)) {
            $errors["login"] = "Usuario o contraseña inválidos";
            $_SESSION["errorLogin"] = $errors;
            header("Location: index.php");
            exit;
        } else {
			$_SESSION["member"] = $member;
			Header("Location: profile.php");
		}
	}

    function findUserByCredentials($connection, $user, $pass) {
        try {
            $query = "SELECT * FROM Members WHERE user=:user AND pass=:pass";
            $stmt = $connection->prepare($query);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':pass', $pass);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Member');
            $stmt->execute();
            $member = $stmt->fetch();
            return $member;
        } catch(PDOException $e) {
            $errors["database"] = "Error al realizar la consulta a la base de datos";
            $_SESSION["errorLogin"] = $errors;
            header("Location: index.php");
            exit;
        }

    }

    //password_hash($pass, PASSWORD_DEFAULT) --> Encripta contraseña para guardarla en la bbdd
    //password_verify($_REQUEST["pass"], $pass)

?>
