// HTML document is loaded
jQuery(window).on("load", function(){     
 "use strict";

  // var preloader
  var loader = $('.preloader, .preloader-dark');
  var bgpreloader = $('.bg-preloader, .bg-preloader-dark');

  // var navigation
  var menublock = $('#menu-block');
  var menumobile = $('#main-menu');
  var navdefault = $('.navbar-default');
  var sTick = $(".navbar-fixed-top");
  var navicon = $('#nav-icon');
  var dropdwown = $(".dropdown-container");
  var blockmain = $(".block-main");
  var menuline = $(".menu-line, .menu-line1, .menu-line2");

  //contactform var
  var contactname = $('#name-contact');
  var contactemail = $('#email-contact, input#email-contact');
  var contactmessage = $('#message-contact');
  var contactsent = $('#send-contact');
  
  //form failed succes var
  var successent = $("#mail_success");
  var failedsent = $("#mail_failed");

  //totop var
  var totop = $('#totop');
  var bodyScroll = $('html,body');

// start function
loader.fadeOut('slow', function() {	
 "use strict";

 // opening site
 bgpreloader.fadeOut(1000);
 $('body').fadeIn('slow');
 
        // animated transition & scroll onStep
        onStep();

});
// end function

      // menu
	  $(window).scroll(function() {
        if ($(document).scrollTop() > 150) {
			sTick.addClass("sticky-nav");
            totop.fadeIn(300);
        }
        else {
			 sTick.removeClass("sticky-nav");
             totop.fadeOut(300);
        }
		
    });
	$(document).height(function() { 
		if ($(document).scrollTop() > 150) {
			sTick.addClass("sticky-nav");
            totop.fadeIn(300);
        }
        else {
			 sTick.removeClass("sticky-nav");
             totop.fadeOut(300);
        }							   
	 });  
    
	// totop
    totop.on("click", function(e) {
        e.preventDefault();
        bodyScroll.animate({
            scrollTop: 0
        }, 600);
    });
	
	// mobile icon
    $(".navbar-toggle").on("click", function() {
      menumobile.toggleClass('menu-show');
      navdefault.toggleClass('fullHeight');
    });
	
	// full block menu
	navicon.on("click", function(e) {
		menublock.toggle('slide', {
            direction: 'right'
        }, 600);
		$(this).toggleClass('open');
		blockmain.fadeToggle(300);
		menuline.toggleClass('black');
		$('.init-menu').each(function(i){
        var t = $(this);
        setTimeout(function(){ 
		t.toggleClass('show-menu'); 
		}, (i+1) * 150);
		  });
       });
	
	// block-main close block menu
	blockmain.on("click", function(e) {
    $(this).fadeToggle(300);
	menublock.toggle('slide', {
            direction: 'right'
        }, 600);
		navicon.toggleClass('open');
		menuline.toggleClass('black');
		$('.init-menu').each(function(i){
        var t = $(this);
        setTimeout(function(){ 
		t.toggleClass('show-menu'); 
		}, (i+1) * 150);
		  });
   });
	
	
	//dropdown
	 $('.dropdown').each(function() {
     var $dropdown = $(this);
     $("a.dropdown-link", $dropdown).on('click', function(e) {
      e.preventDefault();
      var $div = $(".dropdown-container", $dropdown);
      $div.slideToggle('fast');
      dropdwown.not($div).slideUp('fast');
      return false;
    });
   });
    
  $('html').on("click", function(e) {
    dropdwown.slideUp('fast');
  });
  
  
 // contact form
 $(function(){$('#send').on('click', function(e) {
 e.preventDefault();var e=$('#name').val(),a=$('#email').val(),s=$('#message').val(),r=!1;if(0==a.length||"-1"==a.indexOf("@")||"-1"==a.indexOf( ".")){var r=!0;$("#error_email").fadeIn(500)}else $("#error_email").fadeOut(500);if(0==s.length){var r=!0;$("#error_message").fadeIn(500)}else $( "#error_message").fadeOut(500);return 0==r&&($("#send").attr({disabled:"true",value:"Loading..."}),$.ajax({type:"POST",url:"send.php",data:"name="+e+"&email="+a+"&subject=You Got Email&message="+s,success:function(e){"success"==e?($(".smart-btn").remove(),$("#mail_success").fadeIn(500)):($("#mail_failed").html(e).fadeIn(500),$("#send").removeAttr("disabled").attr("value","send").remove())}})),!1})});
 

});
// HTML document is loaded end


