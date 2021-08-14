<?php
require_once '../DbManager.php';
require_once '../Encode.php';

try {
    $db = getDb();
    $stt = $db->query("SELECT * FROM book ORDER BY published DESC");
    $cnt = 0;
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="bindParam_process.php" method="post">
            <input type="submit" value="更新" />
            <table class="table">
                <thead>
                    <tr>
                        <th>ISBNコード</th>
                        <th>書名</th>
                        <th>価格</th>
                        <th>出版社</th>
                        <th>刊行日</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                        $cnt++;
                    ?>
                        <tr>
                            <td>
                                <?= e($row['isbn']) ?>
                                <input type="hidden" name="isbn<?= e($cnt) ?>" value="<?= e($row['isbn']) ?>">
                            </td>
                            <td>
                                <input type="text" name="title<?= e($cnt) ?>" id="title<?= e($cnt) ?>" value="<?= e($row['title']) ?>" size="45" />
                            </td>
                            <td>
                                <input type="text" name="price<?= e($cnt) ?>" id="price<?= e($cnt) ?>" value="<?= e($row['price']) ?>" size="5" />
                            </td>
                            <td>
                                <input type="text" name="publish<?= e($cnt) ?>" id="publish<?= e($cnt) ?>" value="<?= e($row['publish']) ?>" size="12" />
                            </td>
                            <td>
                                <input type="text" name="published<?= e($cnt) ?>" id="published<?= e($cnt) ?>" value="<?= e($row['published']) ?>" size="12" />
                            </td>
                        </tr>
                <?php
                    }
                } catch (PDOException $e) {
                    die("エラーメッセージ：{$e->getMessage()}");
                }
                ?>
                </tbody>
            </table>
            <input type="hidden" name="cnt" value="<?= e($cnt) ?>" />
        </form>
    </body>

    </html>