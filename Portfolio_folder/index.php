<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TOP - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" href="/img/favicon.png" />
    <link rel="apple-touch-icon" href="/img/favicon.png" />

    <!-- ogp -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Portfolio - Top" />
    <meta name="description" content="Portfolio用ホームページ" />
    <meta property="og:url" content="#" />
    <meta property="og:site_name" content="#" />
    <meta property="og:image" content="/img/favicon.png">
    <meta property="og:locale" content="ja_JP" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="#" />

    <!-- cssの読み込み -->
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/all_loading.css" />
    <link rel="stylesheet" href="/css/top.css" />
    <link rel="stylesheet" href="/css/animation.css" />
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/all_mobileHeader.css">
</head>

<body>
    <!-- ローディングアニメーション -->
    <div class="loading">
        <div class="loading-wrap">
            <img src="/img/loding_img.gif">
        </div>
    </div>
    <?php include('./Template/mobileHeader.php'); ?>
    <main>
        <div id="top"></div>
        <section id="heroHeader">
            <p id="slideshow">
                <!-- <a href="/gallery.php"> -->
                <img src="/img/slide_image1.png" alt="slide_image1" class="active">
                <img src="/img/slide_image2.png" alt="slide_image2">
                <img src="/img/slide_image3.png" alt="slide_image3">
                <img src="/img/slide_image4.png" alt="slide_image4">
                <!-- </a> -->
            </p>
            <!-- 確認モーダルの表示 -->
            <div id="modal" class="modal">
                <div class="modal-content animation-blur_modal-content">
                    <p>Galleryページへ遷移します。<br>よろしいですか？</p>
                    <button id="yesBtn">はい</button>
                    <button id="noBtn">いいえ</button>
                </div>
            </div>
            <div class="top-list-aria">
                <div class="top-list">
                    <nav>
                        <ul>
                            <li class="news">
                                <h3 class="animation-blur delay-time01"><a class=" fadein_text1" href="#news">News</a></h3>
                            </li>
                            <li class="gallery">
                                <h3><a class="fadein_text1 animation-blur delay-time02" href="./gallery.php">Gallery</a></h3>
                            </li>
                            <li class="artist">
                                <h3 class="animation-blur delay-time03"><a class="fadein_text1" href="./artist.php">Artist</a></h4>
                            </li>
                            <li class="onlineShop">
                                <h3 class="animation-blur delay-time04"><a class="fadein_text1" href="#" target="_blank">Online&nbsp;Shop&nbsp;</a><i class="fa-solid fa-square-up-right" style="color: #7a7a7a;"></i></h3>
                            </li>
                            <li class="name_ja ">
                                <h1 class="animation-blur">XXX&nbsp;XXX</h1>
                            </li>
                            <li class="name_en">
                                <h2 class="animation-blur">xxxxx&nbsp;xxxxx</h2>
                            </li>
                            <li class="top_sns_icon_twitter">
                                <h3 class="animation-blur">
                                    <a href="#">
                                        <i class="fa-brands fa-square-x-twitter top_teitter" style="color: #444444;"></i></a>
                                    <a class="teitter_link fadein_text1" target="_blank" href="#">@xxxxx</a>
                                </h3>
                            </li>
                            <li class="top_sns_icon_instagram">
                                <h3 class="animation-blur"><a href="#"><i class="fa-brands fa-instagram top_instagram" style="color: #444444;"></i></a>
                                    <a class="instagram_link fadein_text1" href="#" target="_blank">@xxxxx</a>
                                </h3>
                            </li>
                            <li class="update_text animation-blur">
                                <p><small>Mar.&nbsp;11.&nbsp;2024 Update</small></p>
                            </li>
                        </ul>
                    </nav>
                </div>
        </section>
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
                            echo '<li class="flex-container scrollFadeIn-right">';
                            echo '<div class="news_text-container">';
                            echo '<p class="news_created"> created.' . $article['created'] . '</p>';
                            echo '<h2 class="news_title">' . $article['title'] . '</h2>';
                            echo '<p class="news_location">' . $article['location'] . '</p>';
                            echo '<p class="news_schedule">' . $article['schedule'] . '</p>';
                            echo '</div>';
                            echo '<img class="news_img" src="' . $article['image'] . '" alt="Article Image">';
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
            <div id="newsList-Link-container">
                <div class="newsLink-Link">
                    <a href="./newsList.php" class="linkBtn cubic"><span class="hovering">移動する</span><span class="default">News一覧へ</span></a>
                </div>
            </div>

        </section>
    </main>
    <?php include('./Template/footer.php'); ?>

    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--  slickの読み込み -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- slickの読み込み News_slide -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/a722c1cbb5.js" crossorigin="anonymous"></script>
    <!-- JavaScriptの読み込み -->
    <script src="/js/top.js" type="text/javascript"></script>
    <script src="/js/animation.js" type="text/javascript"></script>
    <script src="/js/all_loading.js" type="text/javascript"></script>
    <script src="/js/top_header_scroll.js" type="text/javascript"></script>
</body>
</html>