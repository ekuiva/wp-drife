<?php
/*
Template Name: Content We Do Page
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php global $post;
		$post_slug=$post->post_name;
		echo '<section class="bg-wedo-1" style="background:url('.get_template_directory_uri().'/library/images/'.$post_slug.'.jpg); 100% 0 / cover no-repeat;width: 100%;height: auto;z-index: -2;padding-bottom: 50px;color: #fff;">';
		?>
<div class="prlx-2"></div>

<div class="row animated fadeIn">
	<div class="col-md-12 txt-bg1 " align="center">
		

		<div class="title-wedo"><?php echo get_post_meta($post->ID, 'Tagline', true); ?></div>
		

	</div>
</div>
</section>

<div class="row">
	<div class="col-md-12 bg-wedo-2">



<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">


		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 animated bounceInUp">
				<div class="title-wedocon"><?php the_title(); ?></div>
				<div class="dot-h">.  .  .  .</div>

				<div class="row">
					<div class="col-md-12 txt-wedocon pd-0" align="left">
						<?php the_content(); ?>
					</div>
				</div>

<div class="row isi">
<?php 

	$meta1 = get_post_meta($post->ID,'wedodetail',true);
	
	foreach ($meta1 as $key => $value) {
		$titlecon = $value['title-service'];
		$konten = $value['content-service'];
		$idpoto =$value['picture-logo'];
		$linkpoto = wp_get_attachment_image_src($idpoto,'full');
?>
<div class="col-md-6 pd-le-0 isi" align="left">
<div class="img-conwedo" align="left"><img src="<?php echo $linkpoto[0];?>" /></div>
<div class="title-conwedo"><?php echo $titlecon;?></div>
<div class="txt-conwedo"><?php echo $konten; ?></div>
</div>
<?php
	}

?>
</div>
			</div>
			<div class="col-md-2"></div>
		</div>	
	</div>
</div>


<div class="row">
	<div class="col-md-12 bg-home6">
		<div class="row">
<div class="col-md-2"></div>
<?php if(is_page(120)){ ?>
<?php 
$menu= new WP_Query(array( 'post_type' => 'page','posts_per_page'=> -1));
while ( $menu->have_posts() )
{
$menu->the_post();
$idwedo = get_the_ID();
if($idwedo == 122){
?>

<div class="col-md-4"></div>
<div class="col-md-4 pd-0" align="right">
<a href="<?php the_permalink();?>" title="Lihat <?php the_title();?> lebih detail...">
<div class="title-homeb2"><?php echo the_post_thumbnail('small');?> <?php the_title(); ?> <span class="glyphicon glyphicon-menu-right box-mn"></span></div>
</a></div>

<?php
}
}wp_reset_postdata();
?>
<?php } ?>

<?php if(is_page(122)){ ?>
<?php 
$menu= new WP_Query(array( 'post_type' => 'page','posts_per_page'=> -1));
while ( $menu->have_posts() )
{
$menu->the_post();
$idwedo = get_the_ID();
if($idwedo == 120){ 
?>

<div class="col-md-4 pd-0" align="left">
<a href="<?php the_permalink();?>" title="Lihat <?php the_title();?> lebih detail...">
<div class="title-homeb2"><span class="glyphicon glyphicon-menu-left box-mn2"></span> <?php echo the_post_thumbnail('small');?> <?php the_title(); ?></div>
</a>
</div>
<?php
}
}wp_reset_postdata();
 
$menu= new WP_Query(array( 'post_type' => 'page','posts_per_page'=> -1));
while ( $menu->have_posts() )
{
$menu->the_post();
$idwedo = get_the_ID();
if($idwedo == 124){ 
?>
<div class="col-md-4 pd-0" align="right">
<a href="<?php the_permalink();?>" title="Lihat <?php the_title();?> lebih detail...">
<div class="title-homeb2"><?php echo the_post_thumbnail('small');?> <?php the_title(); ?> <span class="glyphicon glyphicon-menu-right box-mn"></span></div>
</a></div>

<?php
}
}wp_reset_postdata();
?>
<?php } ?>

<?php if(is_page(124)){ ?>
<?php 
$menu= new WP_Query(array( 'post_type' => 'page','posts_per_page'=> -1));
while ( $menu->have_posts() )
{
$menu->the_post();
$idwedo = get_the_ID();
if($idwedo == 122){ 
?>

<div class="col-md-4 pd-0" align="left">
<a href="<?php the_permalink();?>" title="Lihat <?php the_title();?> lebih detail...">
<div class="title-homeb2"><span class="glyphicon glyphicon-menu-left box-mn2"></span> <?php echo the_post_thumbnail('small');?> <?php the_title(); ?></div>
</a>
</div>
<?php
}
}wp_reset_postdata();

$menu= new WP_Query(array( 'post_type' => 'page','posts_per_page'=> -1));
while ( $menu->have_posts() )
{
$menu->the_post();
$idwedo = get_the_ID();
if($idwedo == 126){ 
?>
<div class="col-md-4 pd-0" align="right">
<a href="<?php the_permalink();?>" title="Lihat <?php the_title();?> lebih detail...">
<div class="title-homeb2"><?php echo the_post_thumbnail('small');?> <?php the_title(); ?> <span class="glyphicon glyphicon-menu-right box-mn"></span></div>
</a></div>

<?php
}
}wp_reset_postdata();
?>
<?php } ?>

<?php if(is_page(126)){ ?>
<?php 
$menu= new WP_Query(array( 'post_type' => 'page','posts_per_page'=> -1));
while ( $menu->have_posts() )
{
$menu->the_post();
$idwedo = get_the_ID();
if($idwedo == 124){
?>

<div class="col-md-4 pd-0" align="left">
<a href="<?php the_permalink();?>" title="Lihat <?php the_title();?> lebih detail...">
<div class="title-homeb2"><span class="glyphicon glyphicon-menu-left box-mn2"></span> <?php echo the_post_thumbnail('small');?> <?php the_title(); ?></div>
</a>
</div>
<div class="col-md-4"></div>

<?php
}
}
?>
<?php } ?>
<div class="col-md-2"></div>
		</div>
	</div>
</div>


</article> <!-- end article -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
