<?php
$meta_title = 'Bespoke Mobile Apps & Websites For Your Town Or City\'s BID';
$meta_tags = '<meta name="description" content="Marketing technology is an increasingly vital part of the success of any BID, which is why CMS offer bespoke websites and mobile apps for our clients." />';
$canonical = '<link rel="canonical" href="http://www.centralmanagementltd.com/marketing-technology.php" />';
include 'header.php'; ?>

<div id="technology" class="container">
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
               <div class="pageIcon iconTechnology">
               </div>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 doublepadb borderBottom alignCenter">
           		<h2 class="thinWhite alignCenter">Technology that's ready to go</h2>
               <div class="doublemart">
               <p>CMS have the technological capabilities to produce 
               bespoke mobile applications that focus on individual BIDs. These have been well 
               received by both the Nottingham and Ipswich BIDs. Both of these apps are based around 
               comprehensive data which is pulled through from their respective websites. Every BID business 
               is featured with it's own listing along with what's on, transport, car parking, taxi 
               and news information.</p>

					<p>The app integrates with our VIP offers scheme, social media and your phone's 
                    GPS system to provide directional information, helping you to find your way around.</p>

					<p>Effective marketing and communication is a crucial element for all BIDs, both with
                    consumers and stakeholders that's where we can help.</p> 
               </div>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 doublepadb borderBottom">
              <img src="img/technology-01.png" />
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 doublepadb borderBottom">
           	<div class="row">
            		<div class="col-md-4 col-sm-4">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c circle1">
                            <span class="hi-icon">
                            <em class="big">1</em><br /><em class="big2">point</em><br />of data entry for website and app
                            </span>
                       </div>
               	</div>
            		<div class="col-md-4 col-sm-4">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c circle2">
                            <span class="hi-icon">
                            	<em class="big">DESIGNED</em><br />with user in mind
                            </span>
                       </div>
               	</div>
            		<div class="col-md-4 col-sm-4">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c circle3">
                            <span class="hi-icon">
                            	Available for
                              <img src="img/platforms.svg" type="image/svg+xml" />
                            </span>
                       </div>
               	</div>
              </div>
           </div>
           <div class="col-md-2">
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
 		<script>
		$("a[href='#top']").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, "slow");
		  return false;
		});
		</script>
  </body>
</html>
