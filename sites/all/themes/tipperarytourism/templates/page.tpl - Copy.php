<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <link href="/modules/toolbar/toolbar.css" rel="stylesheet">
  <link href="/sites/all/themes/tipperarytourism/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/sites/all/themes/tipperarytourism/css/style.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="/sites/all/themes/tipperarytourism/bootstrap/js/bootstrap.min.js"></script>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!-- HEADER 


=================================-->
</head>
<body>   
<div class="row iespacing1">
<div class="row nav-wrap">
<div class="container">
<div class="navbar navbar-wrapper" style="background: #152634">
  <div class="navbar-inner">
    <div class="container">
			
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn1 btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
	  
	  <a class="btn btn-navbar-search hidden-desktop" data-toggle="collapse" data-target=".search-nav-collapse">
        <div>SEARCH</div>

      </a>

      <!-- Everything you want hidden at 940px or less, place within here -->
	  <div class="hidden-desktop search-nav-collapse collapse">
        <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
		</div>
	  
      <div class="nav-collapse collapse">
       <div class="span9 mainnavinner">
              <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">Services 
				  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("your-council","Your-Council","Your-council","your-Council"))){ echo 'class="active"';} ?> ><a href="/your-council">Your Council</a></li>
					<hr>
					<li><a href="/arts">Arts</a></li>
					<li><a href="/civil-defence">Civil Defence</a></li>
                    <li><a href="/community-and-economic-development">Community & Economic Development</a></li>
                    <li><a href="/environment">Environment</a></li>
					<li><a href="/finance">Finance</a></li>
					<li><a href="/fire-services">Fire Services</a></li>
					<li><a href="/heritage">Heritage</a></li>
                    <li><a href="/housing">Housing</a></li>
                    <li><a href="http://www.tipperarylibraries.ie" target="_new">Libraries</a></li>
					<li><a href="/motor-tax">Motor Tax</a></li>
					<li><a href="/museum">Museum</a></li>
					<li><a href="/planning">Planning</a></li>
					<li><a href="/roads">Roads</a></li>
                    <li><a href="/swimming-pools">Swimming Pools</a></li>
					<li><a href="/water-services">Water Services</a></li>
                  </ul>
                </li>
                <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("news","News"))){ echo 'class="active"';} ?> ><a href="/news">News</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("faqs","FAQS","Faqs","FAQs"))){ echo 'class="active"';} ?> ><a href="/faqs">FAQs</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("publications","Publications"))){ echo 'class="active"';} ?> ><a href="/publications">Download it</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("forms","Forms"))){ echo 'class="active"';} ?> ><a href="/forms">Apply for it</a></li>
                <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("Pay-for-it","pay-for-it"))){ echo 'class="active"';} ?> ><a href="/pay-for-it">Pay for it</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">Municipal Districts 
				  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/clonmel-borough-district">Clonmel</a></li>
					<li><a href="/carrick-on-suir-municipal-district">Carrick-on-Suir</a></li>
					<li><a href="/cashel-tipperary-municipal-district">Cashel-Tipperary</a></li>
					<li><a href="/nenagh-municipal-district">Nenagh</a></li>
                    <li><a href="/templemore-thurles-municipal-district">Templemore-Thurles</a></li>
	              </ul>
                </li>
			</ul>
		</div>
		<div class="searchinner hidden-phone hidden-tablet">
        <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
		</div>
		</div>
      </div>
 
    </div>
  </div>
</div>
</div>
</div>
</div>   
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
<div class="span8 col" id="pagebody"><?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
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
<div class="span4 pull-right col iepercent" style="background: #e5e5e5">
	<?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
	</div>
</div>
</div>
</div>
<div class="row ie-footer">
<div class="footerbg">             
<div class="navbar-bottom footerall">
<div class ="container"> 
<div class="row-fluid span12" style="margin-left:0px; margin-bottom:15px">
<div class="span6">
<div class="span12 iepadding">
<h4>Services:</h4>
<div class = "span4"> 
<div id="footer1">   
<?php print render($page['footer1']); ?>
</div>  
</div>  
<div class = "span3">     
<div id="footer2">   
<?php print render($page['footer2']); ?>
</div>  
</div> 
<div class = "span3">     
<div id="footer3">   
<?php print render($page['footer3']); ?>
</div>  
</div>  
</div>  
</div>
<div class = "span6">
<div class = "span6">
<h4>Follow Us:</h4>
<div class = "span6">
<div id="footer4">   
<?php print render($page['footer4']); ?>
</div>  
</div>  
</div>
<div class = "span6">
<h4>Related Sites:</h4>
<div class = "span10">
<div id="footer5">   
<?php print render($page['footer5']); ?>
</div>  
</div>  
</div>											
</div>
</div>
</div>
</div>
</div></div>
</body>
</html>