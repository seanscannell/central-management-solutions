<?php include 'header.php'; ?>

<div id="renew" class="container">
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
            	<h1 class="largeh1 alignCenter">DEVELOP</h1>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 alignCenter">
                <p>A BID can only be formed following consultation and a ballot in 
                which businesses vote on a BID Proposal or business plan for the area. 
                The ballot is run by the local authority or outsourced by the local 
                authority to a third party. All businesses eligible to pay the levy 
                are balloted.</p>
 
				 <p class="purple">The benefits of BIDs cited by businesses are 
                 wide-ranging and include:</p>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 alignCenter doublepadb borderBottom">
           	<ul class="timelineList">
            		<li class="right">
                      <div class="timelineText pull-right">
                          Businesss decide and direct what they want for the area
                      </div>
                  </li>
                  <li class="left">
                  	<div class="timelineText">
                        Businesses are represented and have a voice in issues effecting 
                        the area
                      </div>
                  </li>
                  <li class="right">
                  	<div class="timelineText pull-right">
                    		BID levy money is ring fenced for use only in the BID area - 
                         unlike business rates which are paid in to and redistributed by
                         government
                      </div>
                  </li>
                  <li class="left">
                  	<div class="timelineText">
                    		Increased footfall
                      </div>
                  </li>
                  <li class="right">
                  	<div class="timelineText pull-right">
                    		Increased staff retention
                      </div>
                  </li>
                  <li class="left">
                  	<div class="timelineText">Business cost reduction (shrinkage, 
                    		crime, joint procurement)
                      </div>
                  </li>
                  <li class="right">
                  	<div class="timelineText pull-right">
                    		Area promotion
                      </div>
                  </li>
                  <li class="left">
                  	<div class="timelineText">
                    		Facilitated networking opportunities with neighbouring businesses
                      </div>
                  </li>
                  <li class="right">
                  	<div class="timelineText pull-right">
                    		Assistance in dealings with the council, police and other public 
                         bodies
                     </div>
                 </li>
            	</ul>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
        <div class="row">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8">
           	<div class="doublepadt">
                   <p>In the UK, for a BID to go ahead the ballot must be won on two counts: 
                    straight majority and majority of rateable value. This ensures that the 
                    interests of large and small businesses are protected. There is no 
                    minimum turnout threshold.</p>
                   <p>The CMS team can take you step by step on this journey - be it a 
                   potential  town, city or industrial BID. Right through from the 
                   initial feasibility study, to consultation, development of the 
                   actual business plan and finally organization of the ballot.</p>
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
