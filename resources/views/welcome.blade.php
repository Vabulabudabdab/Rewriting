<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link  href="./uploads/boosty.png">
    <title>Boosty</title>
</head>
<body onclick="hiddenMenu()">
<header class="header">
    <div class="topMenu">
        <img src="./uploads/boosty.png" class="logo">
        <div class="buttons">
            <div class="languageChooser" id="languageChooser" onclick="showMenu(), rotate()">
                <img src="./uploads/globus.png"> EN <img src="./uploads/strla-1.png" id="lngBtn">
            </div>
            <div class="hiddenMenu" id="dropdownMenu">
                <div class="en">
                    <div class="languages"><img src="./uploads/brt-flag.png" style="width: 20px; height: 10px; margin-bottom: 3px;">    EN</div>
                </div>
                <div class="ru">
                    <div class="languages"><img src="./uploads/russianFlug.png" style="width: 20px; height: 15px; margin-bottom: 3px;"> RU</div>
                </div>
            </div>
            <button type="button" class="buttonRegister">
                SIGN UP
            </button>
            <button type="button" class="buttonLogin">
                LOG IN
            </button>
        </div>
</header>
<script src="../resources/js/eventscript.js"></script>
</body>
</html>
