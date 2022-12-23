
 /* loader */
$(document).ready(function(){
    var o = $('#page-preloader');
    if (o.length > 0) {
        $(window).on('load', function() {
            $('#page-preloader').removeClass('visible');
        });
    }
});

//go to top
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
});


/* responsive menu */
 function openNav() {
    $('body').addClass("active");
    document.getElementById("mySidenav").style.width = "250px";
    jquery('#mySidenav').addCss("display","block");
}
function closeNav() {
    $('body').removeClass("active");
    document.getElementById("mySidenav").style.width = "0";
    jquery('#mySidenav').removeCss("display","none");
}

$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
       $('.menufull').addClass('fixed-header');
    }
    else {
       $('.menufull').removeClass('fixed-header');
    }
});

$(document).ready(function () {

    $('button.test').on("click", function(e)  {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});

$(document).ready(function(){
$("#pro-review, #pro-writereview").click(function() {
    $('html, body').animate({ scrollTop: $("#tab-review").offset().top }, 1000);
});
});

// function openSearch() {
//     $('body').addClass("active-search");
//     document.getElementById("search").style.height = "auto";
//     $('#search').addClass("sideb");
//     $('.search_query').attr('autofocus', 'autofocus').focus();
// }
// function closeSearch() {
//     $('body').removeClass("active-search");
//     document.getElementById("search").style.height = "0";
//     $('#search').addClass("siden");
//     $('.search_query').attr('autofocus', 'autofocus').focus();
// }

$(document).ready(function () {
    if ($(window).width() <= 767) {
    $('.xsac').appendTo('.xs-ac');
    $('.hwishc').appendTo('.acdrop');
    $('.head-compare').appendTo('.acdrop');
    // $('.curlan').appendTo('.acdrop');  
    $('.curlan').appendTo('.head-b-right');
}
});


/* sticky header */
  if ($(window).width() > 992) {
 $(document).ready(function(){
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.head-bg').addClass('fixed fadeInDown animated');
        } else {
            $('.head-bg').removeClass('fixed fadeInDown animated');
        }
      });
});
};
