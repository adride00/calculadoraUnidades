<?php

class Longitud extends UnitConverter {
  
    private $tabla = [
      'Metros' => [
        'Kilometros' => 0.001,
        'Millas' => 0.000621371,
        'Pies' => 3.28084,
        'Centimetros' => 100
      ],
      'Kilometros' => [
        'Metros' => 1000,
        'Millas' => 0.621371,
        'Pies' => 3280.84,
        'Centimetros' => 100000
      ],
      'Millas' => [
        'Kilometros' => 1.609347087886,
        'Metros' => 1609.347087886445,
        'Pies' => 5280.0101308560124,
        'Centimetros' => 160934.7087886444642
      ],
      'Pies' => [
        'Kilometros' => 0.0003048,
        'Metros' => 0.3048,
        'Millas' => 0.000189393576,
        'Centimetros' => 30.480000000029
      ],
      'Centimetros' => [
        'Kilometros' => 0.00001,
        'Metros' => 0,01,
        'Millas' => 0.0000062137,
        'Pies' => 0.03280839895
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
