<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
<meta charset="<?php $plxShow->charset('min'); ?>">
  <title><?php $plxShow->pageTitle(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $plxShow->meta('description') ?>
  <?php $plxShow->meta('keywords') ?>
  <?php $plxShow->meta('author') ?>

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="<?php $plxShow->template(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php $plxShow->template(); ?>/css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php $plxShow->template(); ?>/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php $plxShow->template(); ?>/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php $plxShow->template(); ?>/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php $plxShow->template(); ?>/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php $plxShow->template(); ?>/img/favicon.png">
  <link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
  
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/imagesloaded.pkgd.min.js"></script>

<?php $plxShow->templateCss() ?>
<?php $plxShow->pluginsCss() ?>
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
<!--[if lt IE 9]>
<script src="<?php $plxShow->template(); ?>/js/html5ie.js"></script>
<script src="<?php $plxShow->template(); ?>/js/respond.min.js"></script>
<![endif]-->


</head>

<body id="corps">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column" id="jul-titre">

			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <span class="navbar-brand"><?php $plxShow->mainTitle('link'); ?></span>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dernières entrées <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
							<?php $plxShow->lastArtList('<li><a href="#art_url" title="#art_title">#art_title</a></li>',10) ?>
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php $plxShow->lang('TAGS'); ?> <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<?php $plxShow->tagList('<li><a href="#tag_url" title="#tag_name">#tag_name (#nb_art)</a></li>','','alpha'); ?>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search" action="http://genre.julien.biaudet.fr/index.php?search" method="post">
						<div class="form-group">
							<input class="form-control" type="text" name="searchfield" />
						</div> <button type="submit" class="btn btn-default">Rechercher</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php $plxShow->lang('ARCHIVES'); ?> <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<?php $plxShow->archList('<li><a href="#archives_url" title="#archives_name">#archives_name (#archives_nbart)</a></li>'); ?>
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">À propos <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
            <?php $plxShow->staticList('','<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">RSS <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
								<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			<div class="jumbotron">
				<h1>
                                <?php $plxShow->mainTitle('link'); ?>
				</h1>
				<p>
                                <?php $plxShow->subTitle(); ?>
				</p>
			</div>	
		</div>
	</div>

