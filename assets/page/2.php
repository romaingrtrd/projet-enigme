<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/output.css" rel="stylesheet">
    <link href="/assets/css/2.css" rel="stylesheet">
    <title>Enigme 2</title>
</head>
<body>
    <div id="popup-indice">
        Le code <" "> en guise de mot de passe
    </div>
    <div class="main">
        <h1>Maintenant il est temps de se connecter à ton ordinateur dédié.
            <br>
            Pour cela, rentre ton nom en utilisateur et le code en guise de <span class="color-indice">mot de passe</span>.
            <br>
            Pour finaliser la connexion, cliques sur le bouton <span class="color-indice">SE CONNECTER</span>
        </h1>
        <div class="container-img">
            <img style="width: 100% height:auto " src="/assets/img/window-login.png">
            <div class="login">
                <input type="text">
                <input id="password" type="text">
                <img id="btn-login" onclick="NextStep()" class=" hover:cursor-pointer "style="display:none; width: 100px; margin-left:85px;" src="/assets/img/btn-connexion.png">
            </div>
        </div>
        <btn class="indice-2" id="arnaud">
            <img style="width: 100%" src="/assets/img/arnaud-pensif.png" alt="">
        </btn>
    </div>
</body>
    <script src="/assets/js/2.js"></script>
    <script>
        function NextStep() {
            var competence = '"Garantir l’intégration des différents éléments et modules"';
            if (window.confirm("Bravo ! \nTu as validé la compétence suivante :\n"+ competence)) {
            window.location.href = "./3.php";
            } else {
                die();
            }
        }
    </script>
</html>