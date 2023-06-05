<?php

class Peso extends UnitConverter {

    private $tabla = [

      'Libras' => [
        'Gramos' => 453.592,
        'Kilogramos' => 0.453592,
        'Onzas' => 16,
        'Miligramos' => 453592
      ],
      'Kilogramos' => [
        'Libras' => 2.20462,
        'Gramos' => 1000,
        'Onzas' => 35.274,
        'Miligramos' => 1000000
      ],
      'Gramos' => [
        'Libras' => 0.00220462,
        'Kilogramos' => 0.001,
        'Onzas' => 0.035274,
        'Miligramos' => 1000
      ],
      'Onzas' => [
        'Libras' => 0.0625,
        'Kilogramos' => 0.0283495,
        'Gramos' => 28.3495,
        'Miligramos' => 28349.5
      ],
      'Miligramos' => [
        'Libras' => 0.00000220462,
        'Kilogramos' => 0.000001,
        'Gramos' => 0.001,
        'Onzas' => 0.00000220462
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