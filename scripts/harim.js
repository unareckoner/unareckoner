
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
function f1() {
    $('#pestana2').css('display', 'block');
    $('#pestana1').css('display', 'none');
    $('#resume1').css('display', 'block');
    $('#tit_tab2').removeClass('disable');
    $('#step2').addClass('active');    
}
function f2() {
    $('#pestana3').css('display', 'block');
    $('#pestana2').css('display', 'none');
    $('#resume2').css('display', 'block');
    $('#tit_tab3').removeClass('disable');
    $('#step3').addClass('active'); 
}
function f3() {
    $('#pestana4').css('display', 'block');
    $('#pestana3').css('display', 'none');
    $('#resume3').css('display', 'block');
    $('#tit_tab4').removeClass('disable');
    $('#step4').addClass('active'); 
}
function f4() {
    $('#pestana5').css('display', 'block');
    $('#pestana4').css('display', 'none');
    $('#resume4').css('display', 'block');
    $('#resume5').css('display', 'block');
    $('#tit_tab5').removeClass('disable');
    $('#step5').addClass('active'); 
}
function f5() {
    $('#pestana1').css('display', 'block');
    $('#pestana2').css('display', 'none');
    $('#pestana3').css('display', 'none');
    $('#pestana4').css('display', 'none');
    $('#pestana5').css('display', 'none');
    $('#tit_tab2').addClass('disable');
    $('#tit_tab3').addClass('disable');
    $('#tit_tab4').addClass('disable');
    $('#tit_tab5').addClass('disable');
}
function f6() {
    $('#pestana2').css('display', 'block');
    $('#pestana3').css('display', 'none');
    $('#pestana4').css('display', 'none');
    $('#pestana5').css('display', 'none');
    $('#tit_tab3').addClass('disable');
    $('#tit_tab4').addClass('disable');
    $('#tit_tab5').addClass('disable');
}
function f7() {
    $('#pestana3').css('display', 'block');
    $('#pestana4').css('display', 'none');
    $('#pestana5').css('display', 'none');
    $('#tit_tab4').addClass('disable');
    $('#tit_tab5').addClass('disable');
}
function f8() {
    $('#pestana4').css('display', 'block');
    $('#pestana5').css('display', 'none');
    $('#tit_tab5').addClass('disable');
}

function delete1() {
    $("#nsol").html($("#nsol").html().replace("(1)", "(0)"));
    $("#pricesol").html($("#pricesol").html().replace("<span>M$</span> 4,000.00", "<span>M$</span> 0.00"));
    $("#spansol").html($("#spansol").html().replace("(1)", "(0)"));
    $("#iva").html($("#iva").html().replace("<span>M$</span> 699.52", "<span>M$</span> 59.52"));
    $("#grantotal").html($("#grantotal").html().replace("<span>M$</span> 5071.52", "<span>M$</span> 431.52"));
    $("#grantotal").html($("#grantotal").html().replace("<span>M$</span> 5571.52", "<span>M$</span> 931.52"));
    $('#prod1').css('display', 'none');
    $('#head1').css('display', 'none');
}

function showcost() {
    $('#cost_shipping').css('display', 'block');
    $("#grantotal").html($("#grantotal").html().replace("<span>M$</span> 5071.52", "<span>M$</span> 5571.52"));
    $("#grantotal").html($("#grantotal").html().replace("<span>M$</span> 431.52", "<span>M$</span> 931.52"));
    $('#paso2').addClass('active');
}
// === END CART / CHECKOUT === //



// === DASHBOARD === //

