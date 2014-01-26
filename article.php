<?php include(dirname(__FILE__).'/header.php'); ?>


	<div class="row clearfix" id="jul-article">
		<div class="col-md-12 column jul-boite-article">
					<h2><?php $plxShow->artTitle(''); ?></h2>
					<?php $plxShow->artContent(); ?>
					<?php $plxShow->artTags('<a href="#tag_url" title="#tag_name" class="label label-default">#tag_name</a>',''); ?>
			<hr />
			<div class="jul-partage">
				<a href="http://twitter.com/share?url=<?php $plxShow->artUrl() ?>" rel="external"><img src="http://s3.amazonaws.com/static.twubs.com/types/TwubsApp/twitterbird/15blue.png" /></a><a href="https://plus.google.com/share?url=<?php $plxShow->artUrl() ?>" rel="external"><img src="http://gblor.ru/media/images/google-plus.png" /></a><a href="https://www.facebook.com/sharer/sharer.php?u=<?php $plxShow->artUrl() ?>"><img src="http://cerdi.org/images/style/facebook.gif" /></a>
			</div>
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>
		</div>
	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
