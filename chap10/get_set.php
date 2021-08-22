<?php
require_once 'MyMail.php';

$m = new MyMail();
$m->to = 'shuchan.galaxy@gmail.com';
$m->subject = 'テストメール';
$m->message = 'こんにちは、MyMailクラスです。';

$m->From = 'admin@example.com';
$m->X_Mailer = 'MyMail 1.0';
$m->X_Priority = '1';
$m->X_MSMail_Priority = 'High';
$m->send();
