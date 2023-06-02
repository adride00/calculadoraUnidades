<?php 
// agregar clase validator 
// Path: src\Classes\Validator.php
require_once 'D:\laragon\www\calculadora\src\Classes\Validator.php';
require_once 'D:\laragon\www\calculadora\src\Classes\Converter.php';
require_once 'D:\laragon\www\calculadora\src\Classes\Datos.php';
require_once 'D:\laragon\www\calculadora\src\Classes\Longitud.php';
require_once 'D:\laragon\www\calculadora\src\Classes\Peso.php';
require_once 'D:\laragon\www\calculadora\src\Classes\Volumen.php';
require_once 'D:\laragon\www\calculadora\src\Classes\Tiempo.php';
require_once 'D:\laragon\www\calculadora\src\Classes\Moneda.php';

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
    echo json_encode($convertedValue);
  }

  // $converter = new $tipoUnidades($value, $fromUnit, $toUnit, $tipoUnidades);
  // $convertedValue = unidades($converter);

}
