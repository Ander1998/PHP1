<html>
<body>
<?php
$pisos=4;
$puertas=4;
$letras = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","u","v","w","x","y","z"];
for($i=0;$i<$pisos;$i++) {
    echo "<li>" . $i .  "</li>";
    for($x=0;$x<$puertas;$x++) {
        echo "<ul><li>" . $letras[$x] .  "</li></ul>";
    }
}
    
?>
</body>
</html>