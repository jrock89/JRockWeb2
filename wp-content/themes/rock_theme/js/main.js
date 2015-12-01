
(function() {

  'use strict';

  document.querySelector('.material-design-hamburger__icon').addEventListener(
    'click',
    function() {
      var child;


      // this.parentNode.nextElementSibling.classList.toggle('menu--on');

      child = this.childNodes[1].classList;

      if (child.contains('material-design-hamburger__icon--to-arrow')) {
        child.remove('material-design-hamburger__icon--to-arrow');
        child.add('material-design-hamburger__icon--from-arrow');
      } else {
        child.remove('material-design-hamburger__icon--from-arrow');
        child.add('material-design-hamburger__icon--to-arrow');
      }

    });

})();


jQuery(document).ready(function(){
	'use strict';

	var screenWidth = jQuery(window).width();
	console.log(screenWidth);




		jQuery('.inner_project_box').on('click', function(){

			var projectTitle = jQuery(this).closest('.project_box').find('h2').text();
			var projectInfo = jQuery(this).closest('.project_box').find('p').text();
			var projectImg = jQuery(this).closest('.project_box').find('img').attr('src');
			var projectTech = jQuery(this).closest('.project_box').find('i').text();
			var projectURL = jQuery(this).closest('.project_box').find('h3').text();

			jQuery('.work_info_box img').attr('src', projectImg);
			jQuery('.work_info_box h2').text(projectTitle);
			jQuery('.work_info_box p').text(projectInfo);
			jQuery('.work_info_box .tech_info').text(projectTech);
			jQuery('.work_info_box a').attr('href', projectURL);



			jQuery('.work_info_box, .work_info_box_mask').show();

		});
		jQuery('.work_info_box_mask, .close_info_box, .work_info_box a').on('click', function(){
			jQuery('.work_info_box, .work_info_box_mask').hide();
		});

		jQuery('.main_menu').on('click', function(){
			jQuery('.my_menu').toggleClass('my_menu_open');
			jQuery('.menu_pic').delay(400).fadeToggle();
			jQuery('.menu_items').delay(500).fadeToggle();
		});


			jQuery("#what_menu").click(function() {
				// if(screenWidth > 1200)
				// {
			    jQuery('html,body').animate({
			        scrollTop: jQuery("#latest-offers").offset().top},
			        'slow');

						// }

					// jQuery('.main_menu').click();

			});
			jQuery("#who_menu").click(function() {
					jQuery('html,body').animate({
							scrollTop: jQuery("#welcome").offset().top},
							'slow');

					// jQuery('.main_menu').click();
			});
			jQuery("#work_menu").click(function() {
					jQuery('html,body').animate({
							scrollTop: jQuery("#my_work").offset().top},
							'slow');

					// jQuery('.main_menu').click();
			});


			jQuery("#contact_menu").click(function() {
					jQuery('html,body').animate({
							scrollTop: jQuery("#contact").offset().top},
							'slow');

					// jQuery('.main_menu').click();
			});

			jQuery('.about_me img').on('mouseover', function(){
				jQuery('.about_me img').attr('src', 'http://jrockweb.com/wp-content/themes/rock_theme/images/me2.jpg');
			});
			jQuery('.about_me img').on('mouseleave', function(){
				jQuery('.about_me img').attr('src', 'http://jrockweb.com/wp-content/themes/rock_theme/images/me.png');
			});

			jQuery('.title_what h2').waypoint(function(){

				// if(screenWidth > 1200)
				// {
					// jQuery('.offer_1').fadeToggle('slow');
					// jQuery('.offer_2').delay(300).fadeToggle('slow');
					// jQuery('.offer_3').delay(600).fadeToggle('slow');
					// jQuery('.offer_4').delay(900).fadeToggle('slow');
				// }


				}, {
				offset: '100%'
			});





    jQuery(window).load(function(){
        jQuery(".loader").fadeOut("slow");
    });


	//background image
	// jQuery.backstretch('images/togalakefade3.png');

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
