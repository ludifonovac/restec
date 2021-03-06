<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Restec
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		/*if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;*/

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				restec_posted_on();
				restec_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php restec_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'restec' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'restec' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php restec_entry_footer(); ?>
		<div class="homepage-links">
			<a href="<?php the_field('first_section_url'); ?>" title="<?php the_field('first_section_title'); ?>">
				<?php
					$image1=get_field('first_section_image');
				?>
				<img src="<?php echo $image1['url']; ?>" alt="<?php the_field('first_section_title'); ?>" />
				<h3><?php the_field('first_section_title'); ?></h3>
			</a>
			<a href="<?php the_field('second_section_url'); ?>" title="<?php the_field('second_section_title'); ?>">
				<?php
					$image2=get_field('second_section_image');
				?>
				<img src="<?php echo $image2['url']; ?>" alt="<?php the_field('second_section_title'); ?>" />
				<h3><?php the_field('second_section_title'); ?></h3>
			</a>
			<a href="<?php the_field('third_section_url'); ?>" title="<?php the_field('third_section_title'); ?>">
				<?php
					$image3=get_field('third_section_image');
				?>
				<img src="<?php echo $image3['url']; ?>" alt="<?php the_field('third_section_title'); ?>" />
				<h3><?php the_field('third_section_title'); ?></h3>
			</a>
			<a href="<?php the_field('fourth_section_url'); ?>" title="<?php the_field('fourth_section_title'); ?>">
				<?php
					$image4=get_field('fourth_section_image');
				?>
				<img src="<?php echo $image4['url']; ?>" alt="<?php the_field('fourth_section_title'); ?>" />
				<h3><?php the_field('fourth_section_title'); ?></h3>
			</a>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
