<!-- header.php ここから -->
<!DOCTYPE html>

<head>
  <title>samurai university</title>
  <meta charset="utf-8" />
  <!-- Internet Ezplorer（Edge,レガシーEdge)に対して互換性モードにする -->　
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- 概要記述タグ -->
  <meta name="description" content="samurai university" />
  <!-- 表示領域、ビューポートの幅は端末やブラウザアプリによって異なる。デフォルトのズーム倍率は１ -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- bootstrap.min.cssのテンプレートを呼び出す(wordpressでテーマディレクトリを呼び出す関数、themesの中) -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/bootstrap.min.css" />
  <!-- font-awesome.min.cssのテンプレートを呼び出す(wordpressでテーマディレクトリを呼び出す関数) -->
  <link href="<?php echo get_template_directory_uri(); ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- main.cssのテンプレートを呼び出す(wordpressでテーマディレクトリを呼び出す関数) -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/main_styles.css" />
  <?php wp_head(); ?> <!-- WordPressのヘッダーを読み込む -->
</head>

<body>
  <div class="super_container">
    <!-- ヘッダーここから -->
    <header class="header">
      <div class="header_container">
        <div class="">
          <nav class="navbar navbar-expand-lg">
            <div class="logo_container">
              <div class="logo_text">
                <!-- WordPressのURLを取得する関数を使用して、ホームページのURLを取得 -->
                <!-- esc_url()関数は、URLをエスケープして安全に出力するための関数、不正なコードの挿入などセキュリティリスクを防ぐ -->
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                  <!-- 大学のロゴ　-->
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" />
                  <!-- インライン要素としてグループ化する　-->
                  <span>Samurai University</span>
                </a>
              </div>
            </div>
            <!-- 折り畳み可能な要素の追加。Bootstrapのナビゲーションバーを使用して、レスポンシブデザインを実現するために必要な要素 -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars toggle-menu" aria-hidden="true"></i>
            </button>
            <!-- ulタグの中に、ナビゲーションバーのメニューを作成する -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav flex-row ml-md-auto d-md-flex main_nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url(); ?>/category/news">
                    NEWS
                    <p>ニュース</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url(); ?>/category/event">
                    EVENT
                    <p>イベント</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nav-link" href="<?php echo home_url(); ?>/course">
                    COURSES
                    <p>コース</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nav-link" href="<?php echo home_url(); ?>/about_us">
                    ABOUT US
                    <p>侍大学について</p>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- ヘッダー ここまで -->
    <!-- header.php ここまで -->