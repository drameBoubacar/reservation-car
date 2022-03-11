let slider = document.getElementById('slider1');
let boutton = document.getElementById('btn1');
let slider2 = document.getElementById('slider2');
let boutton2 = document.getElementById('btn2');


boutton.addEventListener("click", function() {
    slider.style.display = 'none';
    slider2.style.display = 'flex';
});
boutton2.addEventListener("click", function() {
    slider2.style.display = 'none';
    slider.style.display = 'flex';
});