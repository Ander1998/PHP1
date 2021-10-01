<html>
    <body>
    <?php
    class Comision{
        public $ventas;
        public $total;
        public $porcentaje;
        public function __construct($ventas){
            $this->ventas = $ventas;
        }

        public function comision(){
            if($this->ventas<=10000) {
                $porcentaje = $this->ventas*5/100;
                $total = $this->ventas + $porcentaje;
                echo $total;
            }  else if($this->ventas<=20000 && $this->ventas>10000) {
                $porcentaje = $this->ventas*8/100;
                $total = $this->ventas + $porcentaje;
                echo $total;
            } else if($this->ventas<=40000 && $this->ventas>20000) {
                $porcentaje = $this->ventas*10/100;
                $total = $this->ventas + $porcentaje;
                echo $total;
            } else if($this->ventas>40000) {
                $porcentaje = $this->ventas*13/100;
                $total = $this->ventas + $porcentaje;
                echo $total;
            }
        }
    }
    $p1 = new Comision(15000);
    $p1->comision();
?>
</body>
</html>