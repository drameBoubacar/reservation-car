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
    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 50.064192, lng: -130.605469 },
        zoom: 3,
    });



    const center = { lat: 50.064192, lng: -130.605469 };
    // Create a bounding box with sides ~10km away from the center point
    const defaultBounds = {
        north: center.lat + 0.1,
        south: center.lat - 0.1,
        east: center.lng + 0.1,
        west: center.lng - 0.1,
    };
    const input = document.getElementById("search_input");
    const options = {
        bounds: defaultBounds,
        componentRestrictions: { country: "fr" },
        fields: ["address_components", "geometry", "icon", "name"],
        strictBounds: false,
        types: ["establishment"],
    };
    const autocomplete = new google.maps.places.Autocomplete(input, options);

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






$(".next").click(function() {
    $(".content").hide();
    $("#slider2").fadeIn();
    $("#slider2").css('display', 'flex');

});
$("#next2").click(function() {
    if (v.form()) {
        $("#slider2").hide();
        $("#step3").fadeIn(1000);
        $('.section_date').css('display', 'flex');
        $('.section_date').fadeIn(1000);
    }

});

$("#next3").click(function() {
    if (v.form()) {
        $("#slider3").hide();
        $("#slider4").css('display', 'flex');
        html.dataset.theme = `theme-green`;


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
    $('#preloader').fadeOut('3000');
}, 4000);


const loadingNumber = document.querySelector('#loadingNumber');
const loadingCircle = document.querySelector('.loading-circle');
let load = 0;

setInterval(updateLoader, 20);


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


    })
}

function saveDate() {
    var rentalDate = $('#rental_date').val();
    var returnDate = $('#return_date').val();
    $.ajax({
        type: "POST",
        url: "index.php?p=add_date",
        data: "rental_date=" + rentalDate + "return_date=" + returnDate,

    })
}



const html = document.querySelector('html');
html.dataset.theme = `theme-original`;

function switchTheme(theme) {
    html.dataset.theme = `theme-${theme}`;
}




const deg = 6;
const hour = document.querySelector(".hour");
const min = document.querySelector(".min");
const sec = document.querySelector(".sec");

const setClock = () => {
    let day = new Date();
    let hh = day.getHours() * 30;
    let mm = day.getMinutes() * deg;
    let ss = day.getSeconds() * deg;

    hour.style.transform = `rotateZ(${hh + mm / 12}deg)`;
    min.style.transform = `rotateZ(${mm}deg)`;
    sec.style.transform = `rotateZ(${ss}deg)`;
};

// first time
setClock();
// Update every 1000 ms
setInterval(setClock, 1000);






if (currentTheme) {
    document.documentElement.setAttribute("data-theme", currentTheme);
    switchModeBtn.textContent = currentTheme;
}