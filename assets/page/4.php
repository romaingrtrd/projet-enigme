<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/4.css" type="text/css">
    <title>Énigme 4</title>
</head>
<body>
    <div id="popup-indice">
        Que fait systématiquement un COP avant de travailler?
    </div>
    <header>
        <div class="logo">
            <img onclick="location.href='../../index.php'" style="width: 100%;" src="/assets/img/logo.png" alt="">
        </div>
        <div class="number-current color-indice">
            <p>4 / 6</p>
        </div>
    </header>
    <section>
        <div class="text">
            <p>"Tu viens de finir de sortir d'un long rendez-vous avec le client d'un projet. Le client t'a listé des problèmes sur le site à régler avant ce soir.<br>
            Avec le temps qu'il nous reste, nous ne pourrons effectuer seulement 6 tâches,<span class="text-shadow"> soit efficace dès le début.</span> Attention, j'ai entendu qu'il y avait<span class="text-shadow"> un piège."</span></p></span>
        </div>

        <div class="enigme4">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tâches à faire</th>
                        <th><div id="icon"><img src="/assets/img/valider.png" alt=""></div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prendre un café</td>
                        <td><input type="checkbox" id="1" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Ajouter le logo dans le pied de page</td>
                        <td><input type="checkbox" id="2" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Barre de navigation dans le header</td>
                        <td><input type="checkbox" id="3" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Mettre en place le CSS Media Print</td>
                        <td><input type="checkbox" id="4" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Adapter le site en responsive design</td>
                        <td><input type="checkbox" id="5" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Optimiser les images / CSS</td>
                        <td><input type="checkbox" id="6" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Insérer les balises liées du référencement</td>
                        <td><input type="checkbox" id="7" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Insérer la page 404</td>
                        <td><input type="checkbox" id="8" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Mode sombre</td>
                        <td><input type="checkbox" id="9" onclick="myFunction(this.id)"/></td>
                    </tr>
                    <tr>
                        <td>Mettre en place l'authentification</td>
                        <td><input type="checkbox" id="10" onclick="myFunction(this.id)"/></td>
                    </tr>
                </tbody>
            </table>
            <div class="textedroitetableau">
                <div class="texte-tableau">Sélectionnes les 6 tâches !</div>
                <button class="boutonvalider" id="bouton" onclick="checkresultat()">Valider</button>
            </div>
        </div>
        <btn class="indice-2" id="arnaud">
            <img id='img-arnaud' style="width: 100%" src="/assets/img/arnaud-pensif.png" alt="">
        </btn>
    </section>

    <!-- SCRIPTS -->

<script src="../js/4.js"></script>

<script>
    function NextStep() {
        var competence = '"Construire l’organisation projet"';
        if (window.confirm("Bravo ! \nTu as validé la compétence suivante :\n"+ competence)) {
            window.location.href = "./5.php";
        } else {
            die();
        }
    }
</script>

</body>
</html>
