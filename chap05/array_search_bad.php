<?php
$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];

if (!array_search('PHP', $data)) {
    print '見つかりませんでした。';
}

if (!in_array('PHP', $data)) {
    print '見つかりませんでした。';
}
