<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $headTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" href="/img/favicon.png" />
    <link rel="apple-touch-icon" href="/img/favicon.png" />
    
    <!-- ogp -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Portfolio - Artist" />
    <meta property="og:title" content="<?php echo $headMetaTitle ?>" />
    <meta property="og:image" content="/img/favicon.png">
    <meta property="og:locale" content="ja_JP" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="description" content="Portfolio用ホームページ" />
    <meta name="twitter:site" content="#" />

    <!-- cssの読み込み -->
    <link rel="stylesheet" href="/css/riset.css" />
    <link rel="stylesheet" href="/css/all_loading.css">
    <link rel="stylesheet" href="/css/all_header_scroll.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/newsTemplate.css">
    <link rel="stylesheet" href="/css/animation.css" />
    <link rel="stylesheet" href="/css/all_mobileHeader.css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&family=Slackside+One&family=Tsukimi+Rounded:wght@200&display=swap" rel="stylesheet">
</head>

<div class="loading">
    <div class="loading-wrap">
        <img src="/img/loding_img.gif">
    </div>
</div>
<?php include('../Template/header.php'); ?>
<?php include('../Template/mobileHeader.php'); ?>
<main>
    <div class="page_container">
        <div class="article">
            <nav>
                <ul class="breadcrumb breadcrumb-top fadeIn">
                    <li><a href="../index.php">TOP</a></li>
                    <li><a href="../newsList.php">News</a></li>
                    <li><?php echo $bredcrumb ?></li>
                </ul>
            </nav>
            <p class="create_date fadeIn" id="create_date">Release <?php echo $CreatedDate ?></p>
            <h1 class="fadeIn">
                <?php echo $title ?>
            </h1>
            <div>
                <img class="image_top" src=<?php echo $newsImg1 ?>>
            </div>
            <div class="text_1 fadeIn">
                <p class="p-1">
                    <?php echo $theText ?>
                </p>
                <div class="text_1 fadeIn">
                    <p class="p-1"></p>
                </div>
                <h2 class="fadeIn">Information</h2>
                <div class="information">
                    <ui class="fadeIn">
                        <li><span>日時：<?php echo $informationDay ?></span></li>
                        <li><span>営業時間：<?php echo $informationTime ?></span></li>
                        <li><span>会場：<?php echo $informationPlace ?></span></li>
                        <li><span>アクセス：<?php echo $informationAccess ?></span></li>
                        <li><span><?php echo $informationAmount ?></span></li>
                    </ui>
                </div>
                <div class="end_area">
                    <p>
                    texttexttexttexttext<br class="end_area_br">texttexttexttexttexttexttexttext<br>
                        <span>
                            URL:
                            <a href=<?php echo $informationUrl ?> target="_blank">
                                <?php echo $informationUrl ?></a><br>
                            <?php echo $informationUrlTwitter ?>
                            <?php echo $informationUrlInstagram ?>
                        </span>
                        <br>
                        texttexttexttexttexttexttexttexttexttext
                    </p>
                </div>
                <nav>
                    <ul class="breadcrumb breadcrumb-bottom fadeIn">
                        <li><a href="../index.php">TOP</a></li>
                        <li><a href="../newsList.php">News</a></li>
                        <li><?php echo $bredcrumb ?></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- サイドバー -->
        <div class="sidebar">
            <div class="twitter_list">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">At dawn from the gateway to Mars, the launch of Starship’s second flight test <a href="https://t.co/ffKnsVKwG4">pic.twitter.com/ffKnsVKwG4</a></p>&mdash; SpaceX (@SpaceX) <a href="https://twitter.com/SpaceX/status/1732824684683784516?ref_src=twsrc%5Etfw">December 7, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
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
<script src="/js/animation.js" type="text/javascript"></script>
<script src="/js/all_header_scroll.js" type="text/javascript"></script>
</body>

</html>