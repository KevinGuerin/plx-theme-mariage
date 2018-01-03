<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="section">

		<div class="category-body">
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
				
			<div class="category-box">
				<?php $index = 1; ?>
				<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<div class="category-zone" id="category-zone<?php echo $index; ?>">
					<div class="category-detail-box">
						<div>
							<div class="category-detail-title"><h2><?php $plxShow->artTitle('link'); ?></h2></div>
							<span class="category-detail-btn home-logo"></span>
							<div class="clear"></div>	
						</div>
						<div class="category-detail-text"><?php $plxShow->artChapo(); ?></div>
					</div>
<?php
					if (file_exists("./data/images/articles/".$plxShow->artId().".jpg"))
					{
					    if($index%2 == 0){
							echo '<div class="category-pic4"><img src="/data/images/articles/'.$plxShow->artId().'.jpg" /></div>';
						}else if($index%2 == 1){
							echo '<div class="category-pic5"><img src="/data/images/articles/'.$plxShow->artId().'.jpg" /></div>';
						}
					}
					else echo '<div class="category-pic1"></div>';

					$index++;
?>
				</div>
				<?php endwhile; ?>					
			</div>
			
			<p id="pagination"><?php $plxShow->pagination(); ?></p>	
			
		</div>	
	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>