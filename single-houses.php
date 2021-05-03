<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?> style="width:100%;">

		<main id="main" class="site-main" >

			<article class="ast-article-single">

				<div class="entry-content clear">

					<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

						<!-- WP PAGINATION ***** -->

						<div class="pagination" style="text-align:center; width:100%; display:flex; justify-content:space-between; background-color:#f6f0f0; padding: .5rem 1rem;">
						
					   <?php next_post_link("%link", "⇦ Previous") ?>
					   <a href="http://localhost/wp-custom-post-demo1/houses/"> View All Houses</a>
					   <?php previous_post_link("%link", "Next ⇨ ") ?>		
				    </div> <!-- /.pagination -->

						<br><br>

					<header class="entry-header">

						<!-- THE TITLE  /  CUSTOM FIELDS -> PRICE - BANNER ***** -->

					<h1 class="entry-title" style="font-size:3rem; font-weight:700"> <?php the_title(); ?> </h1>

					<p style="text-decoration:underline; font-size:2rem"> <em><?php the_field("house_price"); ?></em> </p>

					<p style="font-size: 1.3rem; background-color: rgb(200,89,34); color:white; padding:.5rem 1rem; position:relative; top:3rem; left: 3rem; z-index:10; border-radius: 5px; display:inline;"> <?php the_field("house_banner"); ?> </p>
				 </header> 

					<div class="single-property">
						<div class="hero-photo" style="position:relative;">

							<!-- THE FEATURE IMAGE ***** -->
							<div style="border-radius: 10px; overflow:hidden">
								<?php
									if (has_post_thumbnail()) {
										the_post_thumbnail();
									}
								?>
							</div>

							<!-- CUSTOM FIELDS -> SELLER PHOTO ***** -->
							
							<?php $seller_style = "border: 2px solid white; border-radius: 50%; position: absolute; right:3rem; bottom: -5rem; width:10rem; box-shadow: 0 0 10px rgba(0,0,0,.4)"?>

							<?php $seller_photo = get_field("house_seller");  ?>
							<?php if($seller_photo) : ?>
									<img src="<?php echo $seller_photo["url"] ?>" alt="<?php echo $seller_photo["alt"] ?>" style="<?php echo $seller_style?>">
							<?php endif; ?>
						</div>

							<br><br>

							<!-- CUSTOM FIELDS -> LOCATION ***** -->

							<h3 style="font-weight: 600">Location</h3>
							<p> <span style="margin-right:1rem;">🌍</span><em><?php the_field("house_location");  ?> </em></p>

							<br>

						  <!-- CUSTOM TAXONOMY - TAG NAME -->
							<p> <?php echo ((get_the_term_list($post->ID, "house_tag", "<h3 style='font-weight: 600;'>Tags:</h3>", ", ", "."))) ?> </p> 

							<br>

							<!-- CUSTOM FIELDS -> SPECIFICATION ***** -->
							
							<h3 style="font-weight: 600">Specification</h3>
							<div style="background:rgba(0,0,0,.08); border-radius:8px; padding:2rem;">
								<ul style="list-style-type:none; margin:0">
									<li><span style="margin-right:1rem;">🛏</span>  Bedrooms: <?php the_field("house_bedrooms"); ?></li>
									<li><span style="margin-right:1rem;">🏡</span>    Total floors: <?php the_field("house_floors"); ?></li>
									<li><span style="margin-right:1rem;">🚿 </span>   Bathrooms: <?php the_field("house_bath"); ?></li>
									<li><span style="margin-right:1rem;">🌊 </span>  
									Pool: <?php the_field("house_pool"); ?></li>
								</ul>
							</div>

							<br>

							<!-- CUSTOM FIELDS -> EXTRAS ***** -->
							<!-- CONDITION - if -> custom field data -> show data -->
							<?php if(get_field("house_extras")): ?>	
							<h3 style="font-weight: 600; margin-top: 1.8rem;">Extras</h3>
							<p> <?php the_field("house_extras") ?> </p>
							<?php endif; ?>

							<!-- GALLERY *place here* -->

							<br>

							<!-- CUSTOM FIELDS -> DESCRIPTION ***** -->

							<h3 style="font-weight: 600">Description</h3>
							<p> <?php the_field("house_description"); ?> </p>

							<!-- GETWID - STACK GALLERY *ubicar aqui* -->

							<br><br>

						<!-- WP GUTTEMBERG CONTENT ***** -->
						  <?php the_content(); ?> 
					  </div> <!-- /.single-property -->
				
						<br><br>

						<!-- WP PAGINATION ***** -->

					<div class="pagination" style="text-align:center; width:100%; display:flex; justify-content:space-between;background-color:#f6f0f0; padding: .5rem 1rem;">
								
					<?php next_post_link("%link", "⇦ Previous") ?>
					<a href="http://localhost/wp-custom-post-demo1/houses/"> View All Houses</a>
					<?php previous_post_link("%link", "Next ⇨ ") ?>		
					</div> <!-- /.pagination -->

					<?php endwhile; endif ?>

				  </div> <!-- /.entry-content -->
			
			</article>
		
		</main>


	</div><!-- #primary -->

<?php get_footer(); ?>
