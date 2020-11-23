<?php 

Class Calculadora {
	private $a;
	private $b;

	public function __Construct ($a,$b) {
		$this->a = $a;
		$this->b = $b;
	}

	public function Sumar() {
        echo $this->a . " + " . $this->b . " = ";
        echo $total = $this->a + $this->b;
    }
 
    public function Restar() {
        echo $this->a . " - " . $this->b . " = ";
        echo $total = $this->a - $this->b;
    }
 
    public function Multiplicar() {
        echo $this->a . " x " . $this->b . " = ";
        echo $total = $this->a * $this->b;
    }
 
    public function Dividir() {
        if ($this->b == 0) {
            echo 'No se puede dividir entre cero';
        } else {
            echo $this->a . " / " . $this->b . " = ";
            echo $total = $this->a / $this->b;
        }
    }
}

$mycalc = new Calculadora(12,2);

echo $mycalc->Sumar().'<br>';
echo $mycalc->Restar().'<br>';
echo $mycalc->Multiplicar().'<br>';
echo $mycalc->Dividir().'<br>';

 ?>