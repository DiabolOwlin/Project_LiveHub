<!--<!DOCTYPE html>-->
<!---->
<!--<head>-->
<!--    <link rel="stylesheet" type="text/css" href="public/css/style.css">-->
<!--    <title>LOGIN PAGE</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<div class="container">-->
<!--    <div class="logo">-->
<!--        <img src="public/img/logo.svg">-->
<!--    </div>-->
<!--    <div class="login-container">-->
<!--        <form class="login" action="login" method="POST">-->
<!--            <div class="messages">-->
<!--                --><?php
//                if(isset($messages)){
//                    foreach($messages as $message) {
//                        echo $message;
//                    }
//                }
//                ?>
<!--            </div>-->
<!--            <input name="email" type="text" placeholder="email@email.com">-->
<!--            <input name="password" type="password" placeholder="password">-->
<!--            <button type="submit">LOGIN</button>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_login.css ">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

    <title>LOGIN PAGE</title>
</head>
<body>
    <div class = "container">
        <div class = "container-left">
            <h1 class="logo">LIVEHUB</h1>
        </div>

        <div class = "container-right">
            <div class="login-form">
                <p style="font-size: 20px">LOG IN</p>
                <form class="login" action="login" method="POST">
                    <div class="messages">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <p>Email</p>
                    <input name="email" type="text" placeholder="email@email.com">
                    <p>Password</p>
                    <input name="password" type="password" placeholder="password">
                    <p>Forgot password?</p>
                    <input type="submit" class="login-button" value="LOG IN">
                </form>

                <p>Or log in with other services</p>
                <div id="my-signin2"></div>
                <script>
                    function onSuccess(googleUser) {
                        console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                    }
                    function onFailure(error) {
                        console.log(error);
                    }
                    function renderButton() {
                        gapi.signin2.render('my-signin2', {
                            'scope': 'profile email',
                            'width': 50,
                            'height': 50,
                            'longtitle': true,
                            'theme': 'dark',
                            'onsuccess': onSuccess,
                            'onfailure': onFailure
                        });
                    }
                </script>

                <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

            </div>

            <div class="signup-area">
                <p><a href="registration">Haven`t got an account yet? Sign up</a></p>
            </div>
        </div>
    </div>

</body>
</html>