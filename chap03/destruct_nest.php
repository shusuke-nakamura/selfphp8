<?php
$data = [1, 2, [31, 32, 33]];

[$a, $b, $c] = $data;
print_r($a);
print_r($b);
print_r($c);

[$x, $y, [$z1, $z2, $z3]] = $data;
print $x;
print $y;
print $z1;
print $z2;
print $z3;
