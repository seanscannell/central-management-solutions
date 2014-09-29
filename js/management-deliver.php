<?php include 'header.php'; ?>

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
               <p>The hard work begins once businesses have voted yes. CMS can 
               provide services that help you hit the ground running and ensure the 
               businesses in your BID zone see a quick return on their investment. 
               CMS already provides robust business  structure across  the BIDs it 
               manages as well as personnel, office systems, budgeting, financial 
               services, communication strategies and delivery objectives, with the 
               comfort of a real understanding of the overall <br />national picture.</p>

				<p>CMS is also acutely aware that no two locations are the same and 
                although there are national issues affecting many locations, CMS 
                understands each location has unique characters and requirements. 
                CMS has an excellent track record of being able to lever additional 
                funding with  XX amount topping up BID budgets across the BIDs it 
                currently manages.</p>
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
                    	  <h2>HR / personnel</h2>
                        <p>CMS stay firmly on top of all HR rules and regulations and 
                        offer the management of recruitment from interview through 
                        to day-to-day team management.</p>
                   </div>
            	</div>
           	<div class="purpleArrowsBottom">
            	</div>
           	<div class="lightPurpleBackground">
            		<div class="doublepad">
                    	<h2>Marketing</h2>
                      <p>Marketing and communication plans form a vital part of any 
                      business delivery model. CMS cannot only write the strategy 
                      for communicating with your stakeholders and visitors but 
                      can also deliver it for you. The CMS team provide a one 
                      stop shop through from strategy through to fully functioning 
                      integrated marketing campaigns.</p>
    
                        <a href="case-studies.php">Click here for examples of work 
                        carried out for other locations.</a>
                  </div>
         	</div>
           	<div class="purpleArrowsTop">
            	</div>
           	<div class="purpleBackground">
            		<div class="doublepad">
                    		<h2>Finance</h2>
                        <p>From the writing of your initial BID budget through to invoice 
                        payments the CMS can create a  package to suit you and your BID.</p>
                  </div>
            	</div>
           	<div class="purpleArrowsBottom">
            	</div>
           	<div class="lightPurpleBackground">
            		<div class="doublepad">
                    	   <h2>Running Management</h2>
                        <p>CMS BIDs benefit from ISO9001 which provides peace of mind to 
                        BIDs that the processes and systems behind the management 
                        of the business are of an excellent standard.</p>
                        <p>Support for any BID is available and may include strategic 
                        advice, budget setting, project management, objective and 
                        target setting, performance management and quality 
                        management systems. Economies of scale and efficiencies 
                        of operation are available to any BID through joining 
                        the CMS network.</p>
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
  </body>
</html>
