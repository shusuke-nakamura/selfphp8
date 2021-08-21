<?php
function getTrapezoidArea(float $upper, float $lower, float $height): float
{
    assert($upper > 0 && $lower > 0 && $height > 0);
    return ($upper + $lower) * $height / 2;
}
