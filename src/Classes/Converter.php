<?php 

abstract class UnitConverter {
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
      $this->result = 0;
  }

  abstract public function convert();

  abstract public function getConvertedValue();

  
}