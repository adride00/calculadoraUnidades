<?php 

class UnitConverter {
  protected $fromValue;
  protected $toValue;

  public function __construct($fromValue) {
      $this->fromValue = $fromValue;
      $this->toValue = null;
  }

  public function convert() {
      // Este es solo un ejemplo. Deberás implementar la lógica de conversión específica en las clases hijas.
      // Aquí asumiremos que la conversión siempre será de la misma unidad a otra.
      
  }

  public function getConvertedValue() {
      return $this->toValue;
  }

  
}