<?php
require '../../vendor/autoload.php';

$cli = new GuzzleHttp\Client([
    'base_uri' => 'https://wings.msn.to',
]);
$res = $cli->get('/tmp/books.json');
$obj = json_decode($res->getBody());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guzzle</title>
</head>

<body>
    <ul>
        <?php
        foreach ($obj->books as $b) {
            print "<li>{$b->title}({$b->published}・{$b->price}円)</li>";
        }
        ?>
    </ul>
</body>

</html>