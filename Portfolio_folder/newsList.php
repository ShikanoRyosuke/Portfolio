<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>News List - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" href="/img/favicon.png" />
    <link rel="apple-touch-icon" href="/img/favicon.png" />

    <!-- ogp -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Portfolio - News List" />
    <meta name="description" content="Portfolio用ホームページ" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="#" />
    <meta property="og:image" content="/img/favicon.png">
    <meta property="og:locale" content="ja_JP" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="#" />

    <!-- cssの読み込み -->
    <link rel="stylesheet" href="/css/riset.css" />
    <link rel="stylesheet" href="/css/all_loading.css">
    <link rel="stylesheet" href="/css/all_header_scroll.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/newsList.css">
    <link rel="stylesheet" href="/css/all_fadein_text.css" />
    <link rel="stylesheet" href="/css/all_mobileHeader.css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&family=Slackside+One&family=Tsukimi+Rounded:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ローディングアニメーション -->
    <div class="loading">
        <div class="loading-wrap">
            <img src="/img/loding_img.gif">
        </div>
    </div>
    <?php include('./Template/header.php'); ?>
    <?php include('./Template/mobileHeader.php'); ?>
    <main>
        <div id="news"></div>
        <section id="news_area">
            <h1>
                <i class="fa-regular fa-newspaper"></i>
                News
            </h1>
            <nav>
                <ul>
                    <li class="news_record_list">
                        <?php
                        include './newsList_data.php'; // ニュースデータを含むファイルを読み込む
                        foreach ($news_articles as $article) {
                            echo '<hr>';
                            echo '<article class="' . $article['articleName'] . '">';
                            echo '<div class="news_record">';
                            echo '<a href=' . $article['link'] . '>';
                            echo '<ul>';
                            echo '<li class="flex-container">';
                            echo '<div class="news_text-container">';
                            echo '<p class="news_created"> created.' . $article['created'] . '</p>';
                            echo '<h2 class="news_title">' . $article['title'] . '</h2>';
                            echo '<p class="news_location">' . $article['location'] . '</p>';
                            echo '<p class="news_schedule">' . $article['schedule'] . '</p>';
                            echo '</div>';
                            echo '<img class="news_img  " src="' . $article['image'] . '" alt="Article Image">';
                            echo '</li>';
                            echo '</ul>';
                            echo '</a>';
                            echo '</div>';
                            echo '</article>';
                        }
                        ?>
                    </li>
                </ul>
            </nav>
        <div class="news_area-padding"></div>
        </section>
    </main>
    <footer>
        <p id="copyright">&copy;2023 Sakamoto Mika inc. All Rights Reserved</p>
    </footer>

    <!-- jQueryの読み込み background_transition -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/a722c1cbb5.js" crossorigin="anonymous"></script>
    <!-- JavaScriptの読み込み -->
    <script src="/js/all_loading.js" type="text/javascript"></script>
    <script src="/js/all_header_scroll.js" type="text/javascript"></script>
</body>
</html>