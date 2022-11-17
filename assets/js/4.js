// function muFunction() {
//     var button = document.getElementById('bouton');
//     var checkbox = document.getElementById('1','3','5','6','7','10');
//     if (checkbox.checked == true && button.clicked == true ){
//     }
//     alert('Bonne réponse fdp');
// }

var arr= [];
var resultat= ['1', '10', '3', '5', '6', '7'];
function myFunction(inputCB) {
    if (!(document.getElementById(inputCB).checked)) {
        const index = arr.indexOf(inputCB);
        if (index > -1) {
            arr.splice(index, 1);
        }
    } else {
        arr.push(inputCB);
    }
    arr.sort();
}

function checkresultat() {
    const equals = (arr, resultat) => JSON.stringify(arr) === JSON.stringify(resultat);
    if (equals(arr, resultat)) {
        NextStep();
    } else {
        alert('C\'est faux ! Arnaud n\'est pas content');
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


