<?php

$drink = 'ビール';
print match ($drink) {
    '日本酒', 'ビール', 'ワイン' => '醸造酒です。',
    'ブランデー', 'ウィスキー' => '蒸留酒です。'
};
