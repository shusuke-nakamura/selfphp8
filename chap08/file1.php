<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アップロード</title>
</head>

<body>
    <form action="file2.php" method="post" enctype="multipart/form-data">
        <label for="upfile">ファイルのパス：</label>
        <input type="hidden" name="max_file_size" value="1000000" />
        <input type="file" name="upfile" id="upfile" size="40" />
        <input type="submit" value="アップロード" />
    </form>
</body>

</html>