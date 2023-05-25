<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $value = $_POST['value'];
        echo "Valor: " . $value . "<br>";
        // Crear la instancia del conversor de la unidad adecuada
    
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

        function setEvents() {
            MENUITEMS.map(item => {
                let button = document.getElementById(item.nombre);
                button.addEventListener('click', function(e) {
                    document.getElementById('headerTipo').innerHTML = `Unidades tipo ${e.target.id}` ;
                });
                
            })
        }
        const root = document.getElementById('root');
        root.innerHTML = Menu();

        setEvents();
    </script>
</body>

</html>