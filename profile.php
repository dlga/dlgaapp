<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="" />
        <script src="" type="text/javascript"></script>
        <title>Profile - dlgaApp</title>
    </head>

    <?php
        require_once("/entity/member.php");

        session_start();

        if(!isset($_SESSION["member"])) {
            header("Location: index.php");
            exit;
        } 

        $currentMember = $_SESSION["member"];
    ?>

    <body>
        <header>
        </header>
        <main>
            <h3> 
                <?php 
                    echo($currentMember->getName());
                    echo "<br />";
                    echo($currentMember->getPosition());
                ?>
            </h3>
                <?php
                    echo "<p>Comisiones de Centro</p>";
                    echo($currentMember->getCommissions());
                    echo "<p>Departamentos</p>";
                    echo($currentMember->getDepartament());
                ?>
            
            <a href="#"> Información </a>
            <a href="#"> Incidencias </a>
            <a href="#"> Documentos </a>

            <form action="profile_function.php" method="post">
                <input type="submit" name="exit" value="Exit">
            </form>
        </main>
    </body>
</html>
