<?php

class Dato extends UnitConverter {
  
    private $tabla = [
      'kilobyte' => [
        'Megabyte' => 0.001,
        'Gigabyte' => 0.00000001,
        'Terabyte' => 0.0000000001,
        
      ],
      'Megabyte' => [
        'kilobyte' => 1000,
        'Gigabyte' => 0.001,
        'Terabyte' => 0.00000001,
       
      ],
      'Gigabyte' => [
        'kilobyte' => 0.00000001,
        'Megabyte' => 1000,
        'Terabyte' => 0.001,
        
      ],
      'Terabyte' => [
        'Gigabyte' => 1000,
        'kilobyte' => 0.0000000001,
        'Megabyte' => 0.00000001,
       
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
