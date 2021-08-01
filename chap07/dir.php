<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DirectoryIteratorクラス</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>

<body>
    <table class="table">
        <thead>
            <th>ファイル</th>
            <th>サイズ</th>
            <th>最終アクセス日</th>
            <th>最終更新日</th>
        </thead>
        <tbody>
            <?php
            $dir = new DirectoryIterator('./');
            foreach ($dir as $file) {
                if ($file->isFile()) {
            ?>
                    <tr>
                        <td><?= $file->getFilename() ?></td>
                        <td><?= $file->getSize() ?></td>
                        <td><?= date('Y/m/d H:i:s', $file->getATime()) ?></td>
                        <td><?= date('Y/m/d H:i:s', $file->getMTime()) ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>

</body>

</html>