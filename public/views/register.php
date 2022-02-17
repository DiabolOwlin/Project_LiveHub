<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_register.css">
    <link rel="stylesheet" type="text/css" href="public/css/style_register_media_queries.css">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>REGISTRATION PAGE</title>
</head>
<body>
    <div class = "container">
        <div class = "container-left">
            <h1 class="logo">LIVEHUB</h1>
        </div>

        <div class="container-right">
            <div class="login-area">
                <p><a href="login">Already have an account? Log in</a></p>
            </div>

            <div class="registration-form">
                <p style="font-size: 20px">Registration</p>
                <p style="margin-top: -10px; font-size: 14px">With</p>

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
                <form class="register" action="register" method="POST">
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
                    <input name="email" type="text" class="input" placeholder="email@email.com">
                    <p>Nickname</p>
                    <input name="nickname" type="text" class="input" placeholder="nickname">
                    <p>Password</p>
                    <input name="password" type="password" class="input" placeholder="password">
                    <input name="confirmedPassword" type="password" class="input" placeholder="confirm password" style="margin-top: 30px">

                    <p>Name</p>
                    <input name="name" type="text" class="input" placeholder="name">

                    <p>Surname</p>
                    <input name="surname" type="text" class="input" placeholder="surname">

                    <p style="margin-top: -5px">
                        <input type="checkbox" class="checkbox-button">I accept the terms and conditions of the User Agreement
                    </p>

                    <button type="submit" class="register-button">Register</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>