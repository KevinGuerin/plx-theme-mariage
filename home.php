<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="section">
		<div class="home-banner">
			<div class="home-banner-image"></div>
		</div>
		<div class="goal">
			<div class="goal-title">&bull; Les 8 Objectifs du Millénaire &bull;</div>
			<div class="goal-menu">
				<a href="/article2"><span id="goal1"></span></a>
				<a href="/article3"><span id="goal2"></span></a>
				<a href="/article4"><span id="goal3"></span></a>
				<a href="/article5"><span id="goal4"></span></a>
				<a href="/article6"><span id="goal5"></span></a>
				<a href="/article7"><span id="goal6"></span></a>
				<a href="/article8"><span id="goal7"></span></a>
				<a href="/article9"><span id="goal8"></span></a>
			</div>
		</div>
		
		<div class="home-body">
			<div class="save-the-date">
				<div class="home-calendar">
					<div class="home-calendar-representation">Samedi</div>
					<div class="home-calendar-day">27</div>
					<div class="home-calendar-year">Avr. 2013</div>
				</div>
				<div class="home-partners">
					<div class="partners-title">Partenaires</div>
					<div class="partners-logo home-logo"></div>
					<div id="slideshow">
                                             <?php $plxShow->lastArtList($format='
					     <div><a href="#art_url" title="#art_title"><img src="./data/images/articles/#art_id.jpg" height=150px /></a></div>
					     ',$max=10,$cat_id='3',$ending=''); ?>
                                        </div>	
					
				</div>
				<div class="home-invitations">
                                        <div class="invitations-title">La liste de mariage</div>
                                        <div class="activity-detail"><ul>
				             <?php $plxShow->lastArtList($format='<li><a href="#art_url" title="#art_title">#art_title </a></li>',$max=5,$cat_id='5',$ending=''); ?>
					     <li class="clear"></li>
				             </ul>
                                         </div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="home-info">
				<div class="home-info-pic"><img src="<?php $plxShow->template(); ?>/img/virginie.png" width="176" height="184" alt="Virginie Delugeard" /></div>
				<div class="home-info-detail">
					<div class="home-info-name">&bull; Virginie &bull;</div>
					<div class="home-info-text">Elle voulait être ethnologue, elle en garde le goût des autres et considère que les différences font la richesse de l’humanité.</div>
					<div class="home-info-link"><a href="/article36/virginie">&bull; Plus d’infos &bull;</a></div>
					<a href="/article36/virginie"><span class="home-info-click home-logo"></span></a>
				</div>
				<div class="home-info-blank"></div>
				<div class="home-info-pic"><img src="<?php $plxShow->template(); ?>/img/kevin.png" width="176" height="184"  alt="Kevin Guerin" /></div>
				<div class="home-info-detail">
					<div class="home-info-name">&bull; Kevin &bull;</div>
					<div class="home-info-text">Il a confiance en la vie et garde de sa vie en terre irlandaise le goût d’entreprendre et d’être acteur de son destin.</div>
					<div class="home-info-link"><a href="/article37/kevin">&bull; Plus d’infos &bull;</a></div>
					<a href="/article37/kevin"><span class="home-info-click home-logo"></span></a>
				</div>
				<div class="clear"></div>				
			</div>
			<div class="home-activity">
				<div class="home-activity-box1">
					<div><img src="<?php $plxShow->template(); ?>/img/pic-activity-1.png" alt="activity 1" /></div>
					<div class="home-activity-box-detail">
				             <div class="home-invitations">
					          <div class="invitations-title">Contact</div>
					          <div class="invitations-logo home-logo"></div>
					          <div class="invitations-icon"></div>
					          <div class="invitations-tel">+33 9 53 57 02 85</div>
					          <div class="invitations-email"><a href="/index.php?contact">Par Email</a></div>

				             </div> 
					</div>
												
					
				</div>
				<div class="home-activity-blank"></div>
				<div class="home-activity-box2">
					<div><img src="<?php $plxShow->template(); ?>/img/pic-activity-2.png" alt="activity 2" /></div>
					<div class="home-activity-box-detail">
							<div class="activity-title"><a href="/categorie6/week-end-vert">Week-end vert</a></div>
						<div class="activity-detail"><ul>
				        <?php $plxShow->lastArtList($format='<li><a href="#art_url" title="#art_title">#art_title </a></li>',$max=5,$cat_id='6',$ending=''); ?>
					<li class="clear"></li>
				 </ul></div>
</div>
						
				</div>
				<div class="home-activity-blank"></div>
				<div class="home-activity-box1">
					<div><img src="<?php $plxShow->template(); ?>/img/pic-activity-3.png" alt="activity 3" /></div>
					<div class="home-activity-box-detail">
						<div class="activity-title"><a href="/categorie7/blog">Blog</a></div>
						<div class="activity-detail">				<ul>
				        <?php $plxShow->lastArtList($format='<li><a href="#art_url" title="#art_title">#art_title </a></li>',$max=5,$cat_id='7',$ending=''); ?>
					<li class="clear"></li>
				 </ul>
				</div>
				<div class="clear"></div>
				<div class="home-family-art" ><img src="<?php $plxShow->template(); ?>/img/home-family-art.png" alt="" width="225" height="237" /></div>				
			</div>
		</div>
	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>