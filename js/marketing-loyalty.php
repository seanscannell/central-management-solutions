<?php include 'header.php'; ?>

<div id="renew" class="container">
	<div class="caseStudyNav">
    	<ul class="studyNav">        	
        	<li class="title"><a href="#">MARKETING SOLUTIONS</a></li>
           <li><a href="marketing-solutions.php">STRATEGY</a></li>
           <li><a href="case-studies.php">CASE STUDIES</a></li>
           <li><a href="marketing-technology.php">TECHNOLOGY</a></li>
           <li><a href="marketing-loyalty.php">LOYALTY</a></li>
           <li><a href="marketing-video.php">VIDEO</a></li>
       </ul>
    </div>
    	<div class="row">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 alignCenter doublepadb borderBottom">
               <div class="pageIcon iconLoyalty">
               </div>
            	<h1 class="largeh1 alignCenter">LOYALTY</h1>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 alignCenter">
                <p>As the statistics prove our VIP loyalty and 
                rewards scheme has been hugely successful 
                in three locations. Providing your levy payers with an audience that 
                they can regularly and cost effectively communicate
                 with.</p>

				<p>The secret to its success lies in its simplicity, 
                no expensive machinery is required making it accessible for small independents
                 and large  multi-nationals whilst consumers can choose to print
                  the vouchers or save them to their mobile phones.</p>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-12">
            	<div class="greyGradient">
                	<div class="macBook">
                        <div id="carousel-example-generic" class="carousel slide">
                          <!-- Indicators
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                          </ol>
                          -->
                        
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="img/loyalty-01.svg" type="image/svg+xml" />
                            </div>
                            <div class="item">
                              <img src="img/loyalty-02.svg" type="image/svg+xml" />
                            </div>
                            <div class="item">
                              <img src="img/loyalty-03.svg" type="image/svg+xml" />
                            </div>
                            <div class="item">
                              <img src="img/loyalty-04.svg" type="image/svg+xml" />
                            </div>
                            <div class="item">
                              <img src="img/loyalty-05.svg" type="image/svg+xml" />
                            </div>
                            <div class="item">
                              <img src="img/loyalty-06.svg" type="image/svg+xml" />
                            </div>
                            <div class="item">
                              <img src="img/loyalty-07.svg" type="image/svg+xml" />
                            </div>
                            <div class="item">
                              <img src="img/loyalty-08.svg" type="image/svg+xml" />
                            </div>
                          </div>
                        
                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                          </a>
                        </div>
                  </div>
               </div>
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
  </body>
</html>
