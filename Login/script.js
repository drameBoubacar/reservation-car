var getHttpRequest = new XMLHttpRequest;
var form = document.querySelector('#form')

form.addEventListener('submit', function(e) {
    e.preventDefault()
    var data = new FormData(form)
    var xhr = getHttpRequest
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            var user = document.getElementById('username').value;
            var pass = document.getElementById('password').value;
            if (user != 'user' && pass != 1234) {
                var voiture_erreur = document.getElementById('carErr');
                const voitureEteint = document.getElementById('carOff');
                voitureEteint.style.display = 'none';
                voiture_erreur.style.display = 'flex';
            } else {
                const voitureAllume = document.getElementById('carOn');
                const voitureEteint = document.getElementById('carOff');
                var voiture_erreur = document.getElementById('carErr');
                voiture_erreur.style.display = 'none';
                voitureEteint.style.display = 'none';
                voitureAllume.style.display = "flex";
                voitureAllume.style.transition = "1s";
                setTimeout("location.href = '../index.php';", 4000);
            }

        }

    }
    xhr.open('POST', form.getAttribute('action'), true)
    xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest')
    xhr.send(data);
})