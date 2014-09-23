<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package NineElevenDigitalArchive
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div id="footer-nav">
    		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
        <div class="site-info">
			<p>Copyright &copy; 2002-2014, <a href="http://chnm.gmu.edu" target="external">Roy Rosenzweig Center for History and New Media</a> and <a href="http://www.ashp.cuny.edu" target="external">American Social History Project/Center for Media and Learning</a>.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
