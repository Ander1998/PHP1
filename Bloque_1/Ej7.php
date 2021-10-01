<html>
    <body>
    <?php
    class Entero{
        public $num;
        public $result = 0;

        public function __construct($num){
            $this->num = $num;
        }

        public function averiguar(){
            $result = $this->num;
            do{
                if($result % 2 == 0){
                    $result = ($result / 2);
                    echo nl2br($result . " ");
                }
                else if($result % 2 != 0){
                    $result = ($result * 3) + 1;
                    echo nl2br($result . " ");
                }
            }while($result > 1);
        }
    }
    $p1 = new Entero(999);
    $p1->averiguar();
?>
</body>
</html>