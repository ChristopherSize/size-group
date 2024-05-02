<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE=edge">
        <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
        <title>Login-member</title>
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
    </head>

    <body>
        <div class="container">
            <div class="box">
                <!---Login---->
                <div class="box-login" id="login">
                    <div class="top-header">
                        <h3>Welcome, New Member</h3>
                        <small>We are happy to have you in Size Group.</small>
                    </div>
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" class="input-box" id="logEmail" required>
                            <label for="logEmail">Email address</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" id="logPassword" required>
                            <label for="logPassword">Password</label>
                        </div>
                        <div class="remember">
                            <input type="checkbox" id="formCheck" class="check">
                            <label for="formCheck"> Remember Me</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="input-submit" value="Sign In">
                        </div>
                        <div class="forgot">
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>    
</html>
