<?php

$x = 10;

function checkScope(): int
{
    // return ++$x;
    return 0;
}

print checkScope();
print $x;
