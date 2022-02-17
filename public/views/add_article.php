<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_add_article.css">
    <link rel="stylesheet" type="text/css" href="public/css/style_add_article_media_queries.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/navbars_scroll.js" defer></script>
    <script src="https://cdn.tiny.cloud/1/g6ra4aj091yy63zd2m43j98jqr9wyu22zd2r06z0c0f519d0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <title>ADD AN ARTICLE</title>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <div class="upper-header">

                <div id="leftSidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeLeftNav()">&times;</a>
                    <a href="main_page">All flows</a>
                    <hr style="color: lightgray">
                    <a href="development">Development</a>
                    <a href="administration">Administration</a>
                    <a href="design">Design</a>
                    <a href="sci_fi">Sci-fi</a>
                </div>

                <span onclick="openLeftNav()"><i class="fas fa-bars"></i></span>

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
                    <div class="img_buttons">
                        <div class="dropdown">
                            <button onclick="user_menu()" class="dropbtn"><img src="public/img/profile_icon.png" width="26" height="26"></button>

                            <div class="usr_nav_mobile">
                                <div id="rightSidenav" class="rightSideNav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeRightNav()">&times;</a>
                                    <hr style="color: lightgray">
                                    <a href="settings">Settings</a>
                                    <a href="add_article">Add an article</a>
                                    <a href="login">Log out</a>
                                </div>

                                <span onclick="openRightNav()"><img src="public/img/profile_icon.png" width="26" height="26"></span>
                            </div>
                            <div id="user_dropdown" class="dropdown-content">
                                <a href="settings">Settings</a>
                                <a href="add_article">Add an article</a>
                                <a href="login">Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="feed">
                <section class="article-form">
                    <p>Add an article</p>
                    <form action="add_article" method="POST" ENCTYPE="multipart/form-data">
                        <div class="messages">
                            <?php
                            if(isset($messages)){
                                foreach($messages as $message) {
                                    echo $message;
                                }
                            }
                            ?>
                        </div>
                        <div class="article_form">
                            <div><input name="title" type="text" placeholder="title"></div>
                            <div><input type="file" name="file"></div>
                            <div><textarea id="mytextarea" name="description" placeholder="description"></textarea></div>
<!--                            <div><input name="title" type="text" placeholder="title"></div>-->
<!--                            <div><textarea name="description" rows=5 placeholder="description"></textarea></div>-->

                            <div><button id="sbmt" type="submit">Submit</button></div>

                        </div>
                    </form>
                </section>
            </div>
        </div>
        <div class="footer"></div>
    </div>
</body>
