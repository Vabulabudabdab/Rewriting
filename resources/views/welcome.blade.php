<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/card_block.css">
    <link rel="stylesheet" href="../assets/css/cover_content.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/sign_up.css">
    <link rel="icon" type="image/x-icon" href="../images/boosty_favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link  href="../uploads/boosty.png">
    <title>Boosty</title>
</head>
<body>
<header class="header">
    <div class="topMenu">
        <img src="./uploads/boosty.png" class="logo">
        <div class="buttons">
            <div class="languageChooser" id="languageChooser" onclick="showMenu();">
                <img src="../uploads/globus.png"> EN <img src="../uploads/btn-img.png" id="lngBtn" style="width: 30px;">
            </div>
            <div class="hiddenMenu" id="dropdownMenu" onclick="">
                <div class="en">
                    <div class="languages"><img src="../uploads/usaFlug.png" style="width: 20px; height: 10px; margin-bottom: 3px;">    EN</div>
                </div>
                <div class="ru">
                    <div class="languages"><img src="../uploads/russianFlug.png" style="width: 20px; height: 15px; margin-bottom: 3px;"> RU</div>
                </div>
            </div>
            <button type="button" class="buttonRegister" id="myBtn">
                SIGN UP
            </button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="close"></div>
                    <div class="modalHeader">
                        <h2>Registration</h1>
                            <h4>Enter your email and password</h2>
                    </div>
                    <div class="modalBody">
                        <form action="" method="POST">
                            <input type="email" placeholder="email" name="email">
                            <input type="password" placeholder="password" name="password" id="pass">
                            <button type="submit">SEND FORM</button>
                        </form>
                    </div>
                    <div class="modalFooter">
                        <h4>or log in using one of the social networks</h2>
                            <div class="authorizateBySocialMedia">
                                <div class="socialMedia">
                                    <div class="google cursor">
                                        <img src="./uploads/google.png">
                                    </div>
                                </div>
                                <div class="socialMedia">
                                    <div class="odnoklassniki cursor">
                                        <img src="./uploads/odnoklassniki.png">
                                    </div>
                                </div>
                                <div class="socialMedia">
                                    <div class="youtube cursor">
                                        <img src="./uploads/youtube.png">
                                    </div>
                                </div>
                                <div class="socialMedia">
                                    <div class="mailRu cursor">
                                        <img src="./upload/mail.png">
                                    </div>
                                </div>
                                <div class="socialMedia">
                                    <div class="vk cursor">
                                        <img src="./uploads/vk.png">
                                    </div>
                                </div>
                                <div class="socialMedia">
                                    <div class="twitch cursor">
                                        <img src="./uploads/twitch.png">
                                    </div>
                                </div>
                            </div>
                            <div class="offer">
                                <p>
                                    By registering on the site, you accept terms of service, payment terms, privacy policy and cookie policy
                                </p>
                            </div>
                    </div>
                </div>
            </div>
            <button type="button" class="buttonLogin" id="">
                LOG IN
            </button>
        </div>
    </div>
</header>
<div class="lay_out">
    <div class="cover_content">
        <div class="cover_container">
            <div class="cover_info">
                <h1>Dream Cast</h1>
                <div class="title_cover">
                        <span>
                            Озвучиваем твои любимые аниме :з
                        </span>
                    <img src="../uploads/flag.png">
                </div>
            </div>
        </div>
    </div>
    <div class="main_content">
        <div class="content_block">
            <div class="card_block">
                <img src="./uploads/dream_cast.png">
                <div class="blog_folow">
                    <div class="folowers_count">
                        546
                    </div>
                    <div class="folowers_label">
                        subscribers
                    </div>
                    <button type="button" class="follow">
                        <div class="follow_image">
                            <div class="icon_follow"></div>
                        </div>
                        <div class="follow_label">
                            Follow
                        </div>
                    </button>
                    <button type="button" class="send_message">
                        <div class="send_message_image">
                            <div class="icon_send_message"></div>
                        </div>
                        <div class="send_message_label">
                            Send message
                        </div>
                    </button>
                    <button type="button" class="donate">
                        <div class="donate_image">
                            <div class="icon_donate"></div>
                        </div>
                        <div class="send_message_label">
                            Sent tip
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/eventscript.js"></script>
<script src="../assets/js/register.js"></script>
</body>
</html>
