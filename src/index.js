"use strict"

function removeWord(span) {
    // Deshabilitar el onclick para evitar múltiples eliminaciones
    span.onclick = null;

    // Obtener todos los elementos span con la clase "word"
    var words = document.querySelectorAll('.word');

    // Filtrar los elementos excluyendo el que tiene el id "pass"
    var wordsFiltered = Array.from(words).filter(function (word) {
        return word.id !== 'pass' && word.id !== 'user';
    });

    // Seleccionar un elemento span aleatorio para eliminar
    var randomIndex = Math.floor(Math.random() * wordsFiltered.length);
    var wordToRemove = wordsFiltered[randomIndex];

    // Eliminar el elemento span seleccionado
    wordToRemove.parentNode.removeChild(wordToRemove);
}

function removeLives(){
    var livesElements = document.querySelectorAll('.lives');

// Verifica si hay al menos un elemento con la clase 'lives'
if (livesElements.length > 0) {
    // Elimina el primer elemento con la clase 'lives'
    livesElements[0].remove();
} else {
    window.location.reload();
}

}

function showInfo(span) {
    var id = span.id;
    if (id === 'user') {
        document.getElementById('name').textContent = 4251046;
    } else if (id === 'pass') {
        document.getElementById('password').textContent = "scap2024";
    }

    if (document.getElementById('name').textContent == 4251046 && document.getElementById('password').textContent == "scap2024") {
        document.getElementById('main').remove();

        document.getElementById('response').textContent = 'Acceso concedido, en el servidor se encuentra la clave para abrir la puerta. Insértala para abrir la puerta';
        document.getElementById('passForm').removeAttribute('hidden');
    }
}

function checkForm() {
    // Obtén el valor del campo de texto por su nombre
    let inputValue = document.getElementsByName('clave')[0].value;

    // Verifica si el valor del campo es "escaporia"
    if (inputValue == 'escaporia') {
        // Simula el envío del formulario
       document.getElementById('response').textContent='Puerta abierta';
       return true;
    } else {
       
        document.getElementById('response').textContent='Contraseña inválida';
        return false;
    }
}