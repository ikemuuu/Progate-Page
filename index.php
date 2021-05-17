<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progate</title>
    <link rel="icon" href="wanko.ico">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="https://prog-8.com/images/html/advanced/main_logo.png">
        </div>
        
        <div class="header-right">
          <a href="#lesson-wrapper">レッスン</a>
          <a href="#" class="signup-show">新規登録</a>
          <a href="#" class="login">ログイン</a>
        </div>
        <span class="menu-icon"><i class="fa fa-bars"></i></span>
      </div>
    </header>
    
    <!-- モーダル部分 -->
    <div class="signup-modal-wrapper" id="signup-modal">
      <div class="modal">
        <div>
          <i class="fa fa-2x fa-times close-modal"></i>
        </div>
        <div id="signup-form">
          <h2>Emailで新規登録</h2>
          <form method="POST" action="confirm.php">
            <input class="form-control" type="text" name="email" placeholder="メールアドレス">
            <input class="form-control" type="password" name="password" placeholder="パスワード">
            <input class="submit-btn" type="submit" value="新規登録">
          </form>
        </div>
      </div>
    </div>
    <div class="login-modal-wrapper" id="login-modal">
      <div class="modal">
        <div>
          <i class="fa fa-2x fa-times close-modal"></i>
        </div>
        <div id="login-form">
          <h2>Emailでログイン</h2>
          <form method="POST" action="login.php">
            <input class="form-control" type="text" placeholder="メールアドレス">
            <input class="form-control" type="password" placeholder="パスワード">
            <input class="submit-btn" type="submit" value="ログイン">
          </form>
        </div>
      </div>
    </div>
    <!-- モーダルここまで -->

    <div class="top-wrapper">
      <div class="container">
        <h1>LEARN TO CODE.</h1>
        <h1>LEARN TO BE CREATIVE.</h1>
        <p>Progateはオンラインプログラミング学習サービスです。</p>
        <p>初心者にもやさしいスライドとレッスンで、ウェブサービスを作りながらプログラミングを学んでいきましょう。</p>
        <div class="btn-wrapper">
          <a href="#" class="btn signup signup-show">新規登録はこちら</a>
          <p>or</p>
          <a href="#" class="btn facebook"><span class="fa fa-facebook"></span> Facebookで登録</a>
          <a href="#" class="btn twitter"><span class="fa fa-twitter"></span> Twitterで登録</a>
        </div>
      </div>
    </div>

    <div class="lesson-wrapper" id="lesson-wrapper">
      <div class="container">
        <div class="heading">
          <h2>Learn Where to Get Started!</h2>
        </div>
        <div class="lessons">
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/html.png">
              <p>HTML & CSS</p>
            </div>
            <p class="text-contents">ウェブページの作成に使用される言語です。HTMLとCSSを組み合わせることで、静的なページを作り上げることができます。</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/jQuery.png">
              <p>jQuery</p>
            </div>
            <p class="text-contents">素敵な動きを手軽に実装できるJavaScriptライブラリです。 アニメーション効果をつけたり、Ajax（エイジャックス）を使って外部ファイルを読み込んだりと色々なことができます。</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/ruby.png">
              <p>Ruby</p>
            </div>
            <p class="text-contents">オープンソースの動的なプログラミング言語で、 シンプルさと高い生産性を備えています。大きなWebアプリケーションから小さな日用ツールまで、さまざまなソフトウェアを作ることができます。</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="https://prog-8.com/images/html/advanced/php.png">
              <p>PHP</p>
            </div>
            <p class="text-contents">HTMLだけではページの内容を変えることはできません。PHPはHTMLにプログラムを埋め込み、それを可能にします。</p>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>

    <div class="faq-wrapper">
      <div class="container">
        <div class="heading">
          <h2>FAQ</h2>
        </div>
        <div class="faq">
          <ul id="faq-list">
            <li class="faq-list-item">
              <h3 class="question">Progateの公式キャラクターはなんですか？</h3>
              <span>+</span>
              <div class="answer">
                <p>にんじゃわんこといいます。忍者の格好をしたわんこです。ネコではありません。</p>
              </div>
            </li>
            <li class="faq-list-item">
              <h3 class="question">にんじゃわんこはオスですか？それともメスですか？</h3>
              <span>+</span>
              <div class="answer">
                <p>にんじゃわんこはオスです。</p>
              </div>
            </li>
            <li class="faq-list-item">
              <h3 class="question">にんじゃわんこは何歳ですか？</h3>
              <span>+</span>
              <div class="answer">
                <p>にんじゃわんこは14歳です。</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
          <h2>さぁ、あなたもProgateでプログラミングを学んでみませんか?</h2>
          <h3>Let's learn to code, learn to be creative!</h3>
        </div>
        <span class="btn message signup-show">さっそく開発する</span>
      </div>
    </div>
    <footer>
      <div class="container">
        <img src="https://prog-8.com/images/html/advanced/footer_logo.png">
        <p>Learn to code, learn to be creative.</p>
        <!-- pagetop -->
        <div class="pagetop" id="back_to_top">
          <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </div>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>