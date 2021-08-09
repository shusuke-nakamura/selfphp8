<?php
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query('SELECT count(*) FROM book');
print "件数：{$stt->fetchColumn()}件";
