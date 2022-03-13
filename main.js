let slider = document.getElementById('slider1');
let boutton = document.getElementById('btn1');
let slider2 = document.getElementById('slider2');
let boutton2 = document.getElementById('btn2');



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


$(".reser").click(function() {
    $(".account").css('transform', 'translateY(0%)');
    $(".navmenu").fadeIn(1000);
    $("#close").fadeIn(1000);
    $(".info").hide();
    $(".content").css('transform', 'translateX(-200%)');
});

$("#close").click(function() {
    $(".account").css('transform', 'translateY(250%)');

});

$(".next").click(function() {
    $(".content").hide();
    $("#slider2").fadeIn(1000);
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

function save() {
    var adress = $('#search_input').val();
    $.ajax({
        type: "POST",
        url: "index.php?p=add_adress",
        data: "adress=" + adress,
        success: function(msg) {
            alert('success');
        }

    })
}