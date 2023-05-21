<?php 
class MassConverter extends UnitConverter {
  const KILOGRAM_TO_POUND = 2.20462;
  const KILOGRAM_TO_OUNCE = 35.27396;
  const KILOGRAM_TO_GRAM = 1000;

  public function convertToPound() {
      $this->toValue = $this->fromValue * self::KILOGRAM_TO_POUND;
  }

  public function convertToOunce() {
      $this->toValue = $this->fromValue * self::KILOGRAM_TO_OUNCE;
  }

  public function convertToGram() {
      $this->toValue = $this->fromValue * self::KILOGRAM_TO_GRAM;
  }
}