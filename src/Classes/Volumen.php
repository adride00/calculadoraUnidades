<?php

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

    public function getConvertedValue() {
      return $this->result;
    }
    
  }

?>