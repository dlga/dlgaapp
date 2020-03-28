<?php 

    session_start();

    if(isset($_REQUEST["exit"])) {
        $_SESSION["member"] = null;
        header("Location: index.php");
        exit;
    }

?>
