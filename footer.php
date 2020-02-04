<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restec
 */

?>

	</div><!-- #content -->
	<div class="footer-border"></div>
	<footer id="colophon" class="site-footer">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-3',
				'menu_id'        => 'footer-main-menu',
				'container_class'=> 'menu-footer-main-menu-container',
			) );
		?>
		<div class="site-info">
			<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'restec' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'restec' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'restec' ), 'restec', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>-->
			<p class="copyright">&copy; <?php echo date('Y'); ?> 
				<a href="<?php echo get_bloginfo('url'); ?>">
					<?php echo get_bloginfo('name'); ?>
				</a>
				<img src="<?php echo get_template_directory_uri(); ?>/img/swissmade.png" />
			</p>
			<p class="social">
				<a href="https://www.youtube.com/channel/UC3k78o7qy6J9YNNJ48AoYsw"><img src="<?php echo get_template_directory_uri(); ?>/img/yt.png" /></a>
			</p>
		</div><!-- .site-info -->
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'footer-menu',
				'container_class'=> 'menu-footer-menu-container',
			) );
		?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
