<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">

  <link href="/modules/toolbar/toolbar.css" rel="stylesheet">
  <link href="/sites/all/themes/tipperarytourism/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/sites/all/themes/tipperarytourism/css/style.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="/sites/all/themes/tipperarytourism/bootstrap/js/bootstrap.min.js"></script>
	<script src="/sites/all/themes/tipperarytourism/bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!-- HEADER 


=================================-->
</head>
<body>
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
            <li><a href="#">Attractions</a></li>
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




  
<div class="row" style="background: #d2d2d2; margin-left: 0">
<div class="container">
<div>
</div>
</div>
</div>
<div class="row newsmainrow1 ie-content">
<div class="container">
<div class="row-fluid iepaddingright" id="one-true" style="background-color: #fff; padding: 12px; width: auto">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
<div class="col-md-6" id="pagebody"><?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
    <section>
	  <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
	  <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
	  <?php print render($page['content']); ?>
	  <?php print $feed_icons; ?>
	</section>	
</div>
<div class="col-md-6 pull-right col iepercent">
	<?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
	</div>
</div>
</div>
</div>
 <div class="row sponsors"><div class="container">
	<div class="col-lg-12 text-center"><div class="sponsored">SPONSORED BY</div></div>
	<div class="col-md-2"><div><a href="http://eustructuralfunds.gov.ie/background/NDP/" target="_new"><img src="\sites\default\files\images\sponsor1.png"></a></div></div>
    <div class="col-md-2"><div><a href="http://stdc.ie/" target="_new"><img src="\sites\default\files\images\sponsor2.png"></a></div></div>
   <div class="col-md-2"><div><a href="http://www.environ.ie/en/" target="_new"><img src="\sites\default\files\images\sponsor3.png"></a></div></div>
    <div class="col-md-2"><div><a href="http://stdc.ie/" target="_new"><img src="\sites\default\files\images\sponsor4.png"></a></div></div>
    <div class="col-md-2"><div><a href="http://europa.eu/" target="_new"><img src="\sites\default\files\images\sponsor5.png"></a></div></div>
	<div class="col-md-2"><div><a href="http://www.tipperarycoco.ie" target="_new"><img src="\sites\default\files\images\tcoco.png"></a></div></div>

	<div class="row text-center"><div class="sponsored sponsored1">South Tipperary Tourism Company acknowledges the support from South Tipperary Development Company, Tipperary County Council, The Department of the Environment, Community and Local Government and the EU.</div></div>
	</div></div>
<div class="row-fluid footer">
<div class="container">
	<div class="col-lg-3 col-sm-12"><div><?php print render($page['footer1']);?></div></div>
    <div class="col-lg-2 col-sm-6"><div><?php print render($page['footer2']); ?></div></div>
    <div class="col-lg-2 col-sm-6"><div><?php print render($page['footer3']); ?></div></div>
    <div class="col-lg-2 col-sm-6"><div><?php print render($page['footer4']); ?></div></div>
    <div class="col-lg-3 col-sm-6"><div><?php print render($page['footer5']); ?></div></div>
</div>
</div>

<!-- /CONTENT ============-->

</body>
</html>
