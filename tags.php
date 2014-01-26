<?php include(dirname(__FILE__).'/header.php'); ?>


	<div class="row clearfix" id="jul-billets">
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
		<div class="col-md-4 column jul-boite-article">
			<h2>
				<?php $plxShow->artTitle('link'); ?>
			</h2>
			<p>
				<?php $plxShow->artChapo(); ?>
			</p>
			<?php $plxShow->artTags('<a href="#tag_url" title="#tag_name" class="label label-default">#tag_name</a>',''); ?>
			<hr />
			<div class="jul-partage">
				<a href="http://twitter.com/share?url=<?php $plxShow->artUrl() ?>" rel="external"><img src="http://s3.amazonaws.com/static.twubs.com/types/TwubsApp/twitterbird/15blue.png" /></a><a href="https://plus.google.com/share?url=<?php $plxShow->artUrl() ?>" rel="external"><img src="http://gblor.ru/media/images/google-plus.png" /></a><a href="https://www.facebook.com/sharer/sharer.php?u=<?php $plxShow->artUrl() ?>"><img src="http://cerdi.org/images/style/facebook.gif" /></a>
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




<!--

<section>

	<div id="container">

		<div class="width-sidebar">

			<p class="directory">
				<strong><?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES').' #month #num_year(4)') ?></strong>
			</p>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> -
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_day-#num_month'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> -
						<?php $plxShow->artNbCom(); ?>
					</p>
				</header>

				<section>
					<?php $plxShow->artChapo(); ?>
				</section>

				<footer>
					<p>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>

			</article>

			<?php endwhile; ?>

			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

			<div class="rss">
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</div>

		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

</section>
-->
<?php include(dirname(__FILE__).'/footer.php'); ?>
