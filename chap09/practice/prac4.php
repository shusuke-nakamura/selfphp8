<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の検索</title>
</head>

<body>
    <form action="prac4.php" method="post">
        <label for="title">書名：</label>
        <input type="text" name="title" id="title" size="20" />
        <input type="submit" value="検索" />
    </form>
    <?php
    if (isset($_POST['title'])) {
        require_once '../../DbManager.php';
        require_once '../../Encode.php';
        try {
            $db = getDb();
            $stt = $db->prepare('SELECT * FROM book WHERE title LIKE ?');
            $stt->bindValue(1, '%' . $_POST['title'] . '%');
            $stt->execute();
            print '<ul>';
            while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
    ?>
                <li><?= e($row['title']) ?>(<?= e($row['price']) ?>円)</li>
    <?php
            }
            print '</ul>';
        } catch (PDOException $e) {
            die("エラーメッセージ：{$e->getMessage()}");
        }
    }
    ?>
</body>

</html>