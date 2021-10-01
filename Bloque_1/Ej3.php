<html>
<body>
<?php

$edad = 20;
    if($edad>=0 && $edad<10)
    {
        echo "Se encuentra entre 0 y 10 años";
    } else if($edad>=10 && $edad<20) {
        echo "Se encuentra entre 10 y 20 años";
    } else if($edad>=20 && $edad<30) {
        echo "Se encuentra entre 20 y 30 años";
    } else if($edad>=30 && $edad<40) {
        echo "Se encuentra entre 30 y 40 años";
    } else if($edad>=40 && $edad<50) {
        echo "Se encuentra entre 40 y 50 años";
    } else if($edad>=50 && $edad<60) {
        echo "Se encuentra entre 50 y 60 años";
    } else if($edad>=60 && $edad<70) {
        echo "Se encuentra entre 60 y 70 años";
    } else if($edad>=70 && $edad<80) {
        echo "Se encuentra entre 70 y 80 años";
    } else if($edad>=80 && $edad<90) {
        echo "Se encuentra entre 80 y 90 años";
    } else if($edad>=90 && $edad<100) {
        echo "Se encuentra entre 90 y 100 años";
    }
    else {
        echo "Please, give a number between 1 and 100";
    }

?>
</body>
</html>