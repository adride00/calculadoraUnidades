<?php

class Moneda extends UnitConverter {
  private $tabla = [
    'Dolares' => [
      'Euros' => 0.93,
      'Pesos Mexicanos' => 17.63,
      'Yen' => 140.59,
      'Won' => 1323.43
    ],

    'Euros' => [
      'Dolares' => 1.97,
      'Pesos Mexicanos' => 18.91,
      'Yen' => 150.75,
      'Won' => 1419.34
    ],

    'Pesos Mexicanos' => [
      'Dolares' => 0.057,
      'Euros' => 0.053,
      'Yen' => 7.98,
      'Won' => 75.07
    ],

    'Yen' => [
      'Dolares' => 0.0071,
      'Euros' => 0.0066,
      'Pesos Mexicanos' => 0.13,
      'Won' => 9.41
    ],

    'Won' => [
      'Dolares' => 0.00076,
      'Euros' => 0.00070,
      'Pesos Mexicanos' => 0.013,
      'Yen' => 0.11
    ]
  ];


  public function __construct($value, $fromUnit, $toUnit, $tipoUnidades) {
    parent::__construct($value, $fromUnit, $toUnit, $tipoUnidades);
  }

  public function convert() {
    if (isset($this->tabla[$this->fromUnit][$this->toUnit])) {
      $conversion = $this->tabla[$this->fromUnit][$this->toUnit];
      $this->result = $this->value * floatval($conversion);
    }
  }

  public function getConvertedValue() {
    return $this->result;
  }
}

?>
