<?php
$drink = 'ビール';

switch ($drink) {
    case '日本酒':
    case 'ビール':
    case 'ワイン':
        print '醸造酒';
        break;
    case 'ブランデー':
    case 'ウィスキー':
        print '蒸留酒です。';
        break;
}
