<?php 
class LengthConverter extends UnitConverter {
  const METERS_TO_FEET = 3.28084;
  const METERS_TO_MILES = 0.000621371;
  const METERS_TO_KILOMETERS = 0.001;

  public function convertToFeet() {
      $this->toValue = $this->fromValue * self::METERS_TO_FEET;
  }

  public function convertToMiles() {
      $this->toValue = $this->fromValue * self::METERS_TO_MILES;
  }

  public function convertToKilometers() {
      $this->toValue = $this->fromValue * self::METERS_TO_KILOMETERS;
  }

  
}