<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="" />
        <script src="" type="text/javascript"></script>
        <title>Complain - dlgaApp</title>
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
            Gestión de Incidencias de la Delegación de la Escuela Técnica Superior de Ingeniería Informática
        </header>
        <main>
            <div>
                <a href="all/index.php">Ver incidencias</a>
            </div>
            <div>
                <a href="new/index.php">Crear incidencia</a>
            </div>
            <div>
                <a href="../profile.php">Volver</a>
            </div>
        </main>
    </body>
</html>
