"use strict"

function checkForm() {
    let firstAnswer = document.querySelector('input[name="btnradio1"]:checked');
    let secondAnswer = document.querySelector('input[name="btnradio2"]:checked');
    let thirdAnswer = document.querySelector('input[name="btnradio3"]:checked');

    if (firstAnswer) {
        console.log("First answer selected:", firstAnswer.value);

    } else {
        console.log("First answer not selected");
    }

    if (secondAnswer) {
        console.log("Second answer selected:", secondAnswer.value);

    } else {
        console.log("Second answer not selected");
    }

    if (thirdAnswer) {
        console.log("Third answer selected:", thirdAnswer.value);

    } else {
        console.log("Third answer not selected");
    }

    if (firstAnswer.value == 3 && secondAnswer.value == 4 && thirdAnswer.value == 7) {
        document.getElementById('hostName').textContent = 'scap2024.batcave.net';
        document.getElementById('main').remove();
        document.getElementById('response').textContent = 'En el entramado de bifurcaciones y nodos, busca la senda donde la libertad aguarda. Un cambio sutil puede abrir puertas desconocidas. Explora con astucia el dominio de las versiones y encontrarás el camino hacia la libertad deseada.';
    } else {
        document.getElementById('response').textContent = 'Incorrecto';

    }
}