function openCity(evt, menuDash) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(menuDash).style.display = "block";
    evt.currentTarget.className += " active";

    if ($('#content2').is(":visible")) {
        $(".btn_info").addClass("extra_active_info");
    }
    else {
        $(".btn_info").removeClass("extra_active_info");
    }


    if ($('#content4').is(":visible")) {
        $(".btn_orders").addClass("extra_active_orders");
    }
    else {
        $(".btn_orders").removeClass("extra_active_orders");
    }


    if ($('#content6').is(":visible")) {
        $(".btn_shipping").addClass("extra_active_shipping");
    }
    else {
        $(".btn_shipping").removeClass("extra_active_shipping");
    }


    if ($('#content6a').is(":visible")) {
        $(".btn_shipping").addClass("extra_active_shippinga");
    }
    else {
        $(".btn_shipping").removeClass("extra_active_shippinga");
    }


    if ($('#content7').is(":visible")) {
        $(".btn_invoice").addClass("extra_active_invoice");
    }
    else {
        $(".btn_invoice").removeClass("extra_active_invoice");
    }


    if ($('#content8').is(":visible")) {
        $(".btn_news").addClass("extra_active_news");
    }
    else {
        $(".btn_news").removeClass("extra_active_news");
    }

    if ($('#content11').is(":visible")) {
        $(".btn_orders").addClass("extra_active_ordersa");
    }
    else {
        $(".btn_orders").removeClass("extra_active_ordersa");
    }
}
function removelist1() {
    $('#suggest1').css('display', 'none');
}
function removelist2() {
    $('#suggest2').css('display', 'none');
}
function removelist3() {
    $('#suggest3').css('display', 'none');
}
function removeprod1() {
    $('#prod1').css('display', 'none');
}
function removeprod2() {
    $('#prod2').css('display', 'none');
}
function removeprod3() {
    $('#prod3').css('display', 'none');
}
function removeprod4() {
    $('#prod4').css('display', 'none');
}
function removeprod5() {
    $('#prod5').css('display', 'none');
}
function addlistcart(){
    $('#bloqueaddcarrito').show();
    $('#bloqueaddcarrito .opacity').show();
    $('#bloqueaddcarrito .cont_popup_add').show();
}

function closeaddlistcart(){
    $('#bloqueaddcarrito').hide();
    $('#bloqueaddcarrito .opacity').hide();
    $('#bloqueaddcarrito .cont_popup_add').hide();
}


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

function dispayRegiser(){
    $('.third').toggleClass('open');
    $('.first').toggleClass('margin');
} 

function dispayPickadate(){
    $('.pickadate').toggleClass('open');
    $('.pickadate').toggleClass('margin');
} 


// === FAST REGISTER === //
function showpopupfast() {
    $('.fast_register').css('display', 'block');   
} 
function closepopupfast() {
    $('.fast_register').css('display', 'none');   
}


// === DETAIL SOLUTION === //
function selectall(){
    $('.mycheck').addClass('selected');
    $('#deselect').css('display', 'inline-block');
    $('#deselectbot').css('display', 'inline-block');
    $('#selectall').css('display', 'none');
    $('#selectallbot').css('display', 'none');
}
function deselect(){
    $('.mycheck').removeClass('selected');
    $('#deselect').css('display', 'none');
    $('#deselectbot').css('display', 'none');
    $('#selectall').css('display', 'inline-block');
    $('#selectallbot').css('display', 'inline-block');
}
function selectallbot(){
    $('.mycheck').addClass('selected');
    $('#deselectbot').css('display', 'inline-block');
    $('#deselect').css('display', 'inline-block');
    $('#selectallbot').css('display', 'none');
    $('#selectall').css('display', 'none');
}
function deselectbot(){
    $('.mycheck').removeClass('selected');
    $('#deselectbot').css('display', 'none');
    $('#selectallbot').css('display', 'inline-block');
}
function selectall1(){
    $('#tab1 .mycheck').addClass('selected');
}
function selectall2(){
    $('#tab2 .mycheck').addClass('selected');
}
function selectall3(){
    $('#tab3 .mycheck').addClass('selected');
}
function agregarcarrito(){
    $('#bloqueaddcarrito').show();
    $('#bloqueaddcarrito .opacity').show();
    $('#bloqueaddcarrito .cont_popup_add').show();
}
function cerrarpopupadd(){
    $('#bloqueaddcarrito').hide();
    $('#bloqueaddcarrito .opacity').hide();
    $('#bloqueaddcarrito .cont_popup_add').hide();
}



           

