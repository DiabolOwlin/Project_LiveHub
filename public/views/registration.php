<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_registration.css">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

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
                <p style="font-size: 30px">Registration</p>
                <p style="margin-top: -30px; font-size: 16px">With</p>

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
                            'width': 240,
                            'height': 50,
                            'longtitle': true,
                            'theme': 'dark',
                            'onsuccess': onSuccess,
                            'onfailure': onFailure
                        });
                    }
                </script>

                <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>


                <p>Email</p>
                <form>

                    <input type="email" id="email" name="email" class="input">
                </form>

                <p>Nickname</p>
                <form>

                    <input type="text" class="input">
                </form>

                <p>Password</p>
                <form>
                    <input type="password" class="input">
                </form>

                <p>Password again</p>
                <form>
                    <input type="password" class="input">
                </form>


                  <p>
                      <input type="checkbox" class="checkbox-button">I accept the terms and conditions of the User Agreement
                  </p>


                <input type="button" class="register-button" onclick="" value="Register">

            </div>


        </div>
    </div>

</body>
</html>