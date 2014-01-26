<?php include(dirname(__FILE__).'/header.php'); ?>
	<div class="row clearfix" id="jul-billets">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
		<div class="col-md-4 column jul-boite-article">
			<h2>
				<?php $plxShow->artTitle('link'); ?>
			</h2>
				<?php $plxShow->artChapo(); ?>
			<?php $plxShow->artTags('<a href="#tag_url" title="#tag_name" class="label label-default">#tag_name</a>',''); ?>
			<hr />
			<div class="jul-partage">
				<a href="http://twitter.com/share?url=<?php $plxShow->artUrl() ?>" rel="external"><img src="<?php $plxShow->template() ?>/img/twitter.png" alt="Partage Twitter" /></a><a href="https://plus.google.com/share?url=<?php $plxShow->artUrl() ?>" rel="external"><img src="<?php $plxShow->template() ?>/img/googleplus.png" alt="Partage Google Plus" /></a><a href="https://www.facebook.com/sharer/sharer.php?u=<?php $plxShow->artUrl() ?>"><img src="<?php $plxShow->template() ?>/img/facebook.gif" alt="Partage Facebook" /></a>
			</div>
			<div class="jul-com">
				<img src="<?php $plxShow->template() ?>/img/bulle.gif" alt="Commentaires" /> <?php $plxShow->artNbCom() ?>
			</div>
		</div>
	        <?php endwhile; ?>
	</div>

	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/masonry.pkgd.min.js"></script>
<script>
var container = document.querySelector('#jul-billets');
var msnry;
imagesLoaded(container, function() {
	new Masonry( container, {
  		itemSelector: '.jul-boite-article'
	});
});

</script>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>

<?php include(dirname(__FILE__).'/footer.php'); ?>
