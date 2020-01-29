<?php if (!defined('PLX_ROOT')) exit; ?>

	<footer class="footer">
		<div class="container">
			<p>
				<?php $plxShow->mainTitle('link'); ?> - <?php $plxShow->subTitle(); ?> &copy; 2018
			</p>
			<p>
				<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
				<?php $plxShow->httpEncoding() ?>&nbsp;- 
				<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
			</p>
			<ul class="menu">
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
				<li><a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></li>
			</ul>
		</div>
	</footer>




<!-- JS begin -->

		<!-- jQuery  -->
		<script  src="../js/jquery.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>		

		<!-- MAGNIFIC POPUP -->
		<script src="../js/jquery.magnific-popup.min.js"></script>
    
    <!-- PORTFOLIO SCRIPTS -->
    <script  src="../js/imagesloaded.pkgd.min.js"></script>

    
    <!-- APPEAR -->    
    <script  src="../js/jquery.appear.js"></script>
    
    <!-- OWL CAROUSEL -->    
    <script  src="../js/owl.carousel.min.js"></script>
    
    <!-- MAIN SCRIPT -->
		<script src="../js/main.js"></script>
		
		<!-- REVOSLIDER SCRIPTS  -->
    <script src="../revo-slider/js/jquery.themepunch.tools.min.js" >
    </script>
    <script src="../revo-slider/js/jquery.themepunch.revolution.min.js" >
    </script>
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
    <script src="../revo-slider/js/extensions/revolution.extension.actions.min.js" ></script>
    <script src="../revo-slider/js/extensions/revolution.extension.carousel.min.js" ></script>
    <script src="../revo-slider/js/extensions/revolution.extension.kenburn.min.js" ></script>
    <script src="../revo-slider/js/extensions/revolution.extension.layeranimation.min.js" >
    </script>
    <script src="../revo-slider/js/extensions/revolution.extension.migration.min.js" ></script>
    <script src="../revo-slider/js/extensions/revolution.extension.navigation.min.js" ></script>
    <script src="../revo-slider/js/extensions/revolution.extension.parallax.min.js" ></script>
    <script src="../revo-slider/js/extensions/revolution.extension.slideanims.min.js" ></script>
    <script src="../revo-slider/js/extensions/revolution.extension.video.min.js" ></script>
</body>

</html>
