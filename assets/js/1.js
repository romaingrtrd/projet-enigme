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

