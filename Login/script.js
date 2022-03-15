$('document').ready(function() {
    $('#submit').click(function log() {
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();
        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: "username=" + username + "password=" + password,
            success: function(resp) {
                var voitureA = $('#carOn');
                var voitureE = $('#carOff')
                voitureA.css({
                    display: 'flex',
                    transition: 'fadeIn(1000)'
                })
                if (voitureA) {
                    voitureE.css({
                        display: 'none',
                    })
                }

            }

        })
    })

})