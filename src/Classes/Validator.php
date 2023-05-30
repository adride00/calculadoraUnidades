<?php 

class Validador {

  
  static public function validarDatosFormulario($datosFormulario) {

      // El campo "valor" es obligatorio
      if (empty($datosFormulario['value'])) {
        return ['msj' => 'El campo "valor" es obligatorio.', 'campo' => 'value', 'status' => 'error'];
      }

      // numero no deben ser negativos
      if ($datosFormulario['value'] < 0) {
        return ['msj' => 'El campo "valor" no debe ser negativo.', 'campo' => 'value', 'status' => 'error'];
      }

      // El campo "de" es obligatorio
      if (empty($datosFormulario['fromUnit'])) {
        return ['msj' => 'El campo "de" es obligatorio.', 'campo' => 'fromUnit', 'status' => 'error'];
      }

      // El campo "a" es obligatorio

      if (empty($datosFormulario['toUnit'])) {
        return ['msj' => 'El campo "a" es obligatorio.', 'campo' => 'toUnit', 'status' => 'error'];
      }

      // validar que value sea un numero
      if (!is_numeric($datosFormulario['value'])) {
        return ['msj' => 'El campo "valor" debe ser un número.', 'campo' => 'value', 'status' => 'error'];
      }

      return ['msj' => '', 'campo' => '', 'status' => 'success'];
  }
}

?>