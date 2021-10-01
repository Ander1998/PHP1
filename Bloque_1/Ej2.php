<html>
<body>
<?php
$num1=4;
$num2=2;
$num3=5;

if($num1>$num2 && $num1>$num3) {
    echo "El número más grande es " . $num1;
} else if($num2>$num1 && $num2>$num3) {
    echo "El número más grande es " . $num2;
} else if($num3>$num1 && $num3>$num2) {
    echo "El número más grande es " . $num3;
}
    
?>
</body>
</html>