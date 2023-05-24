<?php
// Incluir las clases y la interfaz necesarias
require_once 'src/Interfaces/UnitConverterInterface.php';
require_once 'src/Classes/Converter.php';
require_once 'src/Classes/Longitud.php';
require_once 'src/Classes/Masa.php';

// Manejar la solicitud de conversión de unidades
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $value = $_POST['value'];
//     $fromUnit = $_POST['fromUnit'];
//     $toUnit = $_POST['toUnit'];
//     echo "Valor: " . $value . "<br>";
//     echo "De: " . $fromUnit . "<br>";
//     echo "A: " . $toUnit . "<br>";
//     // Crear la instancia del conversor de la unidad adecuada

//     $converter = null;

//     if ($fromUnit === 'length') {
//         $converter = new LengthConverter($value);
//     } elseif ($fromUnit === 'mass') {
//         $converter = new MassConverter($value);
//     }

//     // Realizar la conversión
//     if ($converter) {
//         $convertedValue = null;

//         switch ($toUnit) {
//             case 'feet':
//                 $converter->convertToFeet();
//                 $convertedValue = $converter->getConvertedValue();
//                 break;
//             case 'miles':
//                 $converter->convertToMiles();
//                 $convertedValue = $converter->getConvertedValue();
//                 break;
//             case 'kilometers':
//                 $converter->convertToKilometers();
//                 $convertedValue = $converter->getConvertedValue();
//                 break;
//             // Agregar más casos según las unidades que desees convertir
//         }

//         echo "Valor convertido: " . $convertedValue;
//     }
// function convertUnit(UnitConverterInterface $converter) {
//     $converter->convert();
//     $convertedValue = $converter->getConvertedValue();
//     echo "Valor convertido: " . $convertedValue;
// }

// $lengthConverter = new LengthConverter(10);
// $massConverter = new MassConverter(5);

// convertUnit($lengthConverter); // Llama a los métodos convert() y getConvertedValue() de LengthConverter
// convertUnit($massConverter);
// }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Calculadora de Conversión de Unidades</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        body {
            background: #c1c5d3;
        }
    </style>
</head>

<body>
    <?php
    require_once './src/Views/Header.php';
    ?>
    <div id="root"></div>
    <div class="container mt-3 p-5">
    <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-body-secondary">
            2 days ago
        </div>
    </div>
    </div>    
    <script type="module">
        import {
            Menu
        } from './src/components/Menu.js';

        const root = document.getElementById('root');
        root.innerHTML = Menu();
    </script>
</body>

</html>