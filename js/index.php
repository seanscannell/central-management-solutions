<?php include 'header.php'; ?>
  
    <div id="homepage" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#homepage" data-slide-to="0" class="active"></li>
        <li data-target="#homepage" data-slide-to="1"></li>
        <li data-target="#homepage" data-slide-to="2"></li>
        <li data-target="#homepage" data-slide-to="3"></li>
        <li data-target="#homepage" data-slide-to="4"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <a data-toggle="lightbox" href="#myLightbox">
              <img src="img/banner-01.svg" type="image/svg+xml" />
          </a>
       </div>
        <div class="item">
          <img src="img/banner-02.svg" type="image/svg+xml" />
        </div>
        <div class="item">
          <img src="img/banner-03.svg" type="image/svg+xml" />
        </div>
        <div class="item">
        	<div class="banner4">
            	<div class="carousel-caption">
                	<div class="row">
                    	<div class="col-md-10 col-sm-10">
                        	<div class="row">
                            	<div class="col-md-4 col-sm-4 alignCenter">
                                	<div class="nottsBanLogo">
                                  <img src="img/nottingham-logo.svg" type="image/svg+xml" />
                                </div>
                             </div>
                            	<div class="col-md-8 col-sm-8">
                                <p>We're helping Nottingham establish itself as a shopping
                                and leisure destination of choice.</p> 
                             </div>
                          </div>
                      </div>
                      <div class="col-md-2 col-sm-2">
                      	<a href="case-nottingham.php" class="bannerMore">
                        		Find out More
                         </a>
                      </div>
                  </div>
               </div>
           </div>
        </div>
        <div class="item">
        	<div class="banner5">
            	<div class="carousel-caption">
                	<div class="row">
                    	<div class="col-md-10 col-sm-10">
                        	<div class="row">
                            	<div class="col-md-4 col-sm-4">
                                <div class="ipsBanLogo">
                                  <img src="img/aai-logo.svg" type="image/svg+xml" />
                                 </div>
                             </div>
                            	<div class="col-md-8 col-sm-8">
                                <p>Our vision is putting Ipswich on the map 
                                as East Anglia's waterfront town centre. </p> 
                             </div>
                          </div>
                      </div>
                      <div class="col-md-2 col-sm-2">
                      	<a href="case-aai.php" class="bannerMore">
                        		Find out More
                         </a>
                      </div>
                  </div>
               </div>
           </div>
        </div>
      </div>
          
      <!-- Controls -->
      <a class="left carousel-control" href="#homepage" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#homepage" data-slide="next">
        <span class="icon-next"></span>
      </a>
    </div>
        
    <div class="container">
    	<div id="home3" class="row doublepad borderBottom doublemart">
        	<div class="col-md-4 col-sm-4">
				<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
					<a href="#" class="hi-icon iconSetup">LinkedIn</a>
               </div>
            	<h1 class="alignCenter">Set up, delivery<br /> and renewal</h1>
            	<p>Our experience makes us perfectly placed, to help develop, deliver 
                and renew any BID. The CMS team can take you step-by-step on the journey. </p><br />
                <div class="alignCenter">
                     <a href="management-develop.php" class="btn purpleBtn">FIND OUT MORE</a>
               </div>
           </div>
           <div class="col-md-4 col-sm-4">
				<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
					<a href="#" class="hi-icon iconTeam">LinkedIn</a>
               </div>
           <h1 class="alignCenter">Meet our  team of<br /> BID experts</h1>
            	<p>Led by Paul Clement, one of the UK's leading place management specialists 
                our team has the skills and experience required to help you transform a place.</p><br />
                <div class="alignCenter">
                     <a href="team.php" class="btn purpleBtn">FIND OUT MORE</a>
               </div>
           </div>
           <div class="col-md-4 col-sm-4">
				<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
					<a href="#" class="hi-icon iconWith">LinkedIn</a>
               </div>
           <h1 class="alignCenter">Who we work<br /> with</h1>
            	<p>CMS provides ongoing support to the Ilford, Ipswich, Nottingham and Southend BIDs. 
                Our services range from marketing and finance to HR and personnel</p><br />
                <div class="alignCenter">
                     <a href="case-studies.php" class="btn purpleBtn">FIND OUT MORE</a>
               </div>
           </div>
       </div>
       <div class="row doublepad clearfix">
       		<div class="col-md-12 alignCenter">
            	<img src="img/cms-logo.png" /><br /><br />
            	<p>We've <em class="purple">created, delivered and renewed BIDs,</em>
                <br /> and can <em class="purple">help you</em> through the process 
           </div>
       </div>
    </div>
    
<?php include 'footer.php'; ?>
    
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
       
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
			$('.carousel').carousel()
	</script>
        
		<script>
			var hash = window.location.hash,
				current = 0,
				demos = Array.prototype.slice.call( document.querySelectorAll( '#codrops-demos > a' ) );
			
			if( hash === '' ) hash = '#set-1';
			setDemo( demos[ parseInt( hash.match(/#set-(\d+)/)[1] ) - 1 ] );

			demos.forEach( function( el, i ) {
				el.addEventListener( 'click', function() { setDemo( this ); } );
			} );

			function setDemo( el ) {
				var idx = demos.indexOf( el );
				if( current !== idx ) {
					var currentDemo = demos[ current ];
					currentDemo.className = currentDemo.className.replace(new RegExp("(^|\\s+)" + 'current-demo' + "(\\s+|$)"), ' ');
				}
				current = idx;
				el.className = 'current-demo'; 
			}
		</script>
        
    <script src="plugins/bootstrap-lightbox/bootstrap-lightbox.min.js"></script>
    <script type="text/javascript">
	jQuery(function($){
	$('#myLightbox').lightbox()
	});
	</script>
        
  </body>
</html>
