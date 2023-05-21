<?php
// Incluir las clases y la interfaz necesarias
require_once 'src/Interfaces/UnitConverterInterface.php';
require_once 'src/Classes/Converter.php';
require_once 'src/Classes/Longitud.php';
require_once 'src/Classes/Masa.php';

// Manejar la solicitud de conversión de unidades
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $value = $_POST['value'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
    echo "Valor: " . $value . "<br>";
    echo "De: " . $fromUnit . "<br>";
    echo "A: " . $toUnit . "<br>";
    // Crear la instancia del conversor de la unidad adecuada

    $converter = null;

    if ($fromUnit === 'length') {
        $converter = new LengthConverter($value);
    } elseif ($fromUnit === 'mass') {
        $converter = new MassConverter($value);
    }

    // Realizar la conversión
    if ($converter) {
        $convertedValue = null;

        switch ($toUnit) {
            case 'feet':
                $converter->convertToFeet();
                $convertedValue = $converter->getConvertedValue();
                break;
            case 'miles':
                $converter->convertToMiles();
                $convertedValue = $converter->getConvertedValue();
                break;
            case 'kilometers':
                $converter->convertToKilometers();
                $convertedValue = $converter->getConvertedValue();
                break;
            // Agregar más casos según las unidades que desees convertir
        }

        echo "Valor convertido: " . $convertedValue;
    }
    // function convertUnit(UnitConverterInterface $converter) {
    //     $converter->convert();
    //     $convertedValue = $converter->getConvertedValue();
    //     echo "Valor convertido: " . $convertedValue;
    // }

    // $lengthConverter = new LengthConverter(10);
    // $massConverter = new MassConverter(5);

    // convertUnit($lengthConverter); // Llama a los métodos convert() y getConvertedValue() de LengthConverter
    // convertUnit($massConverter);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Conversión de Unidades</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once './src/Views/Header.php';
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                  <label for="" class="form-label">Tipo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione</option>
                        <option value="1">Longitud</option>
                        <option value="2">Masa</option>
                        <option value="3">Volumen</option>
                        <option value="4">Datos</option>
                        <option value="5">Moneda</option>
                        <option value="6">Tiempo</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    
    <form method="POST" action="index.php">
        <label for="value">Valor:</label>
        <input type="text" name="value" id="value" required>

        <label for="fromUnit">De:</label>
        <select name="fromUnit" id="fromUnit" required>
            <option value="length">Longitud</option>
            <option value="mass">Masa</option>
            <!-- Agregar más opciones para las unidades que desees convertir -->
        </select>

        <label for="toUnit">A:</label>
        <select name="toUnit" id="toUnit" required>
            <option value="feet">Pies</option>
            <option value="miles">Millas</option>
            <option value="kilometers">Kilómetros</option>
            <!-- Agregar más opciones para las unidades que desees convertir -->
        </select>

        <button type="submit">Convertir</button>
    </form>

    <script src="js/script.js"></script>
</body>
</html>