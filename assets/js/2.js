const bouton = document.getElementById("btn-login");
const input = document.getElementById("password");
var text = '<button>se connecter</button>';

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