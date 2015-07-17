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
			<li class="topmenu"><?php print render($page['footer1']);?></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="/entertainment-tipperary" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Experience </a>
          <ul class="dropdown-menu" role="menu">
		  <li class="topmenu"><?php print render($page['footer2']);?></li>
            <!--<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
		<li class="dropdown">
          <a href="/accommodation-tipperary" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Stay </a>
          <ul class="dropdown-menu" role="menu">
		  <li class="topmenu"><?php print render($page['footer3']);?></li>
            <!--<li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
		<li class="dropdown">
          <a href="/eateries-tipperary" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Eat </a>
          <ul class="dropdown-menu" role="menu">
		  <li class="topmenu"><?php print render($page['footer4']);?></li>
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

<!-- CONTENT
=================================-->
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../sites/all/themes/tipperarytourism/css/images/OrmondeCastle-1024x509-1024x509.jpg" alt="Ormonde Castle">
	  <div class="carousel-caption">
        <h3><a href="/butler-trail">The Butler Trail</a></h3>
        <p>In almost every nook and cranny of Tipperary you will find a connection to the Butlers of Ormond. You can hear their remarkable story and visit the places associated with them by travelling along The Butler Trail. This driving route links the towns of Carrick-on-Suir, Clonmel and Cahir and there is interpretive signage to guide read more</p>
      </div>
    </div>

    <div class="item">
      <img src="../sites/all/themes/tipperarytourism/css/images/RockOfCashelWide-1024x512.jpg" alt="Rock Of Cashel">
	  <div class="carousel-caption">
        <h3><a href="/welcome">Welcome To Tipperary</a></h3>
        <p>It's Not Such A Long Way - A Welcome Note From Tipperary Tourism Company.</p>
      </div>
    </div>

    <div class="item">
      <img src="../sites/all/themes/tipperarytourism/css/images/WalkinginTipperary-1024x512.jpg" alt="Walking in Tipperary">
	  <div class="carousel-caption">
        <h3><a href="/walk-tipperary-ten">Walk the Tipperary Ten</a></h3>
        <p>This is the Ireland you have been looking for – base yourself in any village or town in County Tipperary, relax with friends (and the locals), and take in all of Tipperary’s natural beauty. Make the iconic Rock Of Cashel your first stop, then choose between castles and forest trails, mountain rambles or a pub.</p>
      </div>
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    <div class="row fp-spacing">
	<div class="col-lg-4 col-sm-12"><div><?php print render($page['fp_grid11']);?></div></div>
    <div class="col-lg-4 col-sm-6"><div><?php print render($page['fp_grid12']); ?></div></div>
    <div class="col-lg-4 col-sm-6"><div><?php print render($page['fp_grid13']); ?></div></div>
    <div class="col-lg-4 col-sm-6 fp-spacing pull-right"><div><?php print render($page['fp_grid22']); ?></div></div>
    <div class="col-lg-4 col-sm-6 fp-spacing pull-right"><div><?php print render($page['fp_grid23']); ?></div></div>
	</div>
	<div class="row fp-spacing">
	<div class="col-lg-8 fp-spacing col-sm-6">
	<div class="col-lg-6 fp-spacing bottom col-sm-6"><div><?php print render($page['fp_grid31']); ?></div></div>
    <div class="col-lg-6 fp-spacing bottom1 col-sm-6"><div><?php print render($page['fp_grid32']); ?></div></div>
    <div class="col-lg-6 fp-spacing bottom col-sm-6"><div><?php print render($page['fp_grid41']); ?></div></div>
	<div class="col-lg-6 fp-spacing bottom1 col-sm-6"><div><?php print render($page['fp_grid42']); ?></div></div>
	</div>
	
	<div class="col-lg-4 fp-spacing">
    <div class="col-lg-12 fp-spacing  bottom col-sm-6"><div><?php print render($page['fp_grid33']); ?></div></div>
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
