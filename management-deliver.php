<?php
$meta_title = 'Once A BID Has Been Voted In, We Can Help You Deliver It';
$meta_tags = '<meta name="description" content="After the businesses have voted for your BID, the hard work really begins. CMS\' services can help you ensure quick returns on investment and much more." />'; 
$canonical = '<link rel="canonical" href="http://www.centralmanagementltd.com/management-deliver.php" />';
include 'header.php'; ?>

<div class="container">
	<div class="caseStudyNav">
    	<ul class="studyNav">        	
        	<li class="title"><a href="#">MANAGEMENT SERVICES</a></li>
           <li><a href="management-develop.php">DEVELOP</a></li>
           <li><a href="management-deliver.php">DELIVER</a></li>
           <li><a href="management-renew.php">RENEW</a></li>
       </ul>
    </div>
    	<div class="row">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 alignCenter doublepadb borderBottom">
               <div class="pageIcon iconDevelop">
               </div>
            	<h1 class="largeh1 alignCenter">DELIVER</h1>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 alignCenter doublepadb doublepadt">
               <p>The hard work begins once businesses have voted 'yes'. CMS can 
               provide services that help you hit the ground running and ensure the 
               businesses in your BID zone see a quick return on their investment. 
               CMS already provides robust business  structures across  the BIDs it 
               manages as well as personnel, office systems, budgeting, financial 
               services, communication strategies and delivery objectives, with the 
               comfort of a real understanding of the overall <br />national picture.</p>

				<p>It is also acutely aware that no two locations are the same and 
                although there are national issues affecting many locations, the team 
                understands each location has unique characters and requirements. 
                CMS has an excellent track record of being able to lever additional 
                funding.</p>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 receiptList alignCenter">
           	<div class="purpleArrowsTop">
            	</div>
           	<div class="purpleBackground">
            		<div class="doublepad">
                    	<h2>Quality Management</h2>
                      <p>CMS is quality assured through its ISO9001, therefore providing peace of mind
                      to BIDs that the processes and systems behind the management of the business are of an
                      excellent standard.</p>
                    	<!--
                    	  <h2>HR / personnel</h2>
                        <p>CMS stay firmly on top of all HR rules and regulations and 
                        offer the management of recruitment from interview through 
                        to day-to-day team management.</p>-->
                   </div>
            	</div>
           	<div class="purpleArrowsBottom">
            	</div>
           	<div class="lightPurpleBackground">
            		<div class="doublepad">
                    	<h2>Marketing</h2>
                      <p>Marketing and communication form a vital part of any business delivery model - CMS
                      provide a one-stop-shop from strategy to fully integrated marketing campaigns.</p>
    
                        <!--<a href="case-studies.php">Click here for examples of work 
                        carried out for other locations.</a>-->
                  </div>
         	</div>
           	<div class="purpleArrowsTop">
            	</div>
           	<div class="purpleBackground">
            		<div class="doublepad">
                    		<h2>HR / Personnel</h2>
                        <p>Staying firmly on top of all HR rules and regulations is vital. CMS offers HR management
                        services from interview through to day-to-day team management.</p>
                  </div>
            	</div>
           	<div class="purpleArrowsBottom">
            	</div>
           	<div class="lightPurpleBackground">
            		<div class="doublepad">
                    	   <h2>Finance</h2>
                         <p>From the annual budget to cashbook functions our team will create a package to suit you.</p>
                         <!--
                        <p>CMS BIDs benefit from ISO9001 which provides peace of mind to 
                        BIDs that the processes and systems behind the management 
                        of the business are of an excellent standard.</p>
                        <p>Support for any BID is available and may include strategic 
                        advice, budget setting, project management, objective and 
                        target setting, performance management and quality 
                        management systems. Economies of scale and efficiencies 
                        of operation are available to any BID through joining 
                        the CMS network.</p>-->
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
