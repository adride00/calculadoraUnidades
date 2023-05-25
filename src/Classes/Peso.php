<?php 
class PesoConverter extends UnitConverter {


  public function __construc($value, $fromUnit, $toUnit, $tipoUnidades) {
    parent::__construct($value, $fromUnit, $toUnit, $tipoUnidades);
  }

  public function convert() {
    if ($this->fromUnit == 'Libras' && $this->toUnit == 'Kilogramos') {
      $this->result = $this->value * 0.453592;
    }
    return $this->result;
  }
 
}