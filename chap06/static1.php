<?php

function checkStatic(): int
{
    $x = 0;
    return ++$x;
}

print checkStatic();
print checkStatic();
