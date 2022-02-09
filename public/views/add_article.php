<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_add_article.css">
    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>

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

                            <div><button type="submit">Submit</button></div>

                        </div>
                    </form>
                </section>
            </div>
        </div>
        <div class="footer"></div>
    </div>
</body>
