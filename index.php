<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyoken's PORTFOLIO</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="name">
            <p>Toyoken's PORTFOLIO</p>
        </div>

        <div class="list">
            <ul class="nav">
                <li>HOME</li>
                <li>PROFILE</li>
                <li>SERVICE</li>
                <li>WORKS</li>
                <li>CONTACT</li>
            </ul>
        </div>
    </header>

    <div class="gazou">
        <div class="img_wrap">
            <img src="image/kousui.jpg" alt="プロフィール画像">
        </div>
        <div class="kousui">
            <div class="abc">
                <h2 class="kousui_comment">WELCOME</h2>
            </div>
            <div class="edf">
                <h2 class="kousui_name">Toyoken's</h2>
                <h2 class="kousui_name">PORTFOLIO</h2>
            </div>
        </div>
    </div>


    <div class="concept">
        <p>あなたの「つくりたい」を「かたち」に</p>
    </div>

    <div class="profile">
        <p>PROFILE</p>
    </div>

    <div class="icon_comment">
        <div class="icon">
            <img src="image/icon.png" alt="アイコン画像">
        </div>

        <div class="icon_text_werp">
            <div class="icon_text">
                <span class="profile_text">kenta</span>
                <br>
                <p>1986年6月30日生まれ
                    <br>
                <p>webクリエイター</p>
            </div>

            <div class="profile_message">
                <p>LP制作、WordPressでのブログ運用、LP・コーポレートサイトなどの デザイン、Webサイト構築、運用〜アフターケアまで、なんでも承ります。</p>
            </div>
        </div>
    </div>

    <div class="service">
        <p>SERVICE</p>
    </div>

    <div class="service_list">
        <div class="service_werp">
            <div class="service_menu">
                <p>ディレクション</p>
            </div>
            <div class="service_img">
                <img src="image/pen.png" alt="ペンの画像">
            </div>
            <div class="service_comment">
                <p>お客様のご要望を伺います。お店のHPを作りたい、ブログを運営したい、オンラインショップをつくりたいなど、最初は抽象的な意見でも大丈夫です。話し合いを重ねながら、構想を形にしていきます。</p>
            </div>
        </div>

        <div class="service_werp">
            <div class="service_menu">
                <p>デザイン</p>
            </div>
            <div class="service_img">
                <img src="image/palette.png" alt="パレットの画像">
            </div>
            <div class="service_comment">
                <p>メインとする商品やターゲットの性別・年齢層、お好みのカラーや大まかなデザイン案などをお伝えいただければ、最適なデザインを提供致します。もちろん、お客様に納得していただくまで修正を承ります。</p>
            </div>
        </div>

        <div class="service_werp">
            <div class="service_menu">
                <p>コーディング</p>
            </div>
            <div class="service_img">
                <img src="image/pc.png" alt="パソコンの画像">
            </div>
            <div class="service_comment">
                <p>デザインに忠実なコーディングはもちろん、ユーザーファーストの見やすいアニメーションを実装致します。またタブレットやスマートフォンの画面サイズごとにデザインを変え、どのデバイスからでも見やすいwebサイトをつくります。
                </p>
            </div>
        </div>
    </div>

    <div class="work">
        <p>WORK</p>
    </div>

    <div class="work_list">
        <div class="work_werp">
            <div class="work_menu">
                <p>LPサイト</p>
            </div>
            <div class="work_img">
                <img src="image/lpsite1.png" alt="LPサイト1画像">
            </div>
            <div class="work_comment">
                <p>月詠歌(copy)</p>
                <p>制作期間:7日</p>
            </div>
        </div>

        <div class="work_werp">
            <div class="work_menu">
                <p>LPサイト</p>
            </div>
            <div class="work_img">
                <img src="image/lpsite2.png" alt="LPサイト2画像">
            </div>
            <div class="work_comment">
                <p>HAKUICHI(copy)</p>
                <p>制作期間:4日</p>
            </div>
        </div>

        <div class="work_werp">
            <div class="work_menu">
                <p>ポートフォリオ</p>
            </div>
            <div class="work_img">
                <img src="image/port.png" alt="ポートフォリオ画像">
            </div>
            <div class="work_comment">
                <p>ISARA(copy)</p>
                <p>制作期間:7日</p>
            </div>
        </div>

        <div class="work_werp">
            <div class="work_menu">
                <p>個人ブログ</p>
            </div>
            <div class="work_img">
                <img src="image/blog.png" alt="ブログ画像">
            </div>
            <div class="work_comment">
                <p>NANA (copy)</p>
                <p>制作期間:7日</p>
            </div>
        </div>
    </div>

    <div class="contact">
        <p>CONTACT</p>
       </div>
 
       <form action="" method="post">
           <div class="contact_wrap">
               <label for="name">名前</label><br>
               <input type="text" class="txt" name="name" placeholder="Your Name">
           </div>
 
           <div class="contact_wrap">
               <label for="email">メールアドレス</label><br>
               <input type="text" class="txt" name="email" placeholder="Your Email">
           </div>
 
           <div class="contact_wrap">
               <label for="contents">お問い合わせ内容</label><br>
               <select id="contents" name="contents" class="txt">
                   <option value="">Please Select...</option>
                   <option value="web制作依頼">・web制作依頼</option>
                   <option value="wordplessでのブログ開設">・wordplessでのブログ開設</option>
                   <option value="wordplessテーマ制作">・wordplessテーマ制作</option>
                   <option value="コーポレートサイト制作">・コーポレートサイト制作</option>
                   <option value="お問い合わせ">・お問い合わせ</option>
                   <option value="その他">・その他</option>
               </select>
           </div>
 
           <div class="contact_wrap">
               <label for="message">お問い合わせ</label><br>
               <textarea id="message" name="message" placeholder="Your Message..."></textarea>
           </div>

            <div class="soushin">
            <input type="submit" value="送信">
            </div>
    
            <hr>
    
            <footer>
                <p>&copy; 2022-toyoken</p>
            </footer>
       </form>

       
</body>
</html>