<?php

class Moneda extends UnitConverter {
  private $tabla = [
    'Dólares' => [
      'Euros' => 0.93,
      'Pesos Mexicanos' => 17.63,
      'Yenes' => 140.59,
      'Wones' => 1323.43
    ],

    'Euros' => [
      'Dólares' => 1.97,
      'Pesos Mexicanos' => 18.91,
      'Yenes' => 150.75,
      'Wones' => 1419.34
    ],

    'Pesos Mexicanos' => [
      'Dólares' => 0.057,
      'Euros' => 0.053,
      'Yenes' => 7.98,
      'Wones' => 75.07
    ],

    'Yenes' => [
      'Dólares' => 0.0071,
      'Euros' => 0.0066,
      'Pesos Mexicanos' => 0.13,
      'Wones' => 9.41
    ],

    'Wones' => [
      'Dólares' => 0.00076,
      'Euros' => 0.00070,
      'Pesos Mexicanos' => 0.013,
      'Yenes' => 0.11
    ]
  ];

  private $result;

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
