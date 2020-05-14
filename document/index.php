<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="" />
        <script src="" type="text/javascript"></script>
        <title>Documentation - dlgaApp</title>
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
            Creador de Documentos en función del MIC de la Delegación de la Escuela Técnica Superior de Ingeniería Informática
        </header>
        <main>
            <div>
                <a href="delegation/index.php">Acta</a>
            </div>
            <div>
                <a href="departaments/index.php">Acta de Acuerdos</a>
            </div>
            <div>
                <a href="groups/index.php">Orden del Día</a>
            </div>
            <div>
                <a href="subjects/index.php">Censo Delegación de Centro</a>
            </div>
            <div>
                <a href="teachers/index.php">Censo Delegados de Grupos</a>
            </div>
            <div>
                <a href="../profile.php">Volver</a>
            </div>
        </main>
    </body>
</html>
