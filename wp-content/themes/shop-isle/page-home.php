<?php

/**
 * Template Name: home page
 *
 * @package ShopIsle
 */

get_header();




?>



<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Best Selling Products</h3>
				<?php echo do_shortcode('[products limit="4" columns="4" best_selling="true" ]'); ?>
			</div>
		</div>
	</div>
</section>




<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Featured Products</h3>
				<?php echo do_shortcode('[products limit="4" columns="4" featured="true" ]'); ?>
			</div>
		</div>
	</div>
</section>



<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Product Categories</h3>
				<?php echo do_shortcode('[product_categories number="0" parent="0"]'); ?>
			</div>
		</div>
	</div>
</section>

<?php 

get_footer();











