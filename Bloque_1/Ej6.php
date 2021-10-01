<html>
<body>
<?php
class Acompañado {
    public $potencia;
    public $cantidad;
    public $powpow;
    public function __construct($potencia,$cantidad) {
        $this->potencia = $potencia;
        $this->cantidad = $cantidad;
    }

    public function potencias() {
        $i = 1;
        do {
            $powpow = pow($i,$this->potencia);
            echo nl2br($i . "-" . $powpow . "\n");
            $i++;
        }while (pow($i,$this->potencia)<$this->cantidad);
    }
}
$a1 = new Acompañado(3,100);
$a1->potencias();

?>
</body>
</html>