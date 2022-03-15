let slider = document.getElementById('slider1');
let boutton = document.getElementById('btn1');
let slider2 = document.getElementById('slider2');
let boutton2 = document.getElementById('btn2');


function hide() {
    document.getElementById("preloader").style.display = "none";
}

$(document).ready(function() {
    var boxWidth = $(".content").width();
    $(".slide-left").click(function() {
        $(".content").animate({
            width: 0
        });
    });
    $(".slide-right").click(function() {
        $(".content").animate({
            width: boxWidth
        });
    });
});


function toggleMenu() {
    var menuBox = document.getElementById("openmenu");
    if (menuBox.style.display == "block") { // if is menuBox displayed, hide it
        menuBox.style.display = "none";
    } else { // if is menuBox hidden, display it
        menuBox.style.display = "block";
    }
}

var searchInput = 'search_input';

$(document).ready(function() {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });


});

$(".trigger-menu expanded").click(function() {
    $("#slider2").fadeIn(1000);
    $(".progress-wrap").fadeIn(1000);
});


var v = $("#reservation_form").validate({
    rules: {
        adress: {
            required: true,
        }

    },
    errorElement: "span",
    errorClass: "error",
    errorPlacement: function(error, element) {
        error.insertBefore(element);
    }
});


// ----------PRELOADER----------------


setTimeout(function() {
    $('#preloader').fadeOut('4000');
}, 4000);

$(".next").click(function() {
    $(".content").hide();
    $("#slider2").fadeIn(1000);
    $("#slider2").css('display', 'flex');
    $(".progress-wrap").fadeIn(1000);
});
$("#next2").click(function() {
    if (v.form()) {
        $("#slider2").hide();
        $("#step3").fadeIn(1000);
        $('.progressbar-dots').removeClass('active');
        $('.progressbar-dots:nth-child(2)').addClass('active');
    }
});

$("#logo").on("click",
    function() {
        tl.restart();
    });

let tl = gsap.timeline();

tl.set(".cir", {
        scale: 0,
        transformOrigin: "center"
    })
    .set("#logo", {
        scale: 0.27,
        transformOrigin: "center",
        opacity: 0
    })
    .to(".cir", {
        ease: "back.out(3)",
        duration: 4,

        scale: gsap.utils.distribute({
            base: 1,
            amount: 3,
            from: "end",
        }),
        stagger: {
            each: 0.4,

        }
    })

setTimeout(function() {
    $('#preloader').fadeOut('4000');
}, 4000);


const loadingNumber = document.querySelector('#loadingNumber');
const loadingCircle = document.querySelector('.loading-circle');
let load = 0;

setInterval(updateLoader, 40);


function updateLoader() {
    load += (load < 100);
    loadingNumber.innerHTML = load;
    loadingCircle.style.background = 'conic-gradient(from 0deg at 50% 50%, rgba(111, 123, 247, 1) 0%, rgba(155, 248, 244, 1) ' + load + '%, #101012 ' + load + '%)'
}

function save() {
    var adress = $('#search_input').val();
    $.ajax({
        type: "POST",
        url: "index.php?p=add_adress",
        data: "adress=" + adress,
        success: function(msg) {
            alert('ok');
        }

    })
}