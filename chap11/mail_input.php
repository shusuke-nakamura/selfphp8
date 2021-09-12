<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メール送信</title>
</head>
<body>
    <form action="mail_send.php" method="post">
        <div>
            <label for="subject">件名：</label>
            <input type="text" name="subject" id="subject" size="20" maxlength="30" />
        </div>
        <div>
            <label for="from">差出人：</label>
            <textarea name="from" id="from" cols="30" rows="2"></textarea>
        </div>
        <div>
            <label for="body">本文：</label>
            <textarea name="body" id="body" cols="50" rows="5"></textarea>
        </div>
        <div>
            <input type="submit" value="送信" />
        </div>
    </form>
</body>
</html>