<?php include 'header.php'; ?>

<div class="container">
    	<div class="row">
        	<div class="col-md-2">
           </div>
        	<div class="col-md-8 alignCenter doublepadb borderBottom">
                <div class="pageIcon iconPencil">
               </div>
            	<h1 class="largeh1 alignCenter">CONTACT <em class="purple">US</em></h1>
               <p>If you would like to talk to us about any issues relating to place management or 
               marketing, then please contact us on the email form or phone number below. 
               We look forward to hearing from you.</p>
            </div>
            <div class="col-md-2">
            </div>
       </div>
          	<div id="contact" class="row doublepadt">
          		<div class="col-md-3">
               </div>
          		<div class="col-md-6 borderBottom">
                	<div class="row">
                    	<div class="col-md-6 col-sm-6">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
                            <a href="#" class="hi-icon iconPhone iconReverse">Phone</a>
                           <h3>07802 806079</h3>
                       </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
                            <a href="#" class="hi-icon iconKeyboard iconReverse">Email</a>
                           <h3>Email Us</h6>
                       </div>
                      </div>
                  </div>
               </div>
               <div class="col-md-3">
               </div>
             </div>
       <div class="row doublepadt">
       		<div class="col-md-3">
           </div>
           <div class="col-md-6 borderBottom">
			<?php
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $from = 'From: Central Management Solutions'; 
                $to = 'hello@seanscannelldesign.co.uk'; 
                $subject = 'Central Management Solutions Web Form Enquiry';
                $human = $_POST['human'];
                        
                $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
				if ($_POST['submit'] && $human == '4') {				 
					if (mail ($to, $subject, $body, $from)) { 
					echo '<p>Your message has been sent!</p>';
				} else { 
					echo '<p>Something went wrong, go back and try again!</p>'; 
				} 
				} ?>
          <form id="contactForm" role="form" action="contact.php" method="post">
              <div class="form-group">
                <input type="name" class="form-control" id="name" placeholder="Name*" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email Address*" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="message" rows="3" placeholder="Message*" required></textarea>
              </div>
              <div class="alignCenter">
                  <button id="submit" name="submit" type="submit" value="submit" class="btn purpleBtn btn-lg">Submit</button>
              </div>
            </form>
            <div class="doublepadt doublepadb">
            	<div class="formReminder alignCenter">
                	<div class="stdpad clearfix">
                        Please make sure you have filled out all the required fields<br />
                      <strong>Name / Email / Message</strong>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          </div>
          </div>
          <div id="contact">
          <div class="row doublepadt">
          		<div class="col-md-3">
               </div>
          		<div class="col-md-6 borderBottom">
                	<div class="row">
                    	<div class="col-md-6 col-sm-6 stdpadt alignCenter">
                        <h2 class="white inline-block alignMiddle">follow us</h2>
                        <span class="iconPoint"></span>
                      </div>
                      <div class="col-md-6 col-sm-6">
                      	<div class="row">
                        		<div class="col-md-6 col-sm-6">
                                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
                                    <a href="#" class="hi-icon iconBigTwitter">Twitter</a>
                               </div>
                           </div>
                        		<div class="col-md-6 col-sm-6">
                                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
                                    <a href="#" class="hi-icon iconBigLinkedin">LinkedIn</a>
                               </div>
                           </div>
                       	</div>
                      </div>
                  </div>
               </div>
               <div class="col-md-3">
               </div>
          </div>
         </div>
       </div>
       
    </div>
  
    
<?php include 'footer.php'; ?>
    
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <script src="js/jquery.validate.js"></script>
    
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
