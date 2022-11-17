<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/output.css" rel="stylesheet">
    <link href="../css/1.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> 
    <title>page 1</title>
</head>

<body class="bg-primary h-[100vh] flex flex-col justify-center items-center py-[20px]">
    <div class="flex flex-col gap-[15px] w-[1000px] h-full mt-[50px]">
        <div class="text-lg text-center font-poppins text-white">
            <h1 class="mb-[20px]">Bienvenue Arnaud</h1>
            <p class="mb-[20px]">
                Pour ta première journée en tant que COP à G4, nous allons t’accompagner dans tes tâches quotidiennes.<br>
                Tu entendras sûrement les étudiants dire que ce travail est facile voire inutile mais tu vas te rendre compte que ce n’est pas tout le temps simple !
            </p>
            <p class="mb-[20px]">
                Pour ouvrir la grille et accéder à l’école : rentres la <span class="text-quaternary">$cle</span>
            </p>
        </div>
            
        <div class="flex justify-center w-100">
            <input id="text" type="text" class="rounded-full h-8 w-100 py-3 px-3 text-primary ">  
            <button id="bouton" style="display:none" class="rounded-full font-poppins text-white hover:text-black bg-quaternary w-8 h-8 ml-1 absolute mr-[-163px]">OK</button>
        </div>

        <div class="flex w-full">
            <img id="animation" class="w-auto h-full rounded-xl"
            src="../img/grille-g4.jpg"
            alt="Image de la grille d'entrée de L'Institut G4">
        </div>
    </div>

</body>

<script type="text/javascript" src="../js/1.js"></script>
<script>
    function NextStep() {
        var competence = '"Garantir l’intégration des différents éléments et modules"';
        if (window.confirm("Bravo ! \nTu as validé la compétence suivante :\n"+ competence)) {
            window.location.href = "./6.php";
        } else {
            die();
        }
    }

var id = setInterval(frame, 5);

function frame() {
  if (/* test for finished */) {
    clearInterval(id);
  } else {
    
  }
}
</script>

</html>