<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_add_article.css">
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
<!--                </div>-->
<!--                <div class="img_buttons">-->
                    <img src="public/img/profile_icon.png" width="26" height="26">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="feed">
                <section class="project-form">
                    <p>UPLOAD</p>
                    <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                        <div class="messages">
                            <?php
                            if(isset($messages)){
                                foreach($messages as $message) {
                                    echo $message;
                                }
                            }
                            ?>
                        </div>
                        <div class="project_form">
                            <div><input name="title" type="text" placeholder="title"></div>
                            <div><textarea name="description" rows=5 placeholder="description"></textarea></div>
                            <div><button type="submit">send</button></div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
        <div class="footer"></div>
    </div>
</body>