// Document ready
jQuery(document).on("ready", function(){    
  								  								  
  // navigation slide up gallery
  var galnav = $('#opengal');
  var galclose = $('.nav-bottom-close, .btn-content');
  var maingall = $('.bottom-option');
  galnav.on('click', function(e) {
    $(this).fadeOut(500);
    maingall.slideDown(600);
  });
  // navigation slide down gallery
  galclose.on('click', function(e) {
    galnav.fadeIn(500);
    maingall.slideUp(500);
  });
  
  // navigation info gallery home
  var galinfo= $('.info-gal');
  var galinfoclose = $('.info-gal-close, .block-info-gal');
  var maininfogall = $('.main-info-gal');
  galinfo.on('click', function(e) {
    $(this).fadeOut(500);
    maininfogall.fadeIn(600);
  });
  // navigation slide down gallery
  galinfoclose.on('click', function(e) {
    galinfo.fadeIn(500);
    maininfogall.fadeOut(500);
  });
    
	$("a.link").on("click", function(e) {
		e.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(1000, redirectPage);		
	});
		
	function redirectPage() {
		window.location = linkLocation;
	}
	
/*************** Plugin Start ***************/ 

//slideshow background
var bgslideshow = $('#bgslideshow');
$(function() {
    var slideBegin = 5000,
        transSpeed = 900,
        simple_slideshow = bgslideshow,
        listItems = simple_slideshow.children('.imgbg, .imgbg-page'),
        listLen = listItems.length,
      i = 0,
      changeList = function() {
        listItems.eq(i).fadeOut(transSpeed, function() {
          i += 1, i === listLen && (i = 0), listItems.eq(i).fadeIn(transSpeed)
        })
      };
    listItems.not(':first').hide(), setInterval(changeList, slideBegin);
	
  });

// countDown
 $(function(){
 $('#given_date').countdowntimer({
  dateAndTime : "2019/01/01 00:00:00",
  size : "lg",
  regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})",
  regexpReplaceWith: "$1<span>days</span> $2<span>hours</span> $3<span>mnt</span> $4<span>sec</span>"
   });
 });
 
 
 // projects
  var $containerpro = $('#projects-wrap');
  $containerpro.isotope({
    itemSelector: '.item',
    filter: '*'
  });
  $('.filt-projects').on("click", function(e) {
    e.preventDefault();
    var $this = $(this);
    if ($this.hasClass('active')) {
      return false;
    }
    var $optionSetpro = $this.parents();
    $optionSetpro.find('.active').removeClass('active');
    $this.addClass('active');

    var selector = $(this).attr('data-project');
    $containerpro.isotope({
      filter: selector,
    });
    return false;
  });
  // layout Isotope after each image loads
  $containerpro.imagesLoaded().progress( function() {
  $containerpro.isotope('layout');
  });
 
 
   // Magnific Popup img
   $('.big-img').magnificPopup({
		delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: false,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        }
		
	});

   
  // owl slider home
  var time = 5; // time in seconds
  var owl = $("#owl-slider-home"),
      status = $("#owlStatus");
  var $progressBar,
    $bar,
    $elem,
    isPause,
    tick,
    percentTime;

  var projectsSmall = $("#projectsSmall");
  projectsSmall.owlCarousel({
    items: 5,
    itemsDesktop: [1366, 4],
    itemsDesktopSmall: [1024, 3],
    itemsTablet: [760, 2],
    itemsMobile: [414, 1],
    pagination: false,
    responsiveRefreshRate: 100,
    afterInit: function(el) {
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });

  $("#projectsSmall").on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).data("owlItem");
    owl.trigger("owl.goTo", number);
	galnav.fadeIn(500);
    maingall.slideUp(500);
  });

  function center(number) {
    var projectsSmallvisible = projectsSmall.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for (var i in projectsSmallvisible) {
      if (num === projectsSmallvisible[i]) {
        var found = true;
      }
    }

    if (found === false) {
      if (num > projectsSmallvisible[projectsSmallvisible.length - 1]) {
        projectsSmall.trigger("owl.goTo", num - projectsSmallvisible.length + 2)
      } else {
        if (num - 1 === -1) {
          num = 0;
        }
        projectsSmall.trigger("owl.goTo", num);
      }
    } else if (num === projectsSmallvisible[projectsSmallvisible.length - 1]) {
      projectsSmall.trigger("owl.goTo", projectsSmallvisible[1])
    } else if (num === projectsSmallvisible[0]) {
      projectsSmall.trigger("owl.goTo", num - 1)
    }
  }	
    

  // Init the carousel
  owl.owlCarousel({
	slideSpeed: 2000,
    paginationSpeed: 2000,
    pagination: false,
    singleItem: true,
    transitionStyle: 'fade',
    afterInit: progressBar,
    afterMove: moved,
	afterAction : afterAction,
    loop: true,
    autoHeight: true,
    touchDrag: false,
    mouseDrag: false,
    navigation: true,
    navigationText: [
        "<i class='fa fa-long-arrow-left'></i>",
        "<i class='fa fa-long-arrow-right'></i>"
        ]
    });
  
      function updateResult(pos,value){
        status.find(pos).find(".result").text(value);
      }
	  function afterAction(){
		var current = this.currentItem;
        $("#projectsSmall")
        .find(".owl-item")
        .removeClass("synced")
        .eq(current)
        .addClass("synced")
        if ($("#projectsSmall").data("owlCarousel") !== undefined) {
        center(current)
        }  
        updateResult(".owlItems", this.owl.owlItems.length);
        updateResult(".currentItem", this.owl.currentItem + 1);
      }

  // Init progressBar where elem is $("#owl-slider-home")
  function progressBar(elem) {
    $elem = elem;
    // build progress bar elements
    buildProgressBar();
    // start counting
    start();
  }

  // create div#progressBar and div#bar then prepend to $("#owl-slider-home")
  function buildProgressBar() {
    $progressBar = $("<div>", {
      id: "progressBar"
    });
    $bar = $("<div>", {
      id: "bar"
    });
    $progressBar.append($bar).prependTo($elem);
  }

  function start() {
    // reset timer
    percentTime = 0;
    isPause = false;
    // run interval every 0.01 second
    tick = setInterval(interval, 10);
  };

  function interval() {
    if (isPause === false) {
      percentTime += 1 / time;
      $bar.css({
        width: percentTime + "%"
      });
      // if percentTime is equal or greater than 100
      if (percentTime >= 100) {
        // slide to next item 
        $elem.trigger('owl.next')
      }
    }
  }

  // moved callback
  function moved() {
    // clear interval
    clearTimeout(tick);
    // start again
    start();
  }
  

/*************** Plugin end ***************/ 

    // set height background	 
    $(function() {function i() {
	  windowHeight = $win.innerHeight(), $(".mainbg").css("min-height", windowHeight)}i(), $win.resize(function() {i() })
    });

    // custom page background
	$('.h-bg').each(function(){	
		$(this).find(".image-container").css("height",jQuery(this).find(".image-container").parent().css("height"));
	});

});
// Document ready end


