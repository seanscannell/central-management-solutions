<?php
$meta_title = 'See Some Of Our Town & City BID Management Case Studies';
$meta_tags = '<meta name="description" content="We work with a number of town and city BIDs across the UK; find out more about them and their achievements in our case studies." />';
$canonical = '<link rel="canonical" href="http://www.centralmanagementltd.com/case-studies.php" />';
include 'header.php'; ?>

<div id="caseStudies" class="container">
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
           <div class="col-md-8">
               <div class="pageIcon iconCase">
               </div>
            	<h1 class="largeh1 alignCenter">CASE <em class="purple">STUDIES</em></h1>
           </div>
           <div class="col-md-2">
           </div>
        </div>
    	<div class="row">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8">
               <div class="row">
               	<div class="col-md-6 col-sm-6">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c circle1">
                            <a href="case-nottingham.php" class="hi-icon md-trigger" data-modal="modal-7">
                              <img src="img/case-notts-01.jpg" />
                            </a>
                       </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c circle1">
                            <a href="case-aai.php" class="hi-icon md-trigger" data-modal="modal-7">
                              <img src="img/case-aai-01.jpg" />
                            </a>
                       </div>
                  </div>
               </div>
               <div class="row">
               	<div class="col-md-6 col-sm-6">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c circle1">
                            <a href="case-ilford.php" class="hi-icon md-trigger" data-modal="modal-7">
                              <img src="img/case-ilford-01.jpg" />
                            </a>
                       </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c circle1">
                            <a href="case-southend.php" class="hi-icon md-trigger" data-modal="modal-7">
                              <img src="img/case-southend-01.jpg" />
                            </a>
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
