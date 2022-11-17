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

