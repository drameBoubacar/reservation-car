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

let requete = new XMLHttpRequest();
requete.onload = function() {
    //La variable à passer est alors contenue dans l'objet response et l'attribut responseText.
    let username = this.responseText;
};
requete.open(get, login.php, true); //True pour que l'exécution du script continue pendant le chargement, false pour attendre.
requete.send();