<?php

class Datos extends UnitConverter {

  private $tabla = [
    'kilobytes' => [
      'Megabytes' => 0.001,
      'Gigabytes' => 0.00000001,
      'Terabyte' => 0.0000000001,
      'Bytes' => 1000,
    ],
    'Megabytes' => [
      'Kilobytes' => 1000,
      'Gigabytes' => 0.001,
      'Terabyte' => 0.00000001,
      'Bytes' => 1000000,
    ],
    'Gigabytes' => [
      'Kilobytes' => 0.00000001,
      'Megabytes' => 1000,
      'Terabyte' => 0.001,
      'Bytes' => 1000000000,
    ],
    'Terabyte' => [
      'Gigabytes' => 1000,
      'Kilobytes' => 0.0000000001,
      'Megabytes' => 0.00000001,
      'Bytes' => 1000000000000,
    ],
    'Bytes' => [
      'Kilobytes' => 0.001,
      'Megabytes' => 0.000001,
      'Gigabytes' => 0.000000001,
      'Terabyte' => 0.000000000001,
    ],
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