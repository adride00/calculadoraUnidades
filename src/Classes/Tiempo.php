<?php

class Tiempo extends UnitConverter {
  
  private $tabla = [
    'Segundos' => [
      'Minutos' => 'dividir:60',
      'Horas' => 'dividir:3600',
      'Dias' => 'dividir:86400',
      'Semanas' => 'dividir:604800'
    ],
    'Minutos' => [
      'Segundos' => 'multiplicar:60',
      'Horas' => 'dividir:60',
      'Dias' => 'dividir:1440',
      'Semanas' => 'dividir:10080'
    ],
    'Horas' => [
      'Segundos' => 'multiplicar:3600',
      'Minutos' => 'multiplicar:60',
      'Dias' => 'dividir:24',
      'Semanas' => 'dividir:168'
    ],
    'Dias' => [
      'Segundos' => 'multiplicar:86400',
      'Minutos' => 'multiplicar:1440',
      'Horas' => 'multiplicar:24',
      'Semanas' => 'dividir:7'
    ],
    'Semanas' => [
      'Segundos' => 'multiplicar:604800',
      'Minutos' => 'multiplicar:10080',
      'Horas' => 'multiplicar:168',
      'Dias' => 'multiplicar:7'
    ]
  ];
  
  
  
    public function __construct($value, $fromUnit, $toUnit, $tipoUnidades) {
      parent::__construct($value, $fromUnit, $toUnit, $tipoUnidades);
    }
  
    public function convert() {
      if (isset($this->tabla[$this->fromUnit][$this->toUnit])) {
          $conversion = $this->tabla[$this->fromUnit][$this->toUnit];
          if (is_numeric($conversion)) {
              $this->result = $this->value * $conversion;
          } else {
              $operation = explode(':', $conversion);
              $operator = $operation[0];
              $value = $operation[1];
              if ($operator === 'multiplicar') {
                  $this->result = $this->value * $value;
              } elseif ($operator === 'dividir') {
                  $this->result = $this->value / $value;
              }
          }
      }
  }
  

    public function getConvertedValue() {
      return $this->result;
    }
    
  }

?>