jQuery(document).ready(function ($) {

	// $(function () {
	//

		console.log('test');

		skrollrStart();
		onscreenStart();
		skrollr.get().refresh();

		$('.o-button').addClass('-loaded');
			$('.c-header_main_logo_link').addClass('-loaded');
			$('.c-nav_main_item').addClass('-loaded');
			$('.c-header_img_contain').addClass('-loaded');

			//init skrollr on page load if not homepage
		//  if (window.location.href.indexOf('index') > -1) {
				languageChosen();
		//  }
			//else {
					skrollrStart();
					onscreenStart();
		 // }
		//  barbaStart();
			//scroll to top when top button clicked
			$('.c-header_scrolltop').click(function () {
					$('html,body').animate({
							scrollTop: 0
					}, 'slow');
			});
			//language switcher
			// $('.french, .english').click(function () {
			//     $('.c-loader_contain').remove();
					$('body').removeClass('-modal-open');
			//     languageChosen();
			//     skrollrStart();
			//     onscreenStart();
			// });
			$('#js-toggle_menu, .c-nav_main_list li a').click(function () {
					toggleNav();
			});
			//onscreen for mobile
			//var os = new OnScreen();
			//navigation height
			var toggleNav = function () {
							if ($(window).width() < 768) {
									el = $('#js-nav');
									button = $('#js-toggle_menu');
									if (!el.hasClass('menu_is_loaded')) {
											el.addClass('menu_is_loaded');
											button.addClass('menu_is_loaded');
									}
									else {
											el.removeClass('menu_is_loaded');
											button.removeClass('menu_is_loaded');
									}
							}
					}
					//open contact modal
			$('.c-main_right_contact').click(function () {
					if ($(this).hasClass('active')) {
							$(this).removeClass('active');
					}
					else {
							$(this).addClass('active');
							$('.modal-wrap, .mb-contain').addClass('visible').removeClass('hidden');
							$('body').addClass('-modal-open');
					}
			});
			//close contact modal
			$('.close-button').click(function () {
					$('.c-main_right_contact').removeClass('active');
					$('.modal-wrap, .mb-contain').addClass('hidden').removeClass('visible')
					$('body').removeClass('-modal-open');
			});
			pdfWatcher();


			var pdfWatcher = function () {
			        //load first pdf
			        var currentPdf = $('.pdf-wrap .img-contain');
			        //currentPdf.append('<img src="./images/pdfs/pdf-test.jpg" />');
			        //show pdpf on hover
			        $('.level2 .codes-list-item').mouseenter(function () {
			            // $('.pdf-wrap').fadeOut();
			            currentPdf.html('');
			            var dataTarget = $(this).find('a').attr('data-target');
			            currentPdf.append('<img src="' + dataTarget + '" />');
			            console.log(dataTarget);
			            $('.pdf-wrap .img-contain').fadeIn();
			        });
			        //download pdf
			        $('.codes-list-item a').click(function () {
			            var dataFile = $(this).attr('data-file');
			            // // hope the server sets Content-Disposition: attachment!
			            window.location = dataFile;
			        });
			    }
			    //stop page reload if on current page
			var links = document.querySelectorAll('a[href]');
			var cbk = function (e) {
			    if (e.currentTarget.href === window.location.href) {
			        e.preventDefault();
			        e.stopPropagation();
			    }
			};
			for (var i = 0; i < links.length; i++) {
			    links[i].addEventListener('click', cbk);
			}
			//skrollr start
			function skrollrStart () {
	        _skrollr = skrollr.get();
	        if (_skrollr) {
	            _skrollr.refresh();
	        }
	        else {
	            skrollr.init({
	                forceHeight: false
	            });
	        }
	    }
			    //onscreen start
			function onscreenStart () {
			    $('section').onScreen({
			        container: window
			        , direction: 'vertical'
			        , doIn: function () {
			            // Do something to the matched elements as they come in
			        }
			        , doOut: function () {
			            // Do something to the matched elements as they get off scren
			        }
			        , tolerance: 0
			        , throttle: 80
			        , toggleClass: 'in-vp'
			        , lazyAttr: null
			        , debug: false
			    });
			}

			function languageChosen() {
			    // $('.o-button').addClass('-loaded');
			    // $('.c-header_main_logo_link').addClass('-loaded');
			    // $('.c-nav_main_item').addClass('-loaded');
			    // $('.c-header_img_contain').addClass('-loaded');
			}
			//Switch header look and feel when scrolled
			var header = $('.c-header');
			$(window).scroll(function () {
			    var scroll = $(window).scrollTop();
			    if (scroll >= 50) {
			        header.removeClass('c-header_static').addClass('c-header_scrolled');
			    }
			    else {
			        header.removeClass('c-header_scrolled').addClass('c-header_static');
			    }
			});



	});
