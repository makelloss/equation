<?php
$a = rand(-100, 100);
$b = rand(-100, 100);
$c = rand(-100, 100);
$d = $b*$b-4*$a*$c;
echo "D= $d";
$x1 = -$b+sqrt($d)/2*$a;
echo "x1=$x1";
$x2 = -$b-sqrt($d)/2*$a;
echo "x2=$x2";