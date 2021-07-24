<?php
$str = 'ただいまWINGSプロジェクトメンバー募集中！';
preg_match('/[\p{Hiragana}]+/u', $str, $data);
preg_match('/[\p{Katakana}―]+/u', $str, $data2);
preg_match('/[\p{Han}]+/u', $str, $data3);

print $data[0];
print $data2[0];
print $data3[0];
