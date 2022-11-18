<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Enigme 6</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/logo.png">
    <link rel="stylesheet" href="/assets/css/6.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3da1a747b2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="popup-indice">
        Les inspecteurs sont connus pour trouver les petits détails
    </div>
    <header>
        <div class="logo">
            <img onclick="location.href='../../index.php'" style="width: 100%;" src="/assets/img/logo.png" alt="">
        </div>
        <div class="number-current color-indice">
            <p>6 / 6</p>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <h2>“En tant que COP, tu te dois d’apprendre de tes erreurs et revenir sur tes expériences. Pour ce premier
                jour, on te demande de <g>revenir sur ton expérience aujourd’hui</g> car en effet, ne pas apprendre de
                ses
                erreurs
                veut dire
                les faire à nouveau.”</h2>
        </div>
    </div>
    <div class="section-screen">
        <div class="row"> 
            <div class="border-screen">
                <div class="text-normal">Expériences acquises aujourd'hui</div>
                <ul class="draggable-list" id="draggable-list"></ul>
                <div class="center">
                    <button class="check-btn" id="check">
                        Valider
                    </button>
                </div>
            </div>
        </div>
    </div>
    <btn class="indice-2" id="arnaud">
        <img style="width: 100%" src="/assets/img/arnaud-pensif.png" alt="">
    </btn>
    <script src="/assets/js/6.js"></script>
</body>

</html>