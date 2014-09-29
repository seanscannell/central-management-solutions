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
               <div class="pageIcon iconVideo">
               </div>
            	<h1 class="largeh1 alignCenter">VIDEO</h1>
           </div>
           <div class="col-md-2">
           </div>
   		</div>
    	<div class="row doublepadt">
        	<div class="col-md-2">
           </div>
           <div class="col-md-8 doublepadb borderBottom alignCenter">
               <div class="video alignCenter">
                    <p>Storytelling is<br /> at the heart of so many<br /> <em class="purple">great 
                    marketing campaigns.</em></p>
               </div>
               <div class="doublemart">
                   <p>Engaging, educating and entertaining it's a technique that builds loyalty and is 
                   extremely memorable. Even more importantly it encourages your customers to choose 
                   with their hearts as well as their heads. So what makes a great story? Scenarios, 
                   characters, experiences and imagination. If you think about it, they are all the 
                   things that make a place what it is.</p>
    
                    <p>Video is the perfect medium to bring these stories to life and using the latest 
                    seeding techniques we can also ensure that it reaches the right audience.</p>
    
                    <p>Our It's in Nottingham Food & Drink fortnight video was watched by more than 50,000 
                    people in and around the <br />city centre.</p> 
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
                <iframe width="760" height="370" src="http://www.youtube.com/embed/tS4HgTUXCqA?rel=0"
                frameborder="0" allowfullscreen></iframe>
             </div>
             <div class="video-container">
                <iframe class="doublemart" width="761" height="428" src="//www.youtube.com/embed/VZjAgt5D7zI?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe class="doublemart" width="761" height="428" src="//www.youtube.com/embed/dBvuA3JgY58?rel=0" frameborder="0" allowfullscreen></iframe> 
            </div>
            <div class="video-container">
                <iframe width="760" height="570" src="//www.youtube.com/embed/dtladDFqCiA?rel=0" frameborder="0" allowfullscreen></iframe>          
            </div>
             </div>
           </div>
           <div class="col-md-2">
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
