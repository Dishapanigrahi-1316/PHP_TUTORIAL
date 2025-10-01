<?php
// Function definition
function arithmeticOperations($a, $b) {
    print "Numbers: a = $a, b = $b <br>";

    print "Addition: " . ($a + $b) . "<br>";
    print "Subtraction: " . ($a - $b) . "<br>";
    print "Multiplication: " . ($a * $b) . "<br>";
    print "Division: " . ($a / $b) . "<br>";
    print "Modulus: " . ($a % $b) . "<br>";
    print "Exponentiation: " . ($a ** $b) . "<br>";
}

// Function call
arithmeticOperations(12, 5);

print "<hr>";

arithmeticOperations(8, 3);
?>
