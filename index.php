<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="" />
        <script src="" type="text/javascript"></script>
        <title>Login - dlgaApp</title>
    </head>

<?php
    session_start();

    if(isset($_SESSION["member"])) {
        header("Location: profile.php");
    } 

?>

    <body>
        <header>
        </header>
        <main>
            <!-- Formulario inicio de sesión -->
            <form action="index_function.php" method="post">
				<div>
                    <label for="user">Nombre de usuario: </label>
                    <input type="text" name="user" id="user" required />
                    <label for="pass">Contraseña: </label>
                    <input type="password" name="pass" id="pass" pattern="[A-Za-z0-9, ]+" required />
                </div>
				<input type="submit" name="submit" value="Login" />
                <?php if (isset($_SESSION["errorLogin"])) { ?>
		            <div class="error">
		                <p> <?php print_r($_SESSION["errorLogin"]); ?> </p>
		            </div>"
	            <?php }	?>
			</form>
        </main>
    </body>
</html>
