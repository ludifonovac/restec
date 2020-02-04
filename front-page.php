<?php
/**
 * The template for displaying front page
 *
 * This is the template that displays front page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Restec
 */

get_header(); ?>

	<div class="home-slider">
	<?php
		$slide1img=get_field('slide_1_image');
		$slide2img=get_field('slide_2_image');
		$slide3img=get_field('slide_3_image');
		$slide4img=get_field('slide_4_image');
		$slide5img=get_field('slide_5_image');

		$slide1page=get_field('slide_1_linked_page');
		$slide2page=get_field('slide_2_linked_page');
		$slide3page=get_field('slide_3_linked_page');
		$slide4page=get_field('slide_4_linked_page');
		$slide5page=get_field('slide_5_linked_page');

		$slide1=array (
			'img'=>$slide1img['url'],
			'id'=>$slide1page->ID,
			'title'=>$slide1page->post_title
		);
		$slide2=array (
			'img'=>$slide2img['url'],
			'id'=>$slide2page->ID,
			'title'=>$slide2page->post_title
		);
		$slide3=array (
			'img'=>$slide3img['url'],
			'id'=>$slide3page->ID,
			'title'=>$slide3page->post_title
		);
		$slide4=array (
			'img'=>$slide4img['url'],
			'id'=>$slide4page->ID,
			'title'=>$slide4page->post_title
		);
		$slide5=array (
			'img'=>$slide5img['url'],
			'id'=>$slide5page->ID,
			'title'=>$slide5page->post_title
		);

		$slides=array($slide1, $slide2, $slide3, $slide4, $slide5);
		?>
		<div class="home-slides-carousel" >
			<div id="ISCarousel" class="carousel slide multi-item-carousel">
				<div class="carousel-inner">
		<?php	
		$i=0;

		foreach ($slides as $slide) {
	?>
					<div class="item <?php echo ($i==1)?'active':''; ?>">
						<img src="<?php echo $slide['img']; ?>" alt="<?php echo $slide['title']; ?>" />
						<div class="slider-text">
							<a href="<?php echo get_permalink($slide['id']); ?>" title="<?php echo $slide['title']; ?>">
								<h2><?php echo $slide['title']; ?></h2>
							</a>
							<div class="orange-gradient"></div>
							<a class="explore" href="<?php echo get_permalink($slide['id']); ?>" title="<?php echo $slide['title']; ?>"><?php echo __('Explore now','restec'); ?></a>
						</div>
					</div>
	<?php
		$i++;
		}
	?>
				</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#ISCarousel" role="button" data-slide="prev">
				<span class="icon-prev"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#ISCarousel" role="button" data-slide="next">
				<span class="icon-next"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<?php
		/*	$i++;
			
			$images=array ('slider1', 'slider2', 'slider3', 'slider4');
			$url=get_template_directory_uri();
			$implodecontent='.jpg" /></div><div class="item"><img src="'.$url.'/img/';
			$implode=implode ($implodecontent, $images);
			$nimplode='<div class="item active"><img src="'.$url.'/img/'.$implode.'.jpg" /></div>';
			$shortcode='[restec-img-slider]'.$nimplode.'[/restec-img-slider]';
			echo do_shortcode($shortcode);*/ 
		?>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-homepage', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;*/

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
