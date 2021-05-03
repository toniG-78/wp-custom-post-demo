<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?> style="width:100%;">

		<main id="main" class="site-main">

			<article class="ast-article-single">

				<!-- HEADER -->

				<header class="entry-header">
					<h1 style="font-size:3rem; font-weight:700; text-align:center; margin-bottom: 3rem">Houses</h1>
					<div style="text-align:center">
						<p style="font-size: 1.5rem; font-weight:600">Filter by: 
						<?php  ?>
						</p>

						<!--  show CUSTOM TAXONOMY LIST -->
						<div style="">
								<li class="cat-item"><a href="http://localhost/wp-custom-post-demo1/houses/">View All</a></li>
								<?php 
									$args = array(
										"orderby"   	=>  "menu_order",
										"show_count"  =>   0,
										"taxonomy"    =>  "house_category",
										"title_li"    =>  "",
										"hierachical" =>  true
									);
									wp_list_categories($args);
								?>
						</div>

					</div>
				</header>

				<br></br><br>

				<!-- WORDPRESS - THE LOOP -->

				<div class="entry-content clear">
					<div class="properties-wrapper">
						<div class="flex-grid" style="display:flex; flex-wrap:wrap; justify-content:center;"> 

							<!--TODO: MAKE A GRID FOR 3 ITEMS -->


							
							<!-- WP -  POSTS - PAGINATION ***** -->

	  					<div class="pagination" style="text-align:center; width:100%; display:flex; justify-content:space-between;background-color:#f6f0f0; padding: .5rem 1rem; margin-bottom: 3rem">						
								<p>
									<?php the_posts_pagination( array(
	    							'mid_size'  => 2,
	    							'prev_text' => __( '⇦ Previous', 'textdomain' ),
	    							'next_text' => __( 'Next ⇨', 'textdomain' ),
									)); ?>	
								</p>
							</div> <!-- /.pagination -->

							<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

								<!-- EACH POST TYPE - CARDS ********* --->

								<div class="col" style="flex: 1 1 35%;border-radius:5px; overflow: hidden; box-shadow: 0 0 30px rgba(0,0,0,.3);  margin-left: 1rem; transition: transform .3s; position:relative; margin-bottom: 3rem"> 

									<!-- POST TYPE URL SINGLE-PAGE -->  
									<a href="<?php the_permalink();?>">

										<!-- FEATURE IMAGES **** -->

										<img style="widht:100%; display: block">
											<?php if(has_post_thumbnail()) {
													the_post_thumbnail();
												}		
											?>
										</img>
									</a>
										<!-- CUSTOM TAXONOMY - CATEGORY NAME -->
										<p> <?php echo strip_tags((get_the_term_list($post->ID, "house_category"))) ?> </p> 

										<!--POST TYPE TITLE**** -->

										<div style="padding: .8rem; text-align:center; font-size:.8rem">
											<h3 style="margin-bottom:0;"><?php the_title();?></h3>

										<!--POST TYPE - CUSTOM FIELDS ***** -->

											<p style="text-decoration:underline; font-size:1rem; font-weight:600"> <em><?php the_field("house_price"); ?></em> </p>

											<span style="margin-right:.2rem;">🌍</span>
											<em><?php the_field("house_location");  ?> </em>

											<!-- ON THE TOP OF EACH ITEM CARD -->
											<p style="font-size: .8rem; font-weight: 600;background-color: rgb(200,89,34); color:white; padding:.5rem 0rem; border-radius: 5px;margin:auto; width:100px; position: absolute; top: 10px; letter-spacing: 2.5px"> <?php the_field("house_banner"); ?> </p>
											<p> Bedrooms: <?php the_field("house_bedrooms"); ?> | Floors:<?php the_field("house_floors"); ?> | Bathrooms: <?php the_field("house_bath"); ?> </p>
									
										</div>

							
								</div> <!-- /.col -->

							<?php endwhile; endif; ?>
						</div><!-- /.flex-grid-->
					</div>
				</div> <!-- /.entry-content -->

			</article>								
		</main><!-- /.site-main -->

		<!-- WP -  POSTS - PAGINATION ***** -->

	  <div class="pagination" style="text-align:center; width:100%; display:flex; justify-content:space-between;background-color:#f6f0f0; padding: .5rem 1rem;">						
			<p>
				<?php the_posts_pagination( array(
	    		'mid_size'  => 2,
	    		'prev_text' => __( '⇦ Previous', 'textdomain' ),
	    		'next_text' => __( 'Next ⇨', 'textdomain' ),
				)); ?>	
			</p>
		</div> <!-- /.pagination -->



	</div><!-- #primary -->


<?php get_footer(); ?>