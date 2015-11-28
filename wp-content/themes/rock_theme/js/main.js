jQuery(document).ready(function(){
	'use strict';

    jQuery(window).load(function(){
        jQuery(".loader").fadeOut("slow");
    });


	//background image
	jQuery.backstretch('images/togalakefade3.png');

	// waypoint for fixed nav
	jQuery('#onePointFivePage').waypoint(function() {
		jQuery('#fixNav').toggle(700);
		jQuery('body').removeClass('bMargin');
		jQuery('#totalBox').toggle();
		jQuery('#shrinkLogo').toggleClass('shrinkLogo');
	});
	jQuery('#onePointFivePage').waypoint(function() {
		jQuery('#upArrow').toggle(200);
	});
	jQuery('#onePointFivePage').waypoint(function() {
		// jQuery('#fixNavDrop').hide(200);
	});



	jQuery('#onePointFivePage').waypoint(function(){
		jQuery('#explore').fadeToggle();
		// jQuery('#introInfo').fadeToggle(1000);
		jQuery('.socialHead').fadeToggle(100);
		jQuery('#introInfo').toggleClass('introAnimate');
		jQuery('#explore').toggleClass('exploreAnimate');
		}, {
		offset: '100%'
	});


	jQuery('#secondPage').waypoint(function(){
		jQuery('#introInfo').fadeToggle(10);
		// jQuery('#explore').fadeToggle(200);
	});





	//scroll away go back to works original page
	jQuery('#thirdPage').waypoint(function() {
		jQuery('.workingJRV').hide();
		jQuery('.workingJRW').hide();
	    jQuery('.workingNLS').hide();
	    jQuery('.workingPD').hide();
	    jQuery('.working').show();
	}, {
		offset: '100%'
	});

	// jQuery('#secondPage').waypoint(function(){
	// 	jQuery('#introInfo').fadeToggle(500);
	// 	jQuery('#introBackground').fadeToggle(500);
	// 	jQuery('header').fadeToggle(900);




	// }, {
	// 	offset: '100%'
	// });


// ************IMPORTANT*************************)

	jQuery('#onePointFivePage').waypoint(function(){
		jQuery('#headerContainer').toggleClass("newHead");
		jQuery('#totalBox').toggleClass("logoBox");
        jQuery('#fixedMenu').hide(200);

	});


	jQuery("#nav-toggle").on('click', function(){
		jQuery('#fixedMenu').slideToggle(200);
		jQuery('#nav-toggle-box').toggleClass('nav-toggle-box');

	});

	jQuery("#fixedMenu a li").on('click', function(){
		jQuery('#fixedMenu').slideToggle(200);
		jQuery('#bunOne').toggleClass("active");
  		jQuery('#bunTwo').toggleClass("active");
  		jQuery('#burger').toggleClass("active");
  		jQuery('#nav-toggle-box').toggleClass('nav-toggle-box');
	});



	document.querySelector( "#nav-toggle" ).addEventListener( "click", function() {
  		this.classList.toggle( "active" );
  		jQuery('#bunOne').toggleClass("active");
  		jQuery('#bunTwo').toggleClass("active");
  		jQuery('#burger').toggleClass("active");
	});



	// jQuery('#thirdPage').waypoint(function(){
		// jQuery('.design').toggleClass("infoBoxInline");
		// jQuery('#design').slideToggle(900);
		// jQuery('.development').toggleClass("infoBoxInline");
		// jQuery('#development').delay(500).slideToggle(900);
		// jQuery('.branding').toggleClass("infoBoxInline");
		// jQuery('#branding').delay(500).slideToggle(900);

	// 	jQuery('#info').slideToggle(900);

	// }, {
	// 	offset: '100%'
	// });



	// jQuery('.continueReading').waypoint(function(){
		// jQuery('.design').toggleClass("infoBoxInline");
		// jQuery('#design').slideToggle(900);
		// jQuery('.development').toggleClass("infoBoxInline");
		// jQuery('#development').delay(500).slideToggle(900);
		// jQuery('.branding').toggleClass("infoBoxInline");
		// jQuery('#branding').delay(500).slideToggle(900);

	// 	jQuery('.me').fadeToggle(1100);

	// }, {
	// 	offset: '100%'
	// });


	jQuery('.me').waypoint(function(){
		jQuery('.onePointFivePage h1').fadeToggle(3000);

	}, {
		offset: '100%'
	});


	jQuery('body').waypoint(function(){
		jQuery('#firstPage img').show(3000);


	});

	jQuery('#twoPointFivePage').waypoint(function(){
		jQuery('.continueReading').show();

	}, {
		offset: '100%'
	});





	// continue reading button
	jQuery('.continueReading a').on('click', function(){
		jQuery('.moreMe').slideToggle(2000);
	});
	jQuery('.closeBox').on('click', function(){
		jQuery('.moreMe').slideToggle(1000);
	});



	//hide/show social drop box
	jQuery('#stickySocial').on('click', function(){
		jQuery('#socialDrop').show();
	});
	jQuery('#stickyHome').on('click', function(){
		jQuery('#socialDrop').hide();
	});
	jQuery('#stickyOne').on('click', function(){
		jQuery('#socialDrop').hide();
	});
	jQuery('#stickyTwo').on('click', function(){
		jQuery('#socialDrop').hide();
	});
	jQuery('#stickyThree').on('click', function(){
		jQuery('#socialDrop').hide();
	});





	 // fix nav drop menu / hamburger icon
	jQuery('#hamburger').on('click', function(){
		jQuery('#fixNavDrop').fadeToggle();
		// jQuery('#fixNavDrop').next().animate({width: 'toggle'})
		// jQuery('#fixNav').slideToggle();
		// jQuery('#hamburger').css('color', '#fff');
		jQuery('#hamburger').toggleClass('hamColor');
		// jQuery('body').toggleClass('bMargin');

	});
	jQuery('#goTop').on('click', function(){
		jQuery('#fixNavDrop').hide(200);
		jQuery('#hamburger').toggleClass('hamColor');
	});
	jQuery('#stickyOne').on('click', function(){
		jQuery('#fixNavDrop').hide(200);
		jQuery('#hamburger').toggleClass('hamColor');
	});
	jQuery('#stickyTwo').on('click', function(){
		jQuery('#fixNavDrop').hide(200);
		jQuery('#hamburger').toggleClass('hamColor');
	});
	jQuery('#stickyThree').on('click', function(){
		jQuery('#fixNavDrop').hide(200);
		jQuery('#hamburger').toggleClass('hamColor');

	});
	jQuery('#closeNav').on('click', function(){
		jQuery('#fixNavDrop').fadeToggle();
		// jQuery('#fixNav').slideToggle();
		// jQuery('body').toggleClass('bMargin');
		jQuery('#hamburger').toggleClass('hamColor');
	});



	// smooth scrolling on nav clicks
	jQuery('#firstPage header nav ul a').click(function(){
		var tabsId = jQuery(this).attr('href');
		jQuery('body, html').animate({scrollTop: jQuery(tabsId).offset().top}, 'slow');
		return false;
	});
	jQuery('body a').click(function(){
		var tabsId = jQuery(this).attr('href');
		jQuery('body, html').animate({scrollTop: jQuery(tabsId).offset().top}, 'slow');
		return false;
	});








});
