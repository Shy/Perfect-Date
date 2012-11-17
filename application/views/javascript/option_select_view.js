function updateSlider(sliderId) {
    var slider = document.getElementById(sliderId);
    var display = document.getElementById(sliderId + '_display');
    display.innerHTML = slider.value;
}
