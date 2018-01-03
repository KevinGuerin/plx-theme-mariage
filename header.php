<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
	xml:lang="<?php $plxShow->defaultLang() ?>"
	lang="<?php $plxShow->defaultLang() ?>">

<head>

<title><?php $plxShow->pageTitle(); ?></title>

<meta http-equiv="Content-Type"
	content="text/html; charset=<?php $plxShow->charset(); ?>" />
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>

<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
<link rel="stylesheet" type="text/css"
	href="<?php $plxShow->template(); ?>/style.css" media="screen" />
<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/ie.css" media="screen" />
	<![endif]-->
<?php $plxShow->templateCss() ?>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript">if(!window.jQuery) document.write(unescape('%3Cscript src="<?php $plxShow->template(); ?>/jquery.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript">if(!window.jQuery.ui) document.write(unescape('%3Cscript src="<?php $plxShow->template(); ?>/jquery-ui.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript"
	src="<?php $plxShow->template(); ?>/jquery.easing.1.3.js"></script>
<link rel="alternate" type="application/rss+xml"
	title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>"
	href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml"
	title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"
	href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

<! Slideshow >
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script>
  $(document).ready(function () {
  $("#slideshow > div:gt(0)").hide();
  setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow');
},  6000);
});
  </script>

</head>

<body>

	<div id="header">
		<div class="header-home">
			<div class="header-logo">
				<a href="index.php"><img
					src="<?php $plxShow->template(); ?>/img/header-logo.png"
					alt="<?php $plxShow->mainTitle(); ?>" width="230" height="207" /> </a>
			</div>
			<div class="header-text">
    			<div id="languages">
                  <a href="http://en.mariage-millenaire.com"><img class="imgFlag" title="Version Anglaise" alt="Version Anglaise" id="flagEn" src="<?php $plxShow->template(); ?>/img/icon_english.png" /></a>
                  <a href="http://www.mariage-millenaire.com"><img class="imgFlag" title="Version Francaise" alt="Version Francaise" id="flagFr" src="<?php $plxShow->template(); ?>/img/icon_french.png" /></a>
               </div>

				<h1 title="<?php $plxShow->mainTitle(); ?>">
					<span>Mariage</span> du Millénaire
				</h1>
				<p>
					<?php $plxShow->subTitle(); ?>
				</p>

				<div>
				<ul>
					<li><a title="Le mariage" class="noactive"
						href="/index.php?categorie1">Le
							mariage</a></li>
					<li class="Bullet">•</li>
					<li><a title="Les OMD" class="noactive"
						href="/index.php?categorie2">Les
							OMD</a></li>
					<li class="Bullet">•</li>
					<li><a title="Partenaires" class="noactive"
						href="/index.php?categorie3">Partenaires</a>
					</li>
					<li class="Bullet">•</li>
					<li><a title="Infos Pratiques" class="noactive"
						href="/index.php?categorie4">Infos
							Pratiques</a></li>
					<li class="clear"></li>
				 </ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header-line"></div>
	</div>