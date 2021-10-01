<html>
<body>
<?php
class Acompañado {
    public $edad;
    public $altura;
    public $acompanado;
    public function __construct($edad,$altura,$acompanado) {
        $this->edad = $edad;
        $this->altura = $altura;
        $this->acompanado = $acompanado;
    }

    public function minimo() {
        if ($this->edad>10) {
            return "Puede subir viejo";
        } else if ($this->altura>120) {
            return "Puede subir alto";
        } else if ($this->edad>6 && $this->acompanado==true) {
            return "Puedes subir niño acompañado";
        } else {
            return "que no puedes coño";
        }
    }
    
    public function printear() {
        echo $this->minimo();
    }
}
$a1 = new Acompañado(7,110,1);
$a1->printear();

?>
</body>
</html>