const bouton = document.getElementById("bouton");
const input = document.getElementById("text");
var text = '$cle=cle';

input.addEventListener('input', updateValue);

function updateValue() {
    if (input.value == text) 
    {
        bouton.style.display = 'block';
    }
    else 
    {
        bouton.style.display = 'none';
    }
}

const boutonclick = document.querySelector('button');
boutonclick.addEventListener('click',NextStep);

function NextStep() {
    var competence = '"Garantir l’intégration des différents éléments et modules"';
    if (window.confirm("Bravo ! \nTu as validé la compétence suivante :\n"+ competence)) {
        window.location.href = "./2.php";
    } else {
        die();
    }
}