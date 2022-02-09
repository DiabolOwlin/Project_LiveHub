<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_main_page.css">
    <title>MAIN PAGE</title>
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
        <div class="content">
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
                                <div class="each_article">
                                    <div><?= $article->getAuthor(); ?>, <?=$article->getCreatedAt() ?></div>
                                    <div><h2><?= $article->getTitle(); ?></h2></div>
                                    <div><img src="public/uploads/<?= $article->getImage(); ?>" alt=""></div>
                                    <div><p><?= $article->getDescription(); ?></p><br></div>
<!--                                    <div class="social-section">-->
<!--                                        <i class="fas fa-heart"> --><?//= $article->getLike(); ?><!--</i>-->
<!--                                        <i class="fas fa-minus-square"> --><?//= $article->getDislike(); ?><!--</i>-->
<!--                                    </div>-->
                                </div>
                        <?php endforeach; ?>
                    </article>
                        <!--                        if(isset($articles) && is_array($articles)) foreach ($articles as $article) {-->

                </div>
            </div>
            <div class="column">
                <div class="add">
                    <div>Advertisement</div>
                </div>
                <div class="reading_right_now">
                    <div>Reading right now</div>
                </div>
            </div>
        </div>
        <div class="footer"></div>
    </div>
</body>

<template id="article-template">
    <div id="">
        <img src="">
        <div>
            <h2>title</h2>
            <p>description</p>
            <div class="social-section">
                <i class="fas fa-heart"> 0</i>
                <i class="fas fa-minus-square"> 0</i>
            </div>
        </div>
    </div>
</template>