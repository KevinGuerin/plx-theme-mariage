<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="section">

		<div class="article-body">
			<div class="goal-2">
				<div class="goal-title-2">&bull; Les 8 Objectifs du Millénaire &bull;</div>
				<div class="goal-menu-2">
					<a href="/article2"><span id="goal1-2"></span></a>
					<a href="/article3"><span id="goal2-2"></span></a>
					<a href="/article4"><span id="goal3-2"></span></a>
					<a href="/article5"><span id="goal4-2"></span></a>
					<a href="/article6"><span id="goal5-2"></span></a>
					<a href="/article7"><span id="goal6-2"></span></a>
					<a href="/article8"><span id="goal7-2"></span></a>
					<a href="/article9"><span id="goal8-2"></span></a>
				</div>
			</div>
				
			<div class="article-box">
				<div class="article-detail-box">
					<div>
						<div class="article-detail-title"><h2><?php $plxShow->staticTitle(); ?></h2></div>
						<span class="article-detail-btn home-logo"></span>
						<div class="clear"></div>	
					</div>
					<div class="article-detail-text">
					<?php $plxShow->staticContent(); ?>
					<div class="clear"></div>	
					</div>				
				</div>
				<div class="article-detail-pic"><img src="<?php $plxShow->template(); ?>/img/article-pic.png" alt="" width="835" height="344" /></div>
				<div class="article-detail-map"><a href="http://goo.gl/maps/HD0h1"  target="_blank"><img src="<?php $plxShow->template(); ?>/img/article-map.png" alt="" width="168" height="165" /></a></div>
				<div class="article-detail-family-art"></div>
			</div>
			
		</div>			
	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>