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
            	<h1 class="largeh1 alignCenter">RENEW</h1>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 alignCenter">
            <img class="doublemart" src="img/management-renew.svg" type="image/svg+xml" />
            <div class="doublemart">
                <p>BIDs operate for a maximum of five years. If they wish to 
                continue they must go through a renewal ballot process to secure 
                another BID term of up to five years. This process involves being 
                able to prove return on investment to businesses within your zone, 
                a consultation period regarding service needs for the next five year 
                term and the formal ballot as seen for the set-up of BID1. 
                CMS have extensive knowledge of this process  and have assisted<br />6 
                BIDs to a yes vote.</p>
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
