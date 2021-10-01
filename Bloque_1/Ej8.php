<html>
    <body>
    <?php
    class Base{
        public $base;
        public $i;
        public $estrellitas;
        public $espacios;
        public function __construct($base){
            $this->base = $base;
        }

        public function arbolito(){
            $i = 1;
            do {
                if($i%2!=0) {
                    $espacios=$this->base-$i;
                    for ($espacios;$espacios>0;$espacios--) {
                        echo '&nbsp';
                    }
                    for($estrellitas=0;$estrellitas<$i;$estrellitas++) {    
                        echo "*";
                    }
                    echo nl2br("\n");
                }
                $i++;
            } while ($i<=$this->base);        
        }
    }
    $p1 = new Base(49);
    $p1->arbolito();
?>
</body>
</html>