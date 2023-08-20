document.addEventListener('DOMContentLoaded', function() {
    var nameNick = document.getElementById('name_nick');
    var navbarDropdownBox = document.getElementById('navbar_dropdown_box');

    nameNick.addEventListener('click', function() {
        navbarDropdownBox.classList.toggle('show');
    });
});
