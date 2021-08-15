<?php
require_once 'TriangleFigurePre.php';

$tri = new TriangleFigure();
$tri->setBase(-10);
$tri->setHeight(-10);

print "三角形の面積：{$tri->getArea()}";
