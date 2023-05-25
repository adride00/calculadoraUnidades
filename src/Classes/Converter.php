<?php 

class UnitConverter {
  protected $value;
  protected $fromUnit;

  protected $toUnit;
  protected $tipoUnidades;

  protected $result;



  public function __construct($value, $fromUnit, $toUnit, $tipoUnidades) {
      $this->value = $value;
      $this->fromUnit = $fromUnit;
      $this->toUnit = $toUnit;
      $this->tipoUnidades = $tipoUnidades;
      $this->result = null;
  }

  public function convert() {
      
  }

  public function getConvertedValue() {
      return $this->result;
  }

  
}