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

        <form action="vistas/paginas/conexiones/procesar_datos.php" method="POST" class="formulario">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br>

            <label for="lugar">¿De donde sos?:</label>
            <input type="text" name="lugar" required><br>

            <label for="pregunta1">¿Cuánta luz hay en tu casa?</label>
            <select name="pregunta1" required>
                <option value="Mucha luz">Mucha luz</option>
                <option value="Poca luz">Poca luz</option>
                <option value="Nada luz">Nada de luz</option>
            </select><br>

            <label for="pregunta2">¿Cada cuánto regas?</label>
            <select name="pregunta2" required>
                <option value="Todos los dias">Todos los dias</option>
                <option value="Dia por medio">Dia por medio</option>
                <option value="Casi nunca">Casi nunca</option>
            </select><br>

            <label for="pregunta3">¿Qué clima predomina donde vivis?</label>
            <select name="pregunta3" required>
                <option value="Humedo">Humedo</option>
                <option value="Frio">Frio</option>
                <option value="Calido">Calido</option>
            </select><br>
            <button type="submit" name="submit" value="enviar">Enviar</button>
        </form>

    </main>

</body>

</html>