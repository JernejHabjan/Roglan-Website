/*navbar fixed after scroll*/
$(window).scroll(function () {
    if ($(this).scrollTop() >= $('.container').height()) {
        $('.navbar').css({
            'position': 'fixed',
        });
        $('.main').css({
            'margin-top': $('.navbar').height()
        });
    } else {
        $('.navbar').css({
            'position': 'initial'
        });
        $('.main').css({
            'margin-top': '0'
        });
    }
});

// ===== Scroll to Top Button ==== 
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function () {      // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0                       // Scroll to top of body
    }, 500);
});


// LOGIN
window.onload = function () {
    /* DA NALOADAŠ PROFIL
  document.getElementById('alltext').onsubmit = function() {
    document.getElementById("alltext").value += usrname.value;*/
};

function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    var y = document.forms["myForm"]["password"].value;
    if (x == null || x == "" || y == null || y == "") {
        alert("Name and password must be filled out");
        return false;
    }
}


jQuery(document).ready(function ($) {
    /*
   var userName = $("#sessionOrigin").text();

   if (userName !="\n"){
     $('#loginButton').css({
         'display':'none'
     });
     $("#profileButton").text("Dobrodošli: " + userName);
   }else{
     $('#profileButton').css({
         'display':'none'
     });
     $("#loginButton").text("Prijavite se");
   }

   */
    $("#loginButton").text("Prijavite se");
});


//IZDELKI SLIDESHOW\\


function checkForButtonsOnOff() {

    if ($('#divContainer').width() + parseInt($(".container").css('marginLeft')) + $('#buttonright').width() < $('#everything').width()) {
        $('#buttonright').css({
            'display': 'none'
        });
        $('#buttonleft').css({
            'display': 'none'
        });
    } else {
        $('#buttonright').css({
            'display': 'initial'
        });
        $('#buttonleft').css({
            'display': 'initial'
        });
    }
}


$(window).resize(function () {
    checkForButtonsOnOff();

});


$(document).ready(function () {
    checkForButtonsOnOff();/*ob initu preveriš za gumbe*/


    $("#buttonright").click(function () {
        if ($('#divContainer').width() + parseInt($(".container").css('marginLeft')) + $('#buttonright').width() >= $('#everything').width()) {/*če div večji od  širine bodyja*/
            var positionDiv = $("#divContainer").position().left - parseFloat($(".container").css('marginLeft'));
            var toMove = $("#divContainer").width();
            var newLeft = positionDiv + toMove;


            var $el = $('#divContainer');
            var maxLeft = $el.position().left - $(".header-logo").width();
            newLeft = newLeft < 0 ? 0 : newLeft > maxLeft ? maxLeft : newLeft;
            if (newLeft > -$("#divContainer").width() + $(".header-logo").width()) {
                $el.animate({left: newLeft});
            } else {
                if (newLeft > -$("#divContainer").width()) {
                    $el.animate({left: -$("#divContainer").width() + $(".header-logo").width()});  /*da ga zamakne za čist mal*/
                }
            }

        }


    });
    $("#buttonleft").click(function () {
        var $el = $('#divContainer');
        newLeft = $el.position().left + $(".header-logo").width();
        if (newLeft < 0) {
            $el.animate({left: newLeft});
        } else {
            $el.animate({left: 0}); /*drugače ga reseta na nulo*/
        }
    });
});


/*slider*/
$(function () {
    $('#divContainer').slider();
});

$.fn.slider = function () {

    return this.each(function () {
        var $el = $('#divContainer');
        var $el1 = $('#leftRightMover');
        $el.css('left', 0);
        var dragging = false;
        var startX = 0;
        var startT = 0;
        $el1.mousedown(function (ev) {
            dragging = true;
            startX = ev.clientX;
            startT = $el.css('left');
        });
        $(window).mousemove(function (ev) {
            if (dragging) {
                // calculate new left
                var newLeft = parseInt(startT) + (ev.clientX - startX);

                //stay in parent
                var maxLeft = $el.parent().width() - $el.width();
                newLeft = newLeft < 0 ? 0 : newLeft > maxLeft ? maxLeft : newLeft;


                var sirinaBodyja = ($(".main").width() - parseFloat($(".container").css('marginLeft')));
                if (sirinaBodyja < $("#divContainer").width()) {

                    $el.animate({left: newLeft});
                } else {
                    $el.css('left', newLeft);
                }

            }
        }).mouseup(function () {
            dragging = false;
        });
    });

};


/*expand div*/

$('#narocite').click(function () {
    if ($('#content2ID').hasClass('active')) {
        $('#content2ID').slideToggle().toggleClass('active');
    }
    $('#content1ID').slideToggle().toggleClass('active');

});

$('#kontaktirajte').click(function () {
    if ($('#content1ID').hasClass('active')) {
        $('#content1ID').slideToggle().toggleClass('active');
    }
    $('#content2ID').slideToggle().toggleClass('active');
});


/*dropdown on click*/

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function mydropdownFunction(element) {
    if ($("#" + element).is(":visible")) {
        var array = [$("#loginDropdown"), $("#profilQuickShow"), $("#izdelkiDropdown"), $("#domaciIzdelkiDropdown")];
        for (var i in array) {
            var container = array[i];
            container.hide();
        }
        $("#" + element).hide();
    } else {
        var array = [$("#loginDropdown"), $("#profilQuickShow"), $("#izdelkiDropdown"), $("#domaciIzdelkiDropdown")];
        for (var i in array) {
            var container = array[i];
            container.hide();
        }
        $("#" + element).show();
    }

}

// Close the dropdown if the user clicks outside of it
window.onclick = function (e) {


    if (!e.target.matches('.dropbtn')) {

        var array = [$("#loginDropdown"), $("#profilQuickShow"), $("#izdelkiDropdown"), $("#domaciIzdelkiDropdown")];
        for (var i in array) {
            var container = array[i];
            if (!container.is(e.target) && container.has(e.target).length === 0) {

                container.hide();
            }
        }

    }


};


/*NEW NAVIGATION BAR*/

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


/*SEARCHBAR TEST*/
document.getElementById('frmSearch').onsubmit = function () {
    window.location = 'http://www.google.com/search?q=site:yoursitename.com ' + document.getElementById('txtSearch').value;
    return false;
};