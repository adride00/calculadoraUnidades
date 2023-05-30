<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try{
    $value = $_POST['value'] ?? null;
    $fromUnit = $_POST['fromUnit'] ?? null;
    $toUnit = $_POST['toUnit'] ?? null;
    $tipoUnidades = $_POST['tipoUnidades'] ? $_POST['tipoUnidades'] : "Peso";
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


  $resultadoValidacion = Validador::validarDatosFormulario($_POST);
  // print_r($resultadoValidacion['status'] === 'success');
  if($resultadoValidacion){
    $converter = new $tipoUnidades($value, $fromUnit, $toUnit, $tipoUnidades);
    $convertedValue = unidades($converter);
  }

  // $converter = new $tipoUnidades($value, $fromUnit, $toUnit, $tipoUnidades);
  // $convertedValue = unidades($converter);

  // echo "Valor convertido: " . $convertedValue;
}
