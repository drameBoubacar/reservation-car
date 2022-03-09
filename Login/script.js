const voitureAllume = document.getElementById('carOn');
const voitureEteint = document.getElementById('carOff');
const submit = document.getElementById('submit');
const form = document.getElementById('form')


submit.addEventListener("click", function() {
    voitureEteint.style.display = 'none';
    voitureAllume.style.display = "flex";
    voitureAllume.style.transition = "1s";
    console.log('click');
});