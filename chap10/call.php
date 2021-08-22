<?php
require_once 'MyMail.php';

$m = new MyMail();
$m->From('admin@exmaple.com');
print $m->From();
