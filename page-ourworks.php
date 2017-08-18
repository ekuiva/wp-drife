<?php
/*
Template Name: Our Works Page
*/
?>

<?php get_header(); ?>

<section class="bg-who-9">
<div class="prlx-3"></div>
<div class="row animated fadeIn">
	<div class="col-md-12 txt-bg1 " align="center">
		<div class="title-wedo"><?php echo get_post_meta($post->ID, 'Tagline', true); ?></div>

	</div>
</div>
</section>


<div class="row">
	<div class="col-md-12 bg-home3">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<div class="title-home3">OUR WORKS</div>
						<div class="dot-h3">.  .  .  .</div>
					</div>
					<div class="col-md-8" align="right">
<ul class="nav nav-tabs nav-wedo">
<li class="active"><a data-toggle="tab" href="#se-1">ALL</a></li>
<li><a data-toggle="tab" href="#se-2">STRATEGY &amp; CONSULTANCY</a></li>
<li><a data-toggle="tab" href="#se-3">PRESENCE</a></li>
<li><a data-toggle="tab" href="#se-4">ACTIVATION</a></li>
<li><a data-toggle="tab" href="#se-5">EVALUATION</a></li>

	<!-- <li class="dropdown">
	<a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a data-toggle="tab" href="#se-1">Dropdown1</a></li>
	<li><a data-toggle="tab" href="#se-2">Dropdown2</a></li>
	</ul> -->

</li>
</ul>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 pd-0" align="center">
<div class="tab-content">
<div id="se-1" class="tab-pane fade in active">
	<div class="row">
<?php 
$menu2= new WP_Query(array( 'post_type' => 'ourworks','posts_per_page'=> -1));
while ( $menu2->have_posts() )
{
$menu2->the_post();
?>
		<div class="col-md-3 img-works load6 pd-10"><?php the_post_thumbnail('full'); ?>
			<a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;">
			<div class="hover-red animated fadeIn">
				<div class="glyphicon glyphicon-plus plus-red"></div>
				<div class="t-works"><?php the_title();?></div>
			</div>
			</a>
		</div>

<?php
}wp_reset_postdata();
?>
<div class="v-works2"></div>

	</div>
	<div class="load-1 bn1" rel="" align="center">SEE MORE</div>
</div>

<div id="se-2" class="tab-pane fade">
<div class="row">
<?php 
$ne1 = 'strategy_consultancy';
$menu= new WP_Query(array( 'post_type' => 'ourworks','posts_per_page'=> -1,'category_name'=>$ne1));
while ( $menu->have_posts() )
{
$menu->the_post();
?>
		<div class="col-md-3 img-works load7 pd-10"><?php the_post_thumbnail('full'); ?>
			<a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;">
			<div class="hover-red animated fadeIn">
				<div class="glyphicon glyphicon-plus plus-red"></div>
				<div class="t-works"><?php the_title();?></div>
			</div>
			</a>
		</div>

<?php
}wp_reset_postdata();
?>
<div class="v-works2"></div>

	</div>
	<div class="load-1 bn2" rel="<?php echo $ne1;?>" align="center">SEE MORE</div>
</div>


<div id="se-3" class="tab-pane fade">
<div class="row">
<?php 
$ne1 = 'presence';
$menu= new WP_Query(array( 'post_type' => 'ourworks','posts_per_page'=> -1,'category_name'=>$ne1));
while ( $menu->have_posts() )
{
$menu->the_post();
?>
		<div class="col-md-3 img-works load8 pd-10"><?php the_post_thumbnail('full'); ?>
			<a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;">
			<div class="hover-red animated fadeIn">
				<div class="glyphicon glyphicon-plus plus-red"></div>
				<div class="t-works"><?php the_title();?></div>
			</div>
			</a>
		</div>

<?php
}wp_reset_postdata();
?>
<div class="v-works2"></div>

	</div>
	<div class="load-1 bn3" rel="<?php echo $ne1;?>" align="center">SEE MORE</div>
</div>


<div id="se-4" class="tab-pane fade">
<div class="row">
<?php 
$ne1 = 'activation';
$menu= new WP_Query(array( 'post_type' => 'ourworks','posts_per_page'=> -1,'category_name'=>$ne1));
while ( $menu->have_posts() )
{
$menu->the_post();
?>
		<div class="col-md-3 img-works load9 pd-10"><?php the_post_thumbnail('full'); ?>
			<a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;">
			<div class="hover-red animated fadeIn">
				<div class="glyphicon glyphicon-plus plus-red"></div>
				<div class="t-works"><?php the_title();?></div>
			</div>
			</a>
		</div>

<?php
}wp_reset_postdata();
?>
<div class="v-works2"></div>

	</div>
	<div class="load-1 bn4" rel="<?php echo $ne1;?>" align="center">SEE MORE</div>
</div>


<div id="se-5" class="tab-pane fade">
<div class="row">
<?php 
$ne1 = 'evaluation';
$menu= new WP_Query(array( 'post_type' => 'ourworks','posts_per_page'=> -1,'category_name'=>$ne1));
while ( $menu->have_posts() )
{
$menu->the_post();
?>
		<div class="col-md-3 img-works load10 pd-10"><?php the_post_thumbnail('full'); ?>
			<a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;">
			<div class="hover-red animated fadeIn">
				<div class="glyphicon glyphicon-plus plus-red"></div>
				<div class="t-works"><?php the_title();?></div>
			</div>
			</a>
		</div>

<?php
}wp_reset_postdata();
?>
<div class="v-works2"></div>

	</div>
	<div class="load-1 bn5" rel="<?php echo $ne1;?>" align="center">SEE MORE</div>
</div>


</div>
						
						
					</div>
				</div>
				

			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
