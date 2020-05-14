<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="" />
        <script src="" type="text/javascript"></script>
        <title>Information - dlgaApp</title>
    </head>

    <?php
        require_once("../entity/member.php");

        session_start();

        if(!isset($_SESSION["member"])) {
            header("Location: index.php");
            exit;
        } 
    ?>

    <body>
        <header>
            Información relativa a la Escuela Técnica Superior de Ingeniería Informática
        </header>
        <main>
            <div>
                <a href="delegation/index.php">Delegación de Centro</a>
            </div>
            <div>
                <a href="departaments/index.php">Departamentos</a>
            </div>
            <div>
                <a href="groups/index.php">Grupos</a>
            </div>
            <div>
                <a href="subjects/index.php">Asignaturas</a>
            </div>
            <div>
                <a href="teachers/index.php">Profesores</a>
            </div>
            <div>
                <a href="../profile.php">Volver</a>
            </div>
        </main>
    </body>
</html>
