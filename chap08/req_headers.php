<?php
require_once '../Encode.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ヘッダー情報</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>

<body>
    <table class="table">
        <?php
        foreach ($_SERVER as $key => $value) {
            if (str_starts_with($key, 'HTTP_')) {
        ?>
                <tr valign="top">
                    <th><?= e($key) ?></th>
                    <td><?= e($value) ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>