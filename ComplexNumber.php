<?php
class ComplexNumber {
    public $real;
    public $imaginary;

    function __construct($real, $imaginary) {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    function set_real($real) {
        $this->real = $real;
    }

    function set_imaginary($imaginary) {
        $this->imaginary = $imaginary;
    }

    function format() {
        $formated = "";
        if (is_numeric($this->real) && is_numeric($this->imaginary)) {
            if ($this->imaginary == 0) {
                $formated = $this->real;
            } else {
                $formated = $this->real.($this->imaginary > 0 ? " + " : " - ").abs($this->imaginary)."i";
            }
        }

        return $formated;
    }

    public function __toString() {
        return $this->format()."\n";
    }
}