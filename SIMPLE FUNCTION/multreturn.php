<?php
function calculate($x,$y){
    $sum=$x+$y;
    $diff=$x-$y;
    $prod=$x*$y;
    return[$sum,$diff,$prod];
}
list($s,$f,$r)=calculate(10,5);
echo "Sum :- $s, <br>  diff :- $f, <br> prod :- $r";


?>