<?php
$str = 'にわにはにわにわとりがいる';

print mb_strpos($str, 'にわ');
print mb_strpos($str, 'にわ', 2);
print mb_strpos($str, 'にわ', -10);
print mb_strpos($str, 'かに');
print mb_strrpos($str, 'にわ');
print mb_strrpos($str, 'にわ', -8);
