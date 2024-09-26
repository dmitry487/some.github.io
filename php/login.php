<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="promo.css">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script defer scr="loginsms.py"></script>
    <style>
    body {
        font-family: 'Montserrat';font-size: 22px;
    }
    </style>
    <title></title>
</head>
<body style="background-image: url('fonts/mainfont.svg');
background-repeat: no-repeat;
background-size: cover;
background-color: #212121;">
    <header>
        <div class="top-row">
            <ul class="container">
                <ul class="left_side">
                    <li>
                        <a href='index.php' class="dota_logo">
                            <img src="img/dotalogo.svg" class="dotaloggggg" stile="width 109px height 22px">
                        </a>
                    </li>
                    <li>
                        <a class="mail-s">
                            <img class = 'mail-s__link'src="img/mail.svg" stile="width: 32px; height: 32px;">
                        </a>
                    </li>
                    <li>
                        <a class="kolokol">
                            <img class="kolokol__link" src="img/kolokol.svg" stile="width: 28px; height: 28px; margin-top: 2px;">
                        </a>
                    </li>
                    <li>
                        <a class="settings">
                            <img class="setting__link" src="img/Layer 10.svg" stile="width: 32px; height: 32px; margin-top: 5px;">
                        </a>
                        <ul class="text_s">
                            <li class="hover_text_settings"></li><a href="#">sdfsdf</a></li>
                            <li class="hover_text_settings"><a href="#">asdkasd</a></li>
                            <li class="hover_text_settings"><a href="#">asdkadk</a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
        </div>
    </header>
    <main>
        <div class="p-container">
            <form action="action_page.php">
              <div class="row">
                <h2 style="text-align:center">Login with Social Media or Manually</h2>
                <div class="vl">
                  <span class="vl-innertext">or</span>
                </div>
                <div class="col">
                  <div class="hide-md-lg">
                    <p>Or sign in manually:</p>
                </div>
                <ul class="passlog">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login">
                </ul>
                </div>
              </div>
            </form>
          </div>
          
          <div class="bottom-container">
            <div class="row">
              <div class="col">
                <a href="#" style="color:white" class="btn">Sign up</a>
              </div>
              <div class="col">
                <a href="#" style="color:white" class="btn pp">Forgot password?</a>
              </div>
            </div>
          </div>
    </main>
</body>
</html>