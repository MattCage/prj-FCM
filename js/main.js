// Oggetti da animare
var FCMLogo = $('img#fcm-logo');
var LCULogo = $('img#lcu-logo');
//var numeroVerde = $( '#numero-verde-container' );
//var fbLogo = $( '.fb-link' );
//var twLogo = $( '.tw-link' );
//var ytLogo = $( '.yt-link' );
var contatti = $( '.number-social-padding' );
var vociMenuPrincipale = $( '.navbar-nav > li' );
var titoloPagina = $('h1#page-title');

FCMLogo.hide();
LCULogo.hide();
//numeroVerde.hide();
//fbLogo.hide();
//twLogo.hide();
//ytLogo.hide();
contatti.hide();
vociMenuPrincipale.hide();

titoloPagina.css( 'padding-left', '300px' );
titoloPagina.animate({ opacity: 0 }, 0);

$(document).ready(function(){
	
	// Animazioni delle pagina
	"use strict";
	
	// Animo header e eventuale titolo
	FCMLogo.fadeIn( 'fast', function() {
		LCULogo.fadeIn( 'fast', function() {
			contatti.fadeIn( 'fast', function() {
				vociMenuPrincipale.fadeInEach( 'fast', function() {
					
					titoloPagina.animate({
						opacity: 1,
						paddingLeft: '0px'
					}, 'slow' );
					
				});
			});
		});
	});  
});

// Plugin fadeInEach
$.fn.fadeInEach = function( duration, callback ) {
	
	"use strict";
	
    function fadeIn( i, elements, duration, callback) {	
		
        if(i >= elements.length) {	
			typeof callback == 'function' && callback();
		}
		
        else {
			
            elements.eq( i ).fadeIn( duration, function() {
               fadeIn( i+1, elements, duration, callback );
            });
		
		}
    }
	
    fadeIn( 0, this, duration, callback );
    return this;
	
};