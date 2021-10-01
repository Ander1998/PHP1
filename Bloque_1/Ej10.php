<html>
    <body>
    <?php
    class Tienda{
        public $cont;
        
        public function __construct($total_compra, $tipo_compra){
            $this->total_compra = $total_compra;
            $this->tipo_compra = $tipo_compra;
        }

        public function comision(){
           if($this->total_compra<19) {
               if($this->tipo_compra=="mascota") {
                   echo "No se puede realizar el envío";
               } else if($this->tipo_compra=="ropa") {
                    echo "Los gastos de envio son 9 euros";
               }
           } else if($this->total_compra>=19 && $this->total_compra<=40) {
               echo "Los gastos de envio son 9 euros";
           } else if($this->total_compra>40) {
               echo "Los portes de envio son gratis";
           }

           if($this->tipo_compra=="mascota") {
               $this->total_compra += ($this->total_compra*10/100);
               echo nl2br("\n") . "El total es " . $this->total_compra;
           } else if($this->tipo_compra=="ropa") {
                $this->total_compra += ($this->total_compra*21/100);
                echo nl2br("\n") . "El total es " . $this->total_compra;
           }
        }
    }
    $p1 = new Tienda(25,"ropa");
    $p1->comision();
?>
</body>
</html>