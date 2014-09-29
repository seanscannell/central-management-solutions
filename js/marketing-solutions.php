<?php include 'header.php'; ?>

<div id="strategy" class="container">
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
           <div class="col-md-8 alignCenter">
               <div class="pageIcon iconStrategy">
               </div>
            	<h1 class="largeh1 alignCenter">MARKETING <em class="purple">STRATEGY</em></h1>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 doublepadb borderBottom alignCenter">
               	<div class="alignCenter">
                      <img src="img/7-years.svg" type="image/svg+xml" />
              		  <div class="doublemart">
                   <p>The CMS team are experts in formulating marketing strategies for 
                   places. From helping a place shape its vision and values, through to 
                   detailed delivery of a marketing plan.</p>
                   
                   <p><em class="big">We cover all aspects.</em></p>

                 <p>We understand the different requirements of the consumer audiences 
                 and the levy payers and organisations that you represent. Our experience 
                 in planning and conducting these campaigns means that we can maximise 
                 the effectiveness of all marketing channels whilst getting the 
                 most from your budget. </p>

                <p>Rest assured our strategies are not lifted from a template, they are 
                bespoke to the individual town or city in question.</p>
                
                   <p><em class="big"> We respond to the character of the place and have 
                   this in mind at all times.</em></p>

               </div>
               </div>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
           <div class="col-md-2">
           </div>
           <div class="col-md-8 doublepadb borderBottom">
           	  <div class="video-container">
                <iframe width="760" height="428" src="//www.youtube.com/embed/Ew1iXw77ru4?rel=0" frameborder="0" allowfullscreen></iframe>
              </div>
           </div>
           <div class="col-md-2">
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
