<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Resueltos en PHP</title>
</head>
<body>
    <h1>Ejercicios Resueltos en PHP</h1>

    <!-- Ejercicio 1 -->
    <h2>Ejercicio 1: Cálculo de Operaciones Básicos con Dos Variables</h2>
    <p>Consigna: Dado dos variables definidas, calcular la suma, multiplicación, resta y división. Mostrar el resultado por pantalla.</p>
    <?php
        $a = 10;
        $b = 5;

        echo "<p>Suma: " . ($a + $b) . "</p>";
        echo "<p>Multiplicación: " . ($a * $b) . "</p>";
        echo "<p>Resta: " . ($a - $b) . "</p>";
        echo "<p>División: " . ($a / $b) . "</p>";
    ?>

    <!-- Ejercicio 2 -->
    <h2>Ejercicio 2: Cálculo de Promedio de Tres Variables</h2>
    <p>Consigna: Dado tres variables definidas, calcular el promedio de estas variables. Mostrar el resultado por pantalla.</p>
    <?php
        $x = 8;
        $y = 7;
        $z = 9;

        $promedio = ($x + $y + $z) / 3;
        echo "<p>Promedio: " . $promedio . "</p>";
    ?>

    <!-- Ejercicio 3 -->
    <h2>Ejercicio 3: Cálculo de Valor Par e Impar</h2>
    <p>Consigna: Crear un programa en PHP que verifique si un número dado es par o impar.</p>
    <?php
        $numero = 7;

        if ($numero % 2 == 0) {
            echo "<p>El número $numero es par.</p>";
        } else {
            echo "<p>El número $numero es impar.</p>";
        }
    ?>

    <!-- Ejercicio 4 -->
    <h2>Ejercicio 4: Contar Vocales</h2>
    <p>Consigna: Crear un programa en PHP que cuente el número de vocales en una cadena de texto dada.</p>
    <?php
        $cadena = "Hola, ¿cómo estás?";
        $vocales = preg_match_all('/[aeiouáéíóú]/i', $cadena);

        echo "<p>La cadena '$cadena' tiene $vocales vocales.</p>";
    ?>

    <!-- Ejercicio 5 -->
    <h2>Ejercicio 5: Imprimir Cadena de Caracteres</h2>
    <p>Consigna: Realizar un programa que imprima por pantalla utilizando variables un saludo como “Hola soy miNombre”.</p>
    <?php
        $miNombre = "Gabriel";

        echo "<p>Hola, soy $miNombre.</p>";
    ?>

    <!-- Ejercicio 6: Usando Bootstrap -->
    <h2>Ejercicio 6: Promedio con Interfaz Gráfica (Bootstrap)</h2>
    <p>Consigna: Reescribir el ejercicio 2 utilizando una interfaz gráfica solicitando al usuario tres notas y obteniendo el promedio.</p>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Calculadora de Promedio</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="nota1">Nota 1:</label>
                                <input type="number" id="nota1" name="nota1" class="form-control" step="0.01" required>
                            </div>
                            <div class="form-group">
                                <label for="nota2">Nota 2:</label>
                                <input type="number" id="nota2" name="nota2" class="form-control" step="0.01" required>
                            </div>
                            <div class="form-group">
                                <label for="nota3">Nota 3:</label>
                                <input type="number" id="nota3" name="nota3" class="form-control" step="0.01" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Calcular Promedio</button>
                        </form>
                    </div>
                </div>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nota1 = $_POST['nota1'];
                    $nota2 = $_POST['nota2'];
                    $nota3 = $_POST['nota3'];

                    $promedio = ($nota1 + $nota2 + $nota3) / 3;
                    echo "<div class='alert alert-info mt-3 text-center'>";
                    echo "<strong>El promedio de las tres notas es: " . number_format($promedio, 2) . "</strong>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
