<?php
/*
Template Name: What we do page
*/
?>

<?php get_header(); ?>

<section>
	
		<?php global $post;
		$post_slug=$post->post_name;
		echo '<section class="bg-wedo-1" style="background:url('.get_template_directory_uri().'/library/images/'.$post_slug.'.jpg) 0 0 / 100% auto no-repeat;width: 100%;height: auto;z-index: -2;padding-bottom: 50px;color: #fff;">';
		?>
<!-- 	<div class="prlx-2"></div> -->
	<div class="row animated fadeIn">
		<div class="col-md-12 txt-bg1 " align="center">
			<div class="title-wedo"><?php echo get_post_meta($post->ID, 'Tagline', true); ?></div>
		</div>
	</div>
</section>

<div class="row">
	<div class="col-md-12 bg-wedo-2">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 animated bounceInUp">
				<div class="title-home2">WHAT WE DO</div>
				<div class="dot-h">.  .  .  .</div>
				<div class="row">
<?php 
$menu= new WP_Query(array( 'post_type' => 'page','post_parent' => '9', 'order' => 'ASC'));
while ( $menu->have_posts() )
{
$menu->the_post();{
?>
<div class="col-md-4 pd-le-0">
	<a href="<?php the_permalink();?>" title="Lihat <?php the_title();?> lebih detail...">
		<?php echo the_post_thumbnail('medium');?><br/>
		<div class="title-homeb2"><?php the_title(); ?></div>
		<div class="txt-home2">
			<?php echo substr(get_the_excerpt(), 0,200); ?> ...
		</div>
	</a>
</div>
<?php
}
}wp_reset_postdata();
?>

				</div>
			</div>
			<div class="col-md-2"></div>
		</div>	
	</div>
</div>


<?php get_footer(); ?>
