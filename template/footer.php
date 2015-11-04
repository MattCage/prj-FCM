        <!-- Piè di pagina -->
        <footer id="page-foot">
        
        	<!-- Copyright FCM -->
        	<div class="container-fluid">
            
            	<div class="row">
                
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 copyright-container">
                    
                    	<div class="footer-center">
                            
                            <div class="footer-fix">
                                <img class="img-responsive pull-left footer-logo footer-fcm-logo" src="img/fcm-logo.png" alt="Fondazione Children Media logo">
                                <a href="http://www.unilink.it" target="_blank"><img class="img-responsive pull-left footer-logo" src="img/lcu-logo.png" alt="Link Campus University logo"></a>
                                <div class="clearfix"></div>
                            </div>
                            
                            <span class="copyright-text">Fondazione Children Media © 2015, All Rights Reserved</span>
            			</div>
                    
                    </div>
                    
                </div>
                
            </div>
            
            <!-- Widgets -->
            <div class="container">
            
            	<div class="row">
                    
                    <!-- Info -->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-container" itemscope itemtype="http://schema.org/EducationalOrganization">
                    
                    	<h5 itemprop="name">Fondazione Children Media</h5>
                    	<ul class="fa-ul">
                        	<li><span class="fa-li fa fa-home" itemprop="address"></span>Via Adriano Olivetti 1, 80078 Pozzuoli, NA, Italy</li>
                        	<li><span class="fa-li fa fa-phone" itemprop="telephone"></span><a href="tel:800587750">800 587 750</a></li>
                        	<li><span class="fa-li fa fa-envelope" itemprop="email"></span><a href="mailto:info@fondazionechildrenmedia.it">info@fondazionechildrenmedia.it</a></li>
                        	<li><span class="fa-li fa">CF</span> 92074590644</li>
                        </ul>
                    
                    </div>
                    
                    <!-- Menu Secondario -->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-container">
                    
                    	<!-- Links -->
                        <div class="">
                        
                        	<h5>Quick Links</h5>
                            
                            <ul class="">
                                <li><a href="chi-siamo.php">Chi Siamo</a></li>
                                <li>
                                    <a href="#">Il Corso</a>
                                    <ul>
                                        <li><a href="offerta-formativa.php">Offerta Formativa</a></li>
                                        <li><a href="documenti/2015-2016/pds-2015-2016-animazione-videogiochi.pdf" target="_blank">Piano di Studi</a></li>
                                        <li><a href="calendario-accademico.php">Calendario Accademico</a></li>
                                    </ul>
                                </li>
                                <li><a href="docenti.php">Docenti</a></li>
                                <li><a href="segreteria.php">Segreteria</a></li>
                                <li><a href="iscriviti.php">Iscriviti</a></li>
                                <li><a href="contatti.php">Contatti</a></li>
                                <li><a href="http://www.playmont.it" target="_blank">Il Festival</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    
                    </div>
                    
                    <!-- Social -->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    
                    	<h5>Social</h5>
                        
                    		<div>
                                <a href="" class="social-icons"><span class="fa fa-facebook-square fa-3x"></span></a>
                                <a href="" class="social-icons"><span class="fa fa-twitter-square fa-3x"></span></a>
                                <a href="" class="social-icons"><span class="fa fa-youtube-play fa-3x"></span></a>
                            </div>
                    
                    </div>
                
                </div>
                
                <!-- Mio copyright --->
                <div class="row">
                    
                   	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                		<div id="my-copy">
                        	<a href="http://www.mattiabondrano.it" target="_blank" rel="author"><span>a BONDRANO design</span></a>
                        </div>
                    
                    </div>
                    
                </div>
            
            </div>
                
        </footer>
        
        <!-- EOL -->
        
		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins/layerslider.transitions.js" type="text/javascript"></script>
		<script src="js/plugins/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
        <script src="js/vendor/readmore.min.js"></script>
        <script src="js/main.js"></script>
        
        <!-- Banner initialization script -->
        <script>
			$('#layerslider').layerSlider({
                
                responsive:				false,
                responsiveUnder:		1920,
                layersContainer:		1920,
                pauseOnHover:			false,
                skin:					'noskin',
                skinsPath:				'/banner/skins/',
                globalBGColor:			'white',
                navStartStop:			'false',
                hoverBottomNav:			'true',
                thumbnailNavigation:	'disabled'
                
        	});
		</script>
        
        <script>
        
			if( $( window ).width() > 480 ) {
					
				$('.scheda-docente').readmore({
					moreLink: '<a href="#" class="readmorelink">Leggi di più</a>',
					lessLink: '<a href="#" class="readmorelink">Chiudi</a>',
					blockCSS: '',
				});
					
			}	
        
        </script>

    </body>
</html>