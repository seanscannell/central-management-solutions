<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $meta_title ?></title>
    <?php echo $meta_tags ?>
    <?php echo $canonical ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,700,800,600,500,300,200,100' rel='stylesheet' type='text/css'>    
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="plugins/bootstrap-lightbox/bootstrap-lightbox.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="plugins/IconHoverEffects/css/component.css" /> 
    <script src="plugins/IconHoverEffects/js/modernizr.custom.js"></script>
    </head>
  <body><!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M9W7V4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9W7V4');</script>
<!-- End Google Tag Manager -->

    
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="img/nav-logo.png" alt/="CMS Logo" /></a>
      </div>
    
    	<div id="header" class="container">
        <div class="row">
        	<div class="col-md-12">    	<div class="container">
        <div class="row">
        	<div class="col-md-12">
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse">
              <?php $page = $_SERVER['SCRIPT_NAME']; ?>
              
                <ul class="nav navbar-nav">          
                    <li <?php if ($page == "/index.php"){ echo "class='active'";} ?>><a href="/">HOME</a></li>
                    <li <?php if ($page == "/about.php"){ echo "class='active'";} ?>
                   	  <?php if ($page == "/about.php#valuesVision"){ echo "class='active'";} ?>
                        <?php if ($page == "/about.php#objectives"){ echo "class='active'";} ?>
                        <?php if ($page == "/about.php#ourClients"){ echo "class='active'";} ?>
                     class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT</a>
                        <ul class="dropdown-menu">
                          <li <?php if ($page == "/about.php"){ echo "class='active'";} ?>><a href="about.php">INTRODUCTION</a></li>
                          <li <?php if ($page == "/about.php#valuesVision"){ echo "class='active'";} ?>><a href="about.php#valuesVision">VALUES & VISION</a></li>
                          <li <?php if ($page == "/about.php#objectives"){ echo "class='active'";} ?>><a href="about.php#objectives">OBJECTIVES</a></li>
                          <li <?php if ($page == "/about.php#ourClients"){ echo "class='active'";} ?>><a href="about.php#ourClients">OUR CLIENTS</a></li>
                        </ul>
                    </li>          
                    <li <?php if ($page == "/management-develop.php"){ echo "class='active'";} ?>
                    	<?php if ($page == "/management-deliver.php"){ echo "class='active'";} ?>
                        <?php if ($page == "/management-renew.php"){ echo "class='active'";} ?>
                     class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MANAGEMENT SERVICES</a>
                        <ul class="dropdown-menu">
                          <li <?php if ($page == "/management-develop.php"){ echo "class='active'";} ?>><a href="management-develop.php">DEVELOP</a></li>
                          <li <?php if ($page == "/management-deliver.php"){ echo "class='active'";} ?>><a href="management-deliver.php">DELIVER</a></li>
                          <li <?php if ($page == "/management-renew.php"){ echo "class='active'";} ?>><a href="management-renew.php">RENEW</a></li>
                        </ul>
                    </li>          
                  <li><a href="contact.php"><img src="img/icon-mail.png" /></a></li>
                  <li <?php if ($page == "/marketing-solutions.php"){ echo "class='active'";} ?>
                  	  <?php if ($page == "/case-studies.php"){ echo "class='active'";} ?>
                      <?php if ($page == "/marketing-technology.php"){ echo "class='active'";} ?>
                      <?php if ($page == "/marketing-loyalty.php"){ echo "class='active'";} ?> 
                      <?php if ($page == "/marketing-video.php"){ echo "class='active'";} ?>
                   class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MARKETING SOLUTIONS</a>
                        <ul class="dropdown-menu">
                          <li <?php if ($page == "/marketing-solutions.php"){ echo "class='active'";} ?>><a href="marketing-solutions.php">STRATEGY</a></li>
                          <li <?php if ($page == "/case-studies.php"){ echo "class='active'";} ?>><a href="case-studies.php">CASE STUDIES</a></li>
                          <li <?php if ($page == "/marketing-technology.php"){ echo "class='active'";} ?>><a href="marketing-technology.php">TECHNOLOGY</a></li>
                          <li <?php if ($page == "/marketing-loyalty.php"){ echo "class='active'";} ?>><a href="marketing-loyalty.php">LOYALTY</a></li>
                          <li <?php if ($page == "/marketing-video.php"){ echo "class='active'";} ?>><a href="marketing-video.php">VIDEO</a></li>
                        </ul>
                  </li>          
                  <li <?php if ($page == "/team.php"){ echo "class='active'";} ?>><a href="team.php">THE TEAM</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
          </div>
          </div>
      </div>
</div>
          </div>
      </div>
    </nav>