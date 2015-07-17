<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 layout scaffolding grid</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="sites/all/themes/tipperarytourism/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="sites/all/themes/tipperarytourism/css/style.css" rel="stylesheet">
		<script src="sites/all/themes/tipperarytourism/bootstrap/js/bootstrap.min.js"></script>
		<link href="/modules/toolbar/toolbar.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
		
		<script src="/sites/all/themes/tipperarytourism/bootstrap/js/bootstrap.min.js"></script>
		<script src="/sites/all/themes/tipperarytourism/bootstrap/js/bootstrap.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
<!-- HEADER 
=================================-->
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<div class="wrapper">
<div class="row top-menu"><div class="container"><span class="pull-right"><?php print render($page['navigation']);?></p></div></div>
<div class="row site-header1">
<div class="site-header">
 <div class="logo-outer logo">
        <div class="col col-lg-3 col-sm-12">
          <?php if (!empty($logo)): ?>
        <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
		<?php endif; ?>
        </div></div>
    
<div class="col col-lg-8 col-sm-12 dropdown">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="/attractions-tipperary" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Explore </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Places to go</a></li>
            <li><a href="/explore/attractions">Attractions</a></li>
            <li><a href="#">Mountain Ranges</a></li>
			 <li><a href="#">History and Culture</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="/entertainment-tipperary" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Experience </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Festivals and Events</a></li>
            <li><a href="#">Things to do</a></li>
            <li><a href="#">Entertainment</a></li>
            <!--<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
		<li class="dropdown">
          <a href="/accommodation-tipperary" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Stay </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Hotels</a></li>
            <li><a href="#">Hostels</a></li>
            <li><a href="#">Guesthouses</a></li>
			<li><a href="#">B&Bs </a></li>
			<li><a href="#">Self Catering</a></li>
			<li><a href="#">Camping</a></li>
            <!--<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
		<li class="dropdown">
          <a href="/eateries-tipperary" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Eat </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Cafes</a></li>
            <li><a href="#">Restaurants</a></li>
            <li><a href="#">Farmers Markets</a></li>
			<li><a href="#">Pub Grub</a></li>
           <!-- <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
      </ul>
    <div class="social pull-right">
	<a href="https://www.facebook.com/TourismTipperary" target="_new"><img src="/sites/default/files/images/facebook.png"></a>
	<a href="https://twitter.com/TippTourism" target="_new"><img src="/sites/default/files/images/twitter.png"></a>
	<a href="https://www.pinterest.com/southtipperary/" target="_new"><img src="/sites/default/files/images/pinterest.png"></a>
	<a href="https://www.youtube.com/channel/UC-dJk53t4PdpRE5MD30OoeA" target="_new"><img src="/sites/default/files/images/youtube.png"></a>
	</div></div><!-- /.navbar-collapse -->
  <!-- /.container-fluid -->
</nav>
</div>
</div></div>

<!-- /header container-->
 
 <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  
<div class="row sponsors"><div class="container">
	<div class="col-lg-12 text-center"><div class="sponsored">SPONSORED	BY</div></div>
	<div class="col-md-2"><div><a href="http://eustructuralfunds.gov.ie/background/NDP/" target="_new"><img src="\sites\default\files\images\sponsor1.png"></a></div></div>
    <div class="col-md-2"><div><a href="http://stdc.ie/" target="_new"><img src="\sites\default\files\images\sponsor2.png"></a></div></div>
   <div class="col-md-2"><div><a href="http://www.environ.ie/en/" target="_new"><img src="\sites\default\files\images\sponsor3.png"></a></div></div>
    <div class="col-md-2"><div><a href="http://stdc.ie/" target="_new"><img src="\sites\default\files\images\sponsor4.png"></a></div></div>
    <div class="col-md-2"><div><a href="http://europa.eu/" target="_new"><img src="\sites\default\files\images\sponsor5.png"></a></div></div>
	<div class="col-md-2"><div><a href="http://www.tipperarycoco.ie" target="_new"><img src="\sites\default\files\images\tcoco.png"></a></div></div>

	<div class="row text-center"><div class="sponsored sponsored1">South Tipperary Tourism Company acknowledges the support from South Tipperary Development Company, Tipperary County Council, The Department of the Environment, Community and Local Government and the EU.</div></div>
	</div></div>
	
	<div class="copyright">2014 South Tipperary Tourism Company Ltd. All Rights Reserved</div>
<!-- /CONTENT ============-->

</body>
</html>