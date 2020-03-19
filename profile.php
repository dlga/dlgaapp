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
                <?php echo($currentMember->getName()); ?>
            </h3>
        </main>
    </body>
</html>
