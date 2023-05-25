<?php 
class PesoConverter extends UnitConverter {


  public function __construc($value, $fromUnit, $toUnit, $tipoUnidades) {
    parent::__construct($value, $fromUnit, $toUnit, $tipoUnidades);
  }

  public function convert() {
    if ($this->fromUnit == 'Libras' && $this->toUnit == 'Kilogramos') {
      $this->result = $this->value * 0.453592;
    }
    if ($this->fromUnit == 'Kilogramos' && $this->toUnit == 'Libras') {
      $this->result = $this->value * 2.20462;
    }
    if ($this->fromUnit == 'Libras' && $this->toUnit == 'Gramos') {
      $this->result = $this->value * 453.592;
    }
    return $this->result;
  }
 
}