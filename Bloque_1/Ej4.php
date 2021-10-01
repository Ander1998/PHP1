<html>
<body>
<?php
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
// Driver Code
$original = "as luna ese anula";
$original =str_replace(' ', '', $original);
$original = strtolower($original);
if(Palindrome($original)){ 
    echo "Palindrome"; 
}
else { 
echo "Not a Palindrome"; 
}
?> 
</body>
</html>