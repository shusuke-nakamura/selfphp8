<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="SelfPHP"');
    print 'この画面へのアクセスは認められていません。';
    die();
} else {
    if ($_SERVER['PHP_AUTH_USER'] === 'admin_user' && $_SERVER['PHP_AUTH_PW'] === 'admin_pass') {
        print '正しく認証が行われました。';
    } else {
        print 'ユーザー名、またはパスワードが間違っています。';
    }
}
