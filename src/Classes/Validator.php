<?php 

class Validador {
  public function validarDatosFormulario($datosFormulario) {

      // El campo "valor" es obligatorio
      if (empty($datosFormulario['value'])) {
          return 'El campo "valor" es obligatorio.';
      }

      // numero no deben ser negativos
      if ($datosFormulario['value'] < 0) {
          return 'El campo "valor" no puede ser negativo.';
      }

      // El campo "de" es obligatorio
      if (empty($datosFormulario['fromUnit'])) {
          return 'El campo "de" es obligatorio.';
      }

      // El campo "a" es obligatorio

      if (empty($datosFormulario['toUnit'])) {
          return 'El campo "a" es obligatorio.';
      }

      // El campo "tipoUnidades" es obligatorio

      // 
      return true;
  }
}

?>