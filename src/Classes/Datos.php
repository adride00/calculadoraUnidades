<?

class Datos {
    public $value;
    public $fromUnit;
    public $toUnit;
    public $result;

    public function __construct($value, $fromUnit, $toUnit) {
        $this->value = $value;
        $this->fromUnit = $fromUnit;
        $this->toUnit = $toUnit;
    }

    public function convertir() {
        $this->result = $this->value * 2;
    }
}

?>