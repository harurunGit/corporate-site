<?php
    // 値の受け取り
    $name = isset($_POST['name'])? htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8'):'';
    $email = isset($_POST['email'])? htmlspecialchars($_POST['email'], ENT_QUOTES, 'utf-8'):'';
    $text = isset($_POST['text'])? htmlspecialchars($_POST['text'], ENT_QUOTES, 'utf-8'):'';
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>確認画面｜SQUARE, inc.</title>

        <link rel="icon" href="favicon.ico">

        <!-- css -->
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="responsive.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-logo">
                    <h1><a href="index.html"><img src="img/square_logo.png" id="logo"></a></h1>
                </div>

                <!-- ハンバーガーメニューボタン -->
                <div class="toggle">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- スマホ用メニュー -->
                <nav class="sp-menu menu">
                    <ul>
                        <li><a href="index.html#service">サービス</a></li>
                        <li><a href="index.html#news">お知らせ</a></li>
                        <li><a href="index.html#about">会社概要</a></li>
                        <li><a href="index.html#contact">お問合せ</a></li>
                    </ul>
                </nav>
                <!-- PC/タブレットメニュー -->
                <nav class="pc-menu menu-left menu">
                    <ul>
                        <li><a href="index.html#service">サービス</a></li>
                        <li><a href="index.html#news">お知らせ</a></li>
                        <li><a href="index.html#about">会社概要</a></li>
                        <li><a href="index.html#contact">お問合せ</a></li>
                    </ul>
                </nav>
            </div>
        </header> 
        <main>
            <!-- contact conf -->
            <div class="wrapper last-wrapper">
                <div class="container">
                    <div class="wrapper-title">
                        <h3>CONFIRM</h3>
                        <p>お問い合わせ内容確認</p>
                    </div>
                    <form class="conf-form">
                        <div class="form-group">
                            <p>お名前 *</p>
                            <p><?php echo $name; ?></p>
                            <?php if($name==''):?>
                                <p class="error">名前が入力されていません</p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <p>Email *</p>
                            <p><?php echo $email; ?></p>
                            <?php if($email==''):?>
                                <p class="error">メールアドレスが入力されていません</p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <p>お問合せ内容 *</p>
                            <p><?php echo $text; ?></p>
                            <?php if($text==''):?>
                                <p class="error">お問い合わせ内容が入力されていません</p>
                            <?php endif; ?>
                        </div>

                        <?php if($name!=''&&$email!=''&&$text!=''): ?>
                            <p>この内容で送信してよろしいですか？</p>
                            <button type="submit" class="btn btn-submit">送信する</button>
                        <?php else: ?>
                            <button class="btn btn-return">戻る</button>
                        <?php endif;?>

                    </form>                 
                </div>
            </div>
            <!-- end contact conf -->
       </main>
        <footer>
            <div class="container">
                <p>Copyright @ 2018 SQUARE, inc.</p>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(function(){
                // ハンバーガーメニューの動作
                $('.toggle').click(function(){
                            $("header").toggleClass('open');
                    $(".sp-menu").slideToggle(500);
                });    
            });        
        </script>
    </body>
</html>