<?php
$today = '2021-05-04';
$result = preg_split('|[/.\-]|', $today, -1, PREG_SPLIT_DELIM_CAPTURE);
print_r($result);
