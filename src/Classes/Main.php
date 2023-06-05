<?php 

// require_once __DIR__ . '\Validator.php';
// require_once __DIR__ .'\Converter.php';
// require_once __DIR__ .'\Datos.php';
// require_once __DIR__ .'\Longitud.php';
// require_once __DIR__ .'\Peso.php';
// require_once __DIR__ .'\Volumen.php';
// require_once __DIR__ .'\Tiempo.php';
// require_once __DIR__ .'\Moneda.php';

$folderPath = __DIR__;

$files = glob($folderPath . '/*.php');

foreach ($files as $file) {
    $filename = basename($file);
    if ($filename !== basename(__FILE__)) {
        require_once $file;
    }
}
class Main {

  static public function  main(){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
        $value = $_POST['value'] ?? null;
        $fromUnit = $_POST['fromUnit'] ?? null;
        $toUnit = $_POST['toUnit'] ?? null;
        $tipoUnidades = $_POST['tipoUnidades'] ? $_POST['tipoUnidades'] : "Peso";
      
      
      // echo "Valor: " . $value . "<br>";
      // echo "De: " . $fromUnit . "<br>";
      // echo "A: " . $toUnit . "<br>";
      // echo "Tipos de Unidades: " . $tipoUnidades . "<br>";
      // Crear la instancia del conversor de la unidad adecuada
      $convertedValue = "";
      function unidades(UnitConverter $converter){
        $converter->convert();
        return $converter->getConvertedValue();
      }
    
    
      $resultadoValidacion = Validador::validarDatosFormulario($_POST);
      // print_r($resultadoValidacion['status'] === 'success');
      if($resultadoValidacion['status'] === 'success'){
        try {
          $converter = new $tipoUnidades($value, $fromUnit, $toUnit, $tipoUnidades);
          $convertedValue = unidades($converter);
          echo json_encode($convertedValue);
        } catch (Exception $e) {
          $resultadoValidacion['status'] = 'error';
          $resultadoValidacion['msj'] = $e->getMessage();
          echo json_encode($resultadoValidacion);
        }
        
      }else{
        echo json_encode($resultadoValidacion);
      }
    
      // $converter = new $tipoUnidades($value, $fromUnit, $toUnit, $tipoUnidades);
      // $convertedValue = unidades($converter);
    
    }

  }

}

Main::main();


