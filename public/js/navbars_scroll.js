
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

function user_menu() {
    document.getElementById("user_dropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
    openDropdown.classList.remove('show');
}
}
}
}

    /* Set the width of the side navigation to 220px */
    function openLeftNav() {
    document.getElementById("leftSidenav").style.width = "220px";
    closeRightNav();

}

    /* Set the width of the side navigation to 0 */
    function closeLeftNav() {
    document.getElementById("leftSidenav").style.width = "0";

}

    function openRightNav() {
    document.getElementById("rightSidenav").style.width = "220px";
    closeLeftNav();

}

    /* Set the width of the side navigation to 0 */
    function closeRightNav() {
    document.getElementById("rightSidenav").style.width = "0";

}

    var btn_top = $('#go_to_top');
    var btn_go_back = $('#go_back');
    var pageYLabel = 0;

    $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
    btn_top.addClass('show');
    btn_go_back.removeClass('show');
} else {
    btn_top.removeClass('show');
    btn_go_back.addClass('show');
}

});

    btn_top.on('click', function(e) {
    e.preventDefault();
    pageYLabel = $(window).scrollTop();
    $('html, body').animate({scrollTop:0}, '300');

});

    btn_go_back.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:pageYLabel}, "slow");

})
