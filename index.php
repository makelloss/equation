<?php
$a = -5;
$b = 4;
$c = 1;
$d = $b*$b-4*$a*$c;
echo "D= $d";
if ($d <0 ) {
    echo "<span style = \" color: red;\">Коренів немає</span>";
} elseif ($d == 0) {
    $x = $b*$b/2*$a;
    echo "<span style = \" color: green;\">x = $x</span>";
} 
elseif ($a == 0) {
    echo "<span style = \" color: red;\">На ноль делить нельзя</span>";
}else {
    $x1 = -$b+sqrt($d)/2*$a;
    $x2 = -$b-sqrt($d)/2*$a; 
    echo "<span style = \" color: green;\">корни уравнение = $x1, $x2!</span>";
}
?>
