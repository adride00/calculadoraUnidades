<?php
require_once './src/Classes/Converter.php';
require_once './src/Classes/Longitud.php';
require_once './src/Classes/Peso.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $value = $_POST['value'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
    $tipoUnidades = $_POST['tipoUnidades'];
    echo "Valor: " . $value . "<br>";
    echo "De: " . $fromUnit . "<br>";
    echo "A: " . $toUnit . "<br>";
    echo "Tipo de Unidades: " . $tipoUnidades . "<br>";
    // Crear la instancia del conversor de la unidad adecuada
    $convertedValue = null;

    if ($tipoUnidades === 'Peso') {
        $converter = new PesoConverter($value, $fromUnit, $toUnit, $tipoUnidades);
        $convertedValue = $converter->convert();
    }

    
    echo "Valor convertido: " . $convertedValue;
}
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
        .buttonType {
        position: relative;
        display: inline-block;
    }
        .buttonType img {
        pointer-events: none;
    }
    </style>
</head>

<body>
    <?php
    require_once './src/Views/Header.php';
    ?>

    <div id="root"></div>
    
    <?php
    require_once './src/Views/Form.php';
    ?>

    <script type="module">
        import { Menu } from './src/components/Menu.js';
        import { MENUITEMS } from './assets/constants/menu.js';
        import { UNIDADES } from './assets/constants/unidades.js';

        function setEvents() {
            MENUITEMS.map(item => {
                let button = document.getElementById(item.nombre);
                button.addEventListener('click', function(e) {
                    document.getElementById('headerTipo').innerHTML = `Unidades tipo ${e.target.id}` ;
                    let unidades = UNIDADES.filter(unidad => unidad[e.target.id]);
                    let fromUnit = document.getElementById('fromUnit');
                    let toUnit = document.getElementById('toUnit');
                    fromUnit.innerHTML = '';
                    toUnit.innerHTML = '';
                    unidades[0][e.target.id].map(unidad => {
                        fromUnit.innerHTML += `<option value="${unidad}">${unidad}</option>`;
                        toUnit.innerHTML += `<option value="${unidad}">${unidad}</option>`;
                    });
                    document.getElementById('tipoUnidades').value = e.target.id;

                

                });
                
            })
        }
        const root = document.getElementById('root');
        root.innerHTML = Menu();

        setEvents();
    </script>
</body>

</html>