<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try{
    $value = $_POST['value'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
    $tipoUnidades = $_POST['tipoUnidades'];
  }catch(Exception $e){
    echo $e->getMessage();
  }
  
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

  // instanciar clase validator y llamar al metodo validarDatosFormulario
  $validator = new Validador();
  $validacion = $validator->validarDatosFormulario($_POST);
  if($validacion === true){
    $converter = new $tipoUnidades($value, $fromUnit, $toUnit, $tipoUnidades);
    $convertedValue = unidades($converter);
  }else{
    echo 'Se encontraron los siguientes errores:<br>';
    echo $validacion;
  }

  // $converter = new $tipoUnidades($value, $fromUnit, $toUnit, $tipoUnidades);
  // $convertedValue = unidades($converter);

  // echo "Valor convertido: " . $convertedValue;
}
