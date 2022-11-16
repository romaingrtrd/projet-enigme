const bouton = document.getElementById("btn-login");
const input = document.getElementById("password");
var text = '<button>Se connecter</button>';

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
