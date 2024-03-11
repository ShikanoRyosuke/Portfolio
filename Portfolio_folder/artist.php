<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artist - Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" href="/img/favicon.png" />
    <link rel="apple-touch-icon" href="/img/favicon.png" />

    <!-- ogp -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Portfolio - Artist" />
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
    <link rel="stylesheet" href="/css/artist.css" />
    <link rel="stylesheet" href="/css/animation.css" />
    <link rel="stylesheet" href="/css/all_header_scroll.css" />
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/all_mobileHeader.css">
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
        <div id="artist"></div>
        <section id="artist-area">
            <h2 class="taitle"><i class="fa-regular fa-user"></i>&nbsp;Artist</h2>

            <ul class="artist-name_img">
                <li class="img_space">
                    <img class="artist-img" src="https://placehold.jp/500x400.png" alt="Artist">
                </li>
                <li class="name_space">
                    <div class="artist-name">
                        <p><strong>XXX XXX / xxxx xxxx</strong></p>
                        <p><strong>------ 出身</strong></p>
                        <p><strong>yyyy mm dd 生まれ</strong></p>
                    </div>
                </li>
            </ul>

            <div class="artist-career">
                <table>
                    <tr>
                        <td>yyyy/mm</td> 
                        <td>XXXXXX大学AAAAAAAA学科BBBB専攻入学</td>
                    </tr>
                    <tr>
                        <td>yyyy/mm</td> 
                        <td>XXXXXX大学AAAAAAAA学科BBBBBBBB専攻卒業</td>
                    </tr>
                    
                    <tr><th>《展示履歴》</th></tr>
                        <tr>
                            <td class="mobile_td">yyyy/mm</td>
                            <td>texttexttexttexttexttextGALLERY / 中央区</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td>
                            <td>texttexttexttexttextGALLERY / 渋谷区</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td>
                            <td>texttexttexttexttextGALLERY / 駒込</td></tr>
                        <tr>
                            <td>yyyy/mm</td> 
                            <td>texttexttexttexttextGALLERY /相模原市</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td> 
                            <td>texttexttexttexttextGALLERY / 渋谷区</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td> 
                            <td>texttexttexttextGALLERY /西日暮里</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td> 
                            <td>texttexttexttexttextGALLERY / 八王子市</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td> 
                            <td>texttexttexttexttextGALLERY / 調布市</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td> 
                            <td>texttexttexttexttextGALLERY /兵庫県</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td> 
                            <td>texttexttexttexttextGALLERY / 中央区</td>
                        </tr>
                        <tr>
                            <td>yyyy/mm</td> 
                            <td>texttexttexttexttextGALLERY / 文京区</td>
                        </tr>
                    

                    <tr><th>《受賞履歴》</th></tr>
                        <tr>
                            <td>yyyy</td> 
                            <td>texttexttexttext 入選</td>
                        </tr>
                        <tr>
                            <td>yyyy</td> 
                            <td>texttexttexttext ノミネート</td>
                        </tr>
                        <tr>
                            <td>yyyy</td> 
                            <td>texttexttexttext 特選</td>
                        </tr>
                </table>
            </div>
        </section>

    </main>

    <!-- =================================== galleryエリア =================================== -->






    <!-- =================================== フッターエリア =================================== -->

    <footer>
        <p id="copyright">&copy;2023 Sakamoto Mika inc. All Rights Reserved</p>
    </footer>


    <!-- jQueryの読み込み -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!--  slickの読み込み -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <!-- slickの読み込み News_slide -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- fontawsomeの読み込み -->
    <script src="https://kit.fontawesome.com/a722c1cbb5.js" crossorigin="anonymous"></script>

    <!-- JavaScriptの読み込み -->
    <script src="/js/animation.js" type="text/javascript"></script>
    <script src="/js/all_loading.js" type="text/javascript"></script>
    <script src="/js/all_header_scroll.js" type="text/javascript"></script>
</body>

</html>