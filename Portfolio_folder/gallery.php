<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" href="/img/favicon.png" />
    <link rel="apple-touch-icon" href="/img/favicon.png" />

    <!-- ogp -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Portfolio - Gallery" />
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
    <link rel="stylesheet" href="/css/gallery.css" />
    <link rel="stylesheet" href="/css/all_header_scroll.css" />
    <link rel="stylesheet" href="/css/footer.css" />
    <link rel="stylesheet" href="/css/all_mobileHeader.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <!-- animate.cssの読み込み -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&family=Slackside+One&family=Tsukimi+Rounded:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <div class="loading">
        <div class="loading-wrap">
            <img src="/img/loding_img.gif">
        </div>
    </div>
    <?php include('./Template/header.php'); ?>
    <?php include('./Template/mobileHeader.php'); ?>
    <main>
        <div class="gallery-container">
            <div class="title-erea">
                <h1>
                    <i class="fa-solid fa-palette" style="color: #313131;"></i>
                    GALLERY
                </h1>
                <hr>
                <p>画像をクリックすると拡大表示できます。</p>
            </div>
            <div class="contents-container">
                <div class="gallery_container">
                    <div class="gallery_area">
                        <ul class="gallery">
                            <div class="contents all_contents" id="A_contents">
                                <?php
                                $f = fopen("./csvList/A_contents.csv", "r");
                                while ($line = fgetcsv($f)) {
                                    echo <<< eof
                                    <li>
                                        <a href="./artList/A_contents/{$line[0]}"  
                                            data-fancybox="A_contents" 
                                            id="{$line[0]}"
                                            loading="lazy"
                                            data-caption="『{$line[1]}』">
                                            <img class="animation-blur2 fadeUp"
                                            src="./artList/A_contents/{$line[0]}"
                                            title="{$line[0]}">
                                        </a>
                                    </li>
                                eof;
                                }
                                fclose($f);
                                ?>
                            </div>
                            <div class="contents hidden" id="B_contents">
                                <?php
                                $f = fopen("./csvList/B_contents.csv", "r");
                                while ($line = fgetcsv($f)) {
                                    echo <<< eof
                                    <li>
                                        <a href="./artList/B_contents/{$line[0]}"  
                                            data-fancybox="B_contents" 
                                            id="{$line[0]}"
                                            loading="lazy"
                                            data-caption="『{$line[1]}』">
                                            <img class="animation-blur2 fadeUp"
                                            src="./artList/B_contents/{$line[0]}"
                                            title="{$line[0]}">
                                        </a>
                                    </li>
                                eof;
                                }
                                fclose($f);
                                ?>
                            </div>
                            <div class="contents hidden" id="C_contents">
                                <?php
                                $f = fopen("./csvList/C_contents.csv", "r");
                                while ($line = fgetcsv($f)) {
                                    echo <<< eof
                                    <li>
                                        <a href="./artList/C_contents/{$line[0]}"  
                                            data-fancybox="C_contents" 
                                            id="{$line[0]}"
                                            loading="lazy"
                                            data-caption="『{$line[1]}』">
                                            <img class="animation-blur2 fadeUp"
                                            src="./artList/C_contents/{$line[0]}"
                                            title="{$line[0]}">
                                        </a>
                                    </li>
                                eof;
                                }
                                fclose($f);
                                ?>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="sidebar">
                    <div class="filter-container filter-container-1">
                        <div class="filter-head" id="filter-head-first">絞り込み</div>
                        <li class="filterBtn all_contents" data-target="A_contents" id="filterBtn-fisrt">A_contents</li>
                        <li class="filterBtn" data-target="B_contents">B_contents</li>
                        <li class="filterBtn" data-target="C_contents">C_contents</li>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p id="copyright">&copy;2023 Sakamoto Mika inc. All Rights Reserved</p>
    </footer>

    <!-- jquery,funcyboxの読み込み -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/a722c1cbb5.js" crossorigin="anonymous"></script>
    <!-- wow.min.jsの読み込み -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>new WOW().init();</script>
    <!-- JavaScriptの読み込み -->
    <script src="/js/all_loading.js" type="text/javascript"></script>
    <script src="/js/gallery.js" type="text/javascript"></script>
    <script src="/js/animation.js" type="text/javascript"></script>
    <script src="/js/all_header_scroll.js" type="text/javascript"></script>
</body>
</html>