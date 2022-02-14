<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_article.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title><?php $article->getTitle(); ?></title>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <div class="upper-header">
                <div class="logo">LIVE<span class="colortext">HUB</span></div>
<!--                <div class="primary-list">-->
<!--                    <ul>-->
<!--                        <li>MAIN</li>-->
<!--                        <li>POPULAR</li>-->
<!--                        <li>RECENT</li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
            <div class="lower-header">
                <div class="secondary-list">
                    <ul>
                        <li><a href="main_page">All flows</a></li>
                        <li><a href="development">Development</a></li>
                        <li><a href="design">Design</a></li>
                        <li><a href="administration">Administration</a></li>
                        <li><a href="sci_fi">Sci-fi</a></li>
                    </ul>
                </div>
                <div class="img_buttons">
                    <img src="public/img/search_icon.png" width="22" height="22">
<!--                </div>-->
<!--                <div class="img_buttons">-->
                    <img src="public/img/profile_icon.png" width="26" height="26">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="feed">
                <div class="search-bar">
                    <input placeholder="search article...">
                </div>
                <div class="search_result">
                    <article class="articles">
                        <?php foreach ($articles as $article): ?>
                            <div class="each_article">
                                <div><?= $article->getAuthor(); ?>, <?=$article->getCreatedAt() ?></div>
                                <div><h2><?= $article->getTitle(); ?></h2></div>
                                <div><img src="public/uploads/<?= $article->getImage(); ?>" alt=""></div>
                                <div><p><?= $article->getDescription(); ?></p><br></div>
                                <div class="social-section">
                                    <i class="fas fa-heart"> <?= $article->getLike(); ?></i>
                                    <i class="fas fa-minus-square"> <?= $article->getDislike(); ?></i>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </article>

                </div>
            </div>
        </div>
        <div class="footer"></div>
    </div>
</body>


