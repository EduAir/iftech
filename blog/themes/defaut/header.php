<?php if (!defined('PLX_ROOT')) exit; ?>
<?php $rooter = $_SERVER['DOCUMENT_ROOT'].'/iftech'; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/plucss.css" media="screen"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css" media="screen"/>
	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>


	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

	<!-- FAVICONS -->
    <link rel="shortcut icon" href="../images/favicon/favicon.png">
    <link rel="apple-touch-icon" href="../images/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-touch-icon-114x114.png">
    <link rel="icon" sizes="192x192" href="../images/favicon/icon-192x192.png">

    <link href="../revo-slider/css/settings.css" rel="stylesheet" type="text/css">
    
    <!--  BOOTSTRAP -->
		<link rel="stylesheet" href="../css/bootstrap.min.css"> 
	
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->		
		<link rel="stylesheet" href="../css/icons-fonts.css" >	
	
    <!--  CSS THEME -->		
		<link rel="stylesheet" href="../css/style.css" >
	
    <!-- ANIMATE -->	
		<link rel="stylesheet" href="../css/animate.min.css">

</head>

<body id="top" class="page mode-<?php $plxShow->mode(true) ?>">

	<!-- LOADER -->	
		<div id="loader-overflow">
      <div id="loader3" class="loader-cont">Please enable JS</div>
    </div>	

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->	
				
				<!--[if lte IE 8]>
				<div id="ie-container">
					<div id="ie-cont-close">
						<a href="#" onclick="javascript&#058;this.parentNode.parentNode.style.display="none"; return false;"><img src="images/ie-warn/ie-warning-close.jpg" style="border: none;" alt="Close"></a>
					</div>
					<div id="ie-cont-content" >
						<div id="ie-cont-warning">
							<img src="images/ie-warn/ie-warning.jpg" alt="Warning!">
						</div>
						<div id="ie-cont-text" >
							<div id="ie-text-bold">
								You are using an outdated browser
							</div>
							<div id="ie-text">
								For a better experience using this site, please upgrade to a modern web browser.
							</div>
						</div>
						<div id="ie-cont-brows" >
							<a href="http://www.firefox.com" target="_blank"><img src="images/ie-warn/ie-warning-firefox.jpg" alt="Download Firefox"></a>
							<a href="http://www.opera.com/download/" target="_blank"><img src="images/ie-warn/ie-warning-opera.jpg" alt="Download Opera"></a>
							<a href="http://www.apple.com/safari/download/" target="_blank"><img src="images/ie-warn/ie-warning-safari.jpg" alt="Download Safari"></a>
							<a href="http://www.google.com/chrome" target="_blank"><img src="images/ie-warn/ie-warning-chrome.jpg" alt="Download Google Chrome"></a>
						</div>
					</div>
				</div>
				<![endif]-->
				
				<!-- HEADER 1 FONT WHITE TRANSPARENT -->
        <div class="header-black-bg"></div> <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->
				<header id="nav" class="header header-1 header-black" style="background-color: rgba(0,0,0,.5);">
				  <div class="header-wrapper" >
  					<div class="container-m-30 clearfix">
  					  <div class="logo-row">
  					  
  						<!-- LOGO --> 
  						<div class="logo-container-2">
                  <div class="logo-2">
                    <a href="index.html" class="clearfix">
                      <img src="../images/iftech_blanc.png" class="logo-img" alt="Logo">
                    </a>
                  </div>
                </div>
  						<!-- BUTTON --> 
  						<div class="menu-btn-respons-container">
  							<button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
  								<span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
  							</button>
  						</div>
  					 </div>
  					</div>

					<!-- MAIN MENU CONTAINER -->
					 <div class="main-menu-container">
						
						  <div class="container-m-30 clearfix">	
						  
								<!-- MAIN MENU -->
								<div id="main-menu">
								  <div class="navbar navbar-default" role="navigation">
                    <!-- MAIN MENU LIST -->
                    <nav class="collapse collapsing navbar-collapse right-1024">
                      <ul class="nav navbar-nav">
                        <!-- MENU ITEM -->
                        <li>
                          <a href="../"><div>IF-Tech</div></a>
                        </li>
                        <li>
                          <a href="../blog/"><div>Blog</div></a>
                        </li>

                        <li>
                          <a href="../#footer2"><div>Contact</div></a>
                        </li>
                      </ul>
                    </nav>
								  </div>
								</div>
								<!-- END main-menu -->
								
						  </div>
						  <!-- END container-m-30 -->
						
					</div>
					<!-- END main-menu-container -->
					
					<!-- SEARCH READ DOCUMENTATION -->
					
				  </div>
				  <!-- END header-wrapper -->
				  
				</header>

<!-- 	<header class="header">

		<div class="container">

			<div class="grid">

				<div class="col sml-6">

					<div class="logo">
					
						<h1 class="no-margin heading-small"><?php $plxShow->mainTitle('link'); ?></h1>
						<h2 class="h5 no-margin"><?php $plxShow->subTitle(); ?></h2>
					
					</div>

				</div>

				<div class="col sml-6">

					<nav class="nav">

						<div class="responsive-menu">
							<label for="menu"></label>
							<input type="checkbox" id="menu">
							<ul class="menu">
								<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
								<?php $plxShow->pageBlog('<li class="#page_class #page_status" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>
							</ul>
						</div>

					</nav>

				</div>

			</div>

		</div>

	</header> -->
	
	<div class="bg"></div>
