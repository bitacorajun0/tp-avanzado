<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>quiz</title>
</head>

<body>
    <div>
        <header class="header">
            <div class="menuHorizontal">
                <a href="index.php?ruta=inicio"> Inicio</a>
                <a href="index.php?ruta=cliqueame"> Cliqueame</a>
                <a href="index.php?ruta=panel"> Panel</a>
                <a href="index.php?ruta=salir"> Salir</a>
            </div>
        </header>

        <section>
            <?php
            if (isset($_GET["ruta"])) {
                if (
                    $_GET["ruta"] == "inicio" ||
                    $_GET["ruta"] == "cliqueame" ||
                    $_GET["ruta"] == "panel" ||
                    $_GET["ruta"] == "salir"
                ) {
                    include "paginas/" . $_GET["ruta"] . ".php";
                } else {
                    include "paginas/error404.php";
                }
            } else {
                include "paginas/inicio.php";
            }
            ?>
        </section>

    </div>

    <footer>
        <p><?php echo "Hoy es: " . date('d-m-y') . "."; ?> TRABAJO PRÁCTICO PHP</p>
    </footer>

</body>

</html>