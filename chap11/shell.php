<?php
$result = shell_exec("dir {$_GET['param']}");
print mb_convert_encoding($result, 'UTF-8', 'SJIS');