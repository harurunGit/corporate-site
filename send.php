<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>お問合せ内容送信｜SQUARE, inc.</title>

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
            <!-- contact send -->
            <div class="wrapper last-wrapper">
                <div class="container">
                    <div class="wrapper-title">
                        <h3>SEND</h3>
                        <p>お問い合わせ送信</p>
                    </div>
                    <div class="wrapper-body">
                        <div class="thanks">
                            <h4>お問合せありがとうございました。</h4>
                        </div>
                        <button type="button" class="btn btn-gray" onclick="location.href='./index.html'">トップページに戻る</button>
                    </div>
                </div>
            </div>
            <!-- end contact send -->
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