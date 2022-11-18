const screen = document.getElementById("screen");
const button = document.getElementById("btn-color");

button.addEventListener("click", ChangeColor);

function ChangeColor(){
    const randomColor = Math.floor(Math.random()*16777215).toString(16);
    screen.style.backgroundColor = "#" + randomColor;
}
ChangeColor();

function NextStep() {
    var competence = '"Garantir l’intégration des différents éléments et modules"';
    if (window.confirm("Bravo ! \nTu as validé la compétence suivante :\n"+ competence)) {
        window.location.href = "./6.php";
    } else {
        die();
    }
}

document.addEventListener('pointermove', ListenColor);
var color = "rgb(255, 0, 0)"

function ListenColor() {
    if(screen.style.backgroundColor == color){
        NextStep();
    } else {
        console.log("Wrong");
    }
}

const arnaud = document.getElementById("arnaud");
const popup = document.getElementById("popup-indice");

arnaud.addEventListener("click", ShowPopup);
function ShowPopup() {
    if (popup.style.opacity == "0") {
    popup.style.opacity = "1";
    } else {
        popup.style.opacity = "0";
    }
}