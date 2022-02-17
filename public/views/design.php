<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_main_page.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/2755cb3561.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/statistics.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>DESIGN</title>
</head>
<body>
<a id="go_to_top"></a>

<div class="main-container">
    <div class="header">
        <div class="upper-header">
            <div class="logo">LIVE<span class="colortext">HUB</span></div>
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
            <div class="options">
                <div class="search-bar">
                    <input placeholder="search article">
                    <img src="public/img/search_icon.png" width="22" height="22">
                </div>
                <div class="img_buttons">
                    <div class="dropdown">
                        <button onclick="user_menu()" class="dropbtn"><img src="public/img/profile_icon.png" width="26" height="26"></button>
                        <div id="user_dropdown" class="dropdown-content">
                            <a href="settings">Settings</a>
                            <a href="add_article">Add an article</a>
                            <a href="log_out">Log out</a>
                        </div>
                    </div>
                    <script>
                        /* When the user clicks on the button,
                        toggle between hiding and showing the dropdown content */
                        function user_menu() {
                            document.getElementById("user_dropdown").classList.toggle("show");
                        }

                        // Close the dropdown if the user clicks outside of it
                        window.onclick = function(event) {
                            if (!event.target.matches('.dropbtn')) {

                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                var i;
                                for (i = 0; i < dropdowns.length; i++) {
                                    var openDropdown = dropdowns[i];
                                    if (openDropdown.classList.contains('show')) {
                                        openDropdown.classList.remove('show');
                                    }
                                }
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="nav">

        </div>
        <div class="feed">
            <div class="menu">
                <div class="menu-name">All flows</div>
                <div class="list-menu">
                    <ul>
                        <li>Articles</li>
                        <li>News</li>
                        <li>Authors</li>
                    </ul>
                </div>
            </div>
            <div class="article">
                <article class="articles">
                    <?php foreach ($articles as $article): ?>
                        <div id="<?= $article->getId(); ?>" class="each_article">
                            <div>
                                <h4><?= $article->getAuthor(); ?>, <?=$article->getCreatedAt() ?></h4>
                                <h2><?= $article->getTitle(); ?></h2>
                                <img src="public/uploads/<?= $article->getImage(); ?>" alt="">
                                <p><?= substr($article->getDescription(),0,500).'...'; ?></p><br>
                                <button class="read_more">Read more</button>
                                <div class="social-section">
                                    <i class="fas fa-heart"> <?= $article->getLike(); ?></i>
                                    <i class="fas fa-minus-square"> <?= $article->getDislike(); ?></i>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </article>
            </div>
        </div>
        <div class="column">
            <div class="add">
                <div>Advertisement</div>
            </div>
            <div class="reading_right_now">
                <div class="rrn_title">Reading right now</div>
                <div class="rrn_articles">
                    <?php foreach ($articles as $article): ?>
                        <div id="<?= $article->getId(); ?>" class="rrn_each_article">
                            <div>
                                <h4><?= $article->getTitle(); ?></h4>
                                <div class="social-section">
                                    <i class="fas fa-heart"> <?= $article->getLike(); ?></i>
                                    <i class="fas fa-minus-square"> <?= $article->getDislike(); ?></i>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"></div>
</div>

<script>
    var btn_top = $('#go_to_top');
    var btn_go_back = $('#go_back');
    var pageYLabel = 0;

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn_top.addClass('show');
            btn_go_back.removeClass('show');
        } else {
            btn_top.removeClass('show');
            btn_go_back.addClass('show');
        }
    });

    btn_top.on('click', function(e) {
        e.preventDefault();
        pageYLabel = $(window).scrollTop();
        $('html, body').animate({scrollTop:0}, '300');

    });

    btn_go_back.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:pageYLabel}, "slow");

    })
</script>
</body>

<template id="article-template">
    <div class="each_article" id="">

        <h2>title</h2>
        <img src="" alt="">
        <p>description</p><br>
        <div class="social-section">
            <i class="fas fa-heart">like</i>
            <i class="fas fa-minus-square">dislike</i>
        </div>
    </div>
</template>
