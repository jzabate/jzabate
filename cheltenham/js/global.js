/*
* GLOBAL TOOLS AND UTILITIES SCRIPTS
* Place all custom js/jquery scripts here.
*/

/* Initialize and/or execute, code jQuery Scripts here */
jQuery( function($) {

	 /* Initialize plugins to execute */
	var header_fa = $( 'header.header div.bar div.bar__main div.bar__title i.fa' ),
		side_nav_fa = $( '#side-nav div.bar div.bar__main div.bar__title i.fa' ),
		page_overlay = $( '<div class="page-overlay" />' ),
		side_nav = $( '#side-nav' );
	
	$( document ).ready( function() {
		console.log( 'document ready' );
		var body_height = $( 'body' ).height();
		
		$( 'body' ).removeAttr( 'style' );
		$( '.bar__chapter' ).hide();
		$( '#side-nav' ).height( body_height );
		$( '#side-nav' ).hide();
		//$( '.wrap header.header.inner .bar__logo' ).show();
	});

	$( window ).load(function(){
		$( '.bar__chapter' ).hide();
	});

	var $body = $('body'),
		htmlbody = $('html, body'),
		duration = 500,
		$slide = $('.homeSlide')

	//FadeIn all sections   
	$body.imagesLoaded( function() {
		setTimeout(function() {
		      
		      // Init navigation
		      navigationMenu();
		      
		      // Fade in sections
			  $body.removeClass('loading').addClass('loaded');
			  
		}, 800);
	});
	
	var s = skrollr.init({
        render: function( data ) {
            //Debugging - Log the current scroll position.
            //console.log( data.curTop );
            //console.log( 'data: ' + data );

			var bar_logo = $( 'header.header .bar__logo' ),
				bar_chapter = $( 'header.header .bar__chapter' );
			
			//bar_chapter.hide();

			if( data.curTop > 100 ) {
				if( $( '.header.inner' ).length ) {
					bar_logo.show();
				} else {
					bar_logo.hide();	
				}
				
				bar_chapter.show();

				bar_chapter.find('bar__controls')
					.next('div.bar__up')
					.next('span.arrow-up.disable')
					.click(function(e) {
						e.preventDefault();
					}).css( "cursor", "default" );
				$( 'span.title-text' ).html('The Track');

			} else {
				bar_logo.show();
				bar_chapter.hide();
			}

			// jockeys section
			if( data.curTop > 912 ) {
				$( 'span.title-text' ).html('The Jockeys');
			}

			if( data.curTop > 4845 ) {
				$( 'span.title-text' ).html('The Trainers');
			}		

			if( data.curTop > 7814 ) {
				$( 'span.title-text' ).html('The Horses');
			}		
        }
    });

	header_fa.click(function() {
		console.log( 'header button clicked.' );
		side_nav.animate({
			width: 'toggle'
		}, 325 );
		
		side_nav.addClass( 'active' );
		page_overlay.insertBefore( $( '#content-area' ) );
	});
	
	side_nav_fa.click(function() {
		console.log( 'side nav button clicked.' );
		if( side_nav.hasClass( 'active' ) ) {
			side_nav.animate({
				width: 'toggle'
			}, 325 );
		}
		page_overlay.remove();
	});

	function navigationMenu() {

		var homeSlides = $('.homeSlide'),
		 	slidesCount = $(homeSlides).length,
		 	activeSlide = 1;

		// Navigation highlighting
		var $activeSlide = $('#activeSlide'),
			$maxSlides = $('#maxSlides'),
			$numberOfSlides = parseInt($maxSlides.text()),
			slideNavPrev = $(''),
			$slideNavNext = $('.slideNavNext'),
			$slideNavPrev = $('.slideNavPrev'),
			$sideBarNav = $('#side-nav ul li a');

		// Highlight the section currently scrolling DOWN
		homeSlides.waypoint(function(direction) {
		  if (direction === 'down') {
		    var index = $(this).index();
			var index = index+1;
			$activeSlide.text(index);
			showHideNavItems();
		  }
		}, { offset: '50%' });

		// Highlight the section currently scrolling UP
		homeSlides.waypoint(function(direction) {
		  if (direction === 'up') {
			var index = $(this).index();
			var index = index+1;
			$activeSlide.text(index);
			showHideNavItems();
		  }
		}, {
		  offset: function() {
		    // This is the calculation that would give you
		    // "bottom of element hits middle of window"
		    return $.waypoints('viewportHeight') / 2 - $(this).outerHeight();
		  }
		});

		//Fade out unnecesary nav items
		function showHideNavItems(){
			var $activeSlideNumber = parseInt($activeSlide.text());

				$activeSlide.html( $activeSlideNumber );
				$maxSlides.html(slidesCount);
			
			if($activeSlideNumber == 1){
			
				//$slideNavNextA.removeAttr('class');
				$slideNavPrev.animate({opacity: 0.25}).addClass('disabled');
				
			} else if ($activeSlideNumber == $numberOfSlides) {
			
				//$slideNavPrevA.removeAttr('class');
				$slideNavNext.animate({opacity: 0.25}).addClass('disabled');
				
			} else {
				
				$slideNavNext.add($slideNavPrev).animate({opacity: 1});
				//$slideNavPrev.removeClass('disable');
				//$slideNavNextA.add($slideNavPrevA).removeAttr('class');
				
			}
		}	

		//Next slide
		$slideNavNext.click(function (e) {
			console.log('next clicked.');

		    e.preventDefault();
		    var index = parseInt($activeSlide.text());
		    var maxSlides = parseInt( $maxSlides.html() );

		    index++;
		    if(index <= maxSlides){
				scrollToSlide(index);
		    }
		});
		
		//Prev slide
		$slideNavPrev.click(function (e) {
		    e.preventDefault();
		    var index = parseInt($activeSlide.text());
		    index--;
		    if(index > 0){
		        scrollToSlide(index);
		    }
		});
	    
		$sideBarNav.click(function (e) {
			e.preventDefault();
			$("html, body").animate({ 
				scrollTop: $( "#content-area > " + $( this ).attr('href') ).offset().top 
			}, 1000);
		});
	    
		function scrollToSlide(slideId){
			console.log('slideId: ' + slideId );
			// Custom slide content offset
		    var customSlideOffset = $("#slide-"+slideId).attr('data-content-offset');
		    
		    // Scroll to the top of a container if it doesn't have custom offset defined
		    if(typeof customSlideOffset === 'undefined'){
		        
		        htmlbody.animate({scrollTop: ($("#slide-"+slideId).offset().top) + 'px'},'slow');
		        
		    } else {
		        
		        // Convert percentage 'eg. 25p' into pixels
		        if(customSlideOffset.indexOf('p')!=-1) {
			       
			       var customSlideOffset = parseInt(customSlideOffset.split('p')[0]);
				   var slideHeight = $slide.height();
				   
				   customSlideOffset = Math.ceil((slideHeight/100) * customSlideOffset);
				   
				   //console.log(slideHeight +' '+ customSlideOffset);
				   
				   htmlbody.animate({scrollTop: ($("#slide-"+slideId).offset().top + customSlideOffset) + 'px'},'slow');
			        
		        } else {
			       
			       var customSlideOffset = parseInt(customSlideOffset);
			       
			       htmlbody.animate({scrollTop: ($("#slide-"+slideId).offset().top + customSlideOffset) + 'px'},'slow');
			        
		        }
		    
		    }
		}
	}

});

/*
* END OF FILE
* global.js
*/