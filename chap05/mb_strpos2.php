<?php
$str = 'にわにはにわとりがいる';

if (mb_strpos($str, 'にわ') !== false) {
    print '文字列が見つかりました。';
}
