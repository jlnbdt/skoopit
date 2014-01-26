<?php if (!defined('PLX_ROOT')) exit; ?>


	</div>

	<div class="row clearfix">
		<div class="col-md-12 column" id="footer">
			<p>
			<?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?>
			</p>
			<p>
			<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
			<?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?>
			<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
			<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
			<?php $plxShow->httpEncoding() ?>
			</p>

		</div>
	</div>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/scripts.js"></script>
</body>
</html>



