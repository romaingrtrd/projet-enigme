<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/css/7.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="h-full w-full  flex flex-col justify-center items-center">
        <div class="h-[350px] w-[600px] bg-[url('/assets/img/logout-box.png')] bg-contain bg-no-repeat flex justify-evenly items-center">
            <div class="h-36 w-36 flex flex-col justify-center items-center">
                <div class="h-[60px] w-[60px] bg-[url('/assets/img/switch-user.png')] bg-contain bg-no-repeat"></div>
                <div><p class="text-white font-bold text-lg	mt-2 text-center">Changer</br>d'utilisateur</p></div>
            </div>
            <div class="h-36 w-36 flex flex-col justify-center items-center">
                <div id="logoutBtn" class="absolute mb-[65px] h-[60px] w-[60px] bg-[url('/assets/img/logout-icon.png')] bg-contain bg-no-repeat cursor-pointer"></div>
                <div><p class="text-white font-bold text-lg	mt-10">Se déconnecter</p></div>
            </div>
        </div>
        <div class="h-[110px] w-[1200px] mt-[100px] bg-[#9A9483] flex justify-center items-center rounded-xl border-2 border-white">
            <p class="text-white text-center">Bientôt la fin de la journée ! Il est actuellement 17h et tu finis le travail à 18h. Nous avons été très content de toi sur cette journée. On te laisse préparer ta journée de demain pour mieux anticiper et tu pourras te déconnecter puis boire cette bière tant attendue à la maison ;)</p>
        </div>
    </div>
    <div class="absolute bottom-3 right-2"><input id="heure" value="17:00" class=" w-[55px] text-[20px] mb-[7px] mr-[15px] text-center font-bold text-white" type="text"></div>
</body>
<script>
    function NextStep() {
        var competence = '"Être ponctuel"';
        if (window.confirm("Bravo ! \nTu as validé la compétence suivante :\n"+ competence)) {
            window.location.href = "./end.php";
        } else {
            die();
        }
    }
</script>
<script src="/assets/js/7.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>
</html>
