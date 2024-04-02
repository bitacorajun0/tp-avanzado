<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>quiz</title>
</head>

<body>
    <header>
        <h1>¿Qué plantas se llevan mejor con vos?</h1>
    </header>

    <main>
        <h2>Listado de Usuarios</h2>

        <section class="usuarios">

            <?php
            include("conexionDB.php");
            $consulta = "SELECT * FROM usuarios";
            $resultado = mysqli_query($conexion_db, $consulta);
            while ($mostrar_datos = mysqli_fetch_assoc($resultado)) {
            ?>

                <div class="caja_usuarios">
                    <h3> <?php echo "Nombre: " .  $mostrar_datos['nombre']; ?> </h3>
                    <h4> <?php echo "¿Donde vive? " . "<br>" . $mostrar_datos['lugar'] . "<br>"
                                . "¿Cuánta luz hay en tu casa? " . "<br>" . $mostrar_datos['pregunta1'] . "<br>"
                                . "¿Cada cuánto regas? " . "<br>" .  $mostrar_datos['pregunta2'] . "<br>"
                                . "¿Qué clima predomina? " . "<br>" .  $mostrar_datos['pregunta3']; ?> </h4><br>
                    <p><a href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>">Eliminar</a></p><br>

                </div>

            <?php } ?>

        </section>

    </main>

</body>

</html>