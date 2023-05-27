<?php
/*
class Volumen extends UnitConverter {


  public function __construct($value, $fromUnit, $toUnit, $tipoUnidades) {
    parent::__construct($value, $fromUnit, $toUnit, $tipoUnidades);
  }

  public function convert() {
    if ($this->fromUnit == 'Litros' && $this->toUnit == 'Mililitros') {
      $this->result = intval($this->value) * 1000;
    }
    if ($this->fromUnit == 'Mililitros' && $this->toUnit == 'Litros') {
      $this->result = $this->value * 0.001;
    }
    
    if ($this->fromUnit == 'Litros' && $this->toUnit == 'Galones') {
      $this->result = $this->value * 0.26;
    }
    if ($this->fromUnit == 'Galones' && $this->toUnit == 'Litros') {
      $this->result = $this->value * 3.7854;
    }

    if ($this->fromUnit == 'Litros' && $this->toUnit == 'Onzas') {
      $this->result = $this->value * 33.81;
    }
    if ($this->fromUnit == 'Onzas' && $this->toUnit == 'Galones') {
      $this->result = $this->value * 0.03;
    }

    if ($this->fromUnit == 'Litros' && $this->toUnit == 'Botellas') {
      $this->result = $this->value * 1.3333;
    }
    if ($this->fromUnit == 'Botellas' && $this->toUnit == 'Galones') {
      $this->result = $this->value * 0.7500;
    }

    if ($this->fromUnit == 'Mililitros' && $this->toUnit == 'Galones') {
      $this->result = $this->value * 0.000264;
    }
    if ($this->fromUnit == 'Galones' && $this->toUnit == 'Mililitros') {
      $this->result = $this->value * 3790;
    }

    if ($this->fromUnit == 'Mililitros' && $this->toUnit == 'Onzas') {
      $this->result = $this->value * 0.033814;
    }
    if ($this->fromUnit == 'Onzas' && $this->toUnit == 'Mililitros') {
      $this->result = $this->value * 29.5735;
    }

    if ($this->fromUnit == 'Mililitros' && $this->toUnit == 'Botellas') {
      $this->result = $this->value * 0.001333;
    }
    if ($this->fromUnit == 'Botellas' && $this->toUnit == 'Mililitros') {
      $this->result = $this->value * 756.3;
    }

    if ($this->fromUnit == 'Galones' && $this->toUnit == 'Onzas') {
      $this->result = $this->value * 128;
    }
    if ($this->fromUnit == 'Onzas' && $this->toUnit == 'Galones') {
      $this->result = $this->value * 0.0078125;
    }

    if ($this->fromUnit == 'Galones' && $this->toUnit == 'Botellas') {
      $this->result = $this->value * 5.00517;
    }
    if ($this->fromUnit == 'Botellas' && $this->toUnit == 'Galones') {
      $this->result = $this->value * 0.19979;
    }

    if ($this->fromUnit == 'Onzas' && $this->toUnit == 'Botellas') {
      $this->result = $this->value * 0.03910;
    }
    if ($this->fromUnit == 'Botellas' && $this->toUnit == 'Onzas') {
      $this->result = $this->value * 25.57354;
    }
  }
 
}
*/

class Volumen extends UnitConverter {
    private $tabla = [
      'Litros' => [
        'Mililitros' => 1000,
        'Galones' => 0.26,
        'Onzas' => 33.81,
        'Botellas' => 1.3333
      ],
      'Mililitros' => [
        'Litros' => 0.001,
        'Galones' => 0.000264,
        'Onzas' => 0.033814,
        'Botellas' => 0.001333
      ],
      'Galones' => [
        'Litros' => 3.7854,
        'Mililitros' => 3790,
        'Onzas' => 128,
        'Botellas' => 5.00517
      ],
      'Onzas' => [
        'Litros' => 0.0295735,
        'Mililitros' => 29.5735,
        'Galones' => 0.0078125,
        'Botellas' => 0.03910
      ],
      'Botellas' => [
        'Litros' => 0.7500,
        'Mililitros' => 756.3,
        'Galones' => 0.19979,
        'Onzas' => 25.57354
      ]
    ];
  
    public function __construct($value, $fromUnit, $toUnit, $tipoUnidades) {
      parent::__construct($value, $fromUnit, $toUnit, $tipoUnidades);
    }
  
    public function convert() {
      if (isset($this->tabla[$this->fromUnit][$this->toUnit])) {
        $conversion = $this->tabla[$this->fromUnit][$this->toUnit];
        $this->result = $this->value * $conversion;
      }
    }
  }
?>