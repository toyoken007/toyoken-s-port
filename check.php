<?php
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: index.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'toyoken007@gmail.com';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
名前：{$post['name']}
メールアドレス：{$post['email']}
内容：
{$post['contents']}
{$post['message']}
EOT;
    mb_send_mail($to, $subject, $body, "From: {$post}");

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: thanks.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="css/cheak/style.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="kakunin">
                <h1>確認画面</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="content">
            <div class="content_h2">
                <h2>記入した内容を確認して、「送信ボタン」を入力してください。</h2>
            </div>

            <div class="form_kakunin">
                <form action="" method="post">
                    <input type="hidden" name="action" value="submit">
                    <table>
                        <tr>
                            <th>
                                <p>名前 : </p>
                            </th>
                            <td><?php echo htmlspecialchars($post['name']); ?></td>
                        </tr>
                        <tr>
                            <th>
                                <p>メールアドレス : </p>
                            </th>
                            <td><?php echo htmlspecialchars($post['email']); ?></td>
                        </tr>
                        <tr>
                            <th>
                                <p>お問い合わせ内容 : </p>
                            </th>
                            <td><?php echo htmlspecialchars($post['contents']); ?></td>
                        </tr>
                        <tr>
                            <th>
                                <p>お問い合わせ : </p>
                            </th>
                            <td><?php echo htmlspecialchars($post['message']); ?></td>
                        </tr>
                    </table>
                    <div class="botan">
                        <div class="back">
                            <button type="button" onclick="history.back()">戻る</button>
                        </div>
                        <div class="next">
                            <input type="submit" vuleu="送信">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>