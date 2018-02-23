
// === CART / CHECKOUT === //
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
        if (panel.style.display === "none") {
            panel.style.display = "block";
        } else {
            panel.style.display = "none";
        }
    }
}


/// MENU ////

function menu_open(){
	$('.hamburger').toggleClass('open');
	if ($(".open")[0]){
		$('.menu-mobile').css('display', 'block');
		$('nav').css('class', 'nav_open');
	} else {
		$('.menu-mobile').css('display', 'none');
	}
}

function submenu_open(){
    $('.menulv2').stop(true, true).fadeIn().delay(300);
}
function submenu_close(){
    $('.menulv2').stop(true, true).delay(300).fadeOut();
}
function display_minicart(){
    $('.mini-cart').toggleClass('open');
}
function hide_menu1(){
    $('#unregistered').css('display', 'none');
    $('#login').css('display', 'block');
    //$('#branding').addClass('col-md-6').removeClass('col-md-5');
}

function show_menu1(){
    $('#unregistered').css('display', 'block');
    $('#login').css('display', 'none');
    //$('#branding').removeClass('col-md-5').addClass('col-md-5');
}


function goelbowmenu() {
    window.location.href = 'html/padecimientos.php';
}



/// PADECIMIENTOS ////
function goelbow() {
    $('#tab1 .panel').css('display', 'block');
    $('#tab1 h3 ').addClass('active');
    $('html, body').animate({
        scrollTop: $("#tab1").offset().top
    }, 1000);
}
function goshoulder() {
    $('#tab2 .panel').css('display', 'block');
    $('#tab2 h3 ').addClass('active');
    $('html, body').animate({
        scrollTop: $("#tab2").offset().top
    }, 1000);
}
function gofoot() {
    $('#tab3 .panel').css('display', 'block');
    $('#tab3 h3 ').addClass('active');
    $('html, body').animate({
        scrollTop: $("#tab3").offset().top
    }, 1000);
}
function goknee() {
    $('#tab4 .panel').css('display', 'block');
    $('#tab4 h3 ').addClass('active');
    $('html, body').animate({
        scrollTop: $("#tab4").offset().top
    }, 1000);
}
function gowirst() {
    $('#tab5 .panel').css('display', 'block');
    $('#tab5 h3 ').addClass('active');
    $('html, body').animate({
        scrollTop: $("#tab5").offset().top
    }, 1000);
}   





           

