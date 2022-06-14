<?php
$referer = $_SERVER['HTTP_REFERER']; //アクセス元ページ（ユーザー側）
$url = "check.php"; //運営が指定しているアクセス元ページ
if (!strstr($referer, $url)) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
    <link rel="stylesheet" href="css/thanks/style.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="thanks">
                <h1>お問い合わせ完了</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="thanks_box">
            <div class="thanks_h2">
                <h2>お問い合わせの送信が完了しました。</h2>
            </div>

            <div class="thanks_comment">
                <p>お問い合わせありがとうございます。</p>
                <br>
                <p>内容を確認後、返信させていただきます。</p>
            </div>
            <div class="back">
                <button type="button" onclick="history.back()">戻る</button>
            </div>
        </div>
        </div>
    </main>
</body>

</html>