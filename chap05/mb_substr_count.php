<?php
$str = 'にわにはにわとりがいる';
print mb_substr_count($str, 'にわ');

$str = 'いちいちいちばにいち';
print mb_substr_count($str, 'いちいち');
