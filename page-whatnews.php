<?php
/*
Template Name: What's New Page
*/
?>

<?php get_header(); ?>

<section class="bg-who-1">
<div class="prlx-2"></div>
<div class="row animated fadeIn">
	<div class="col-md-12 txt-bg1 " align="center">
		<div class="title-who">LET US HELP YOU THROUGH</div>

	</div>
</div>
</section>

<div class="row">
	<div class="col-md-12 bg-home6">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="row">
						<div class="col-md-5 animated fadeInUp">
							<div class="title-home2">FRESH FROM THE NEWS</div>
							<div class="dot-h">.  .  .  .</div>
						</div>
						<div class="col-md-7 animated fadeInRight" align="right">

	<ul class="nav nav-tabs nav-news">
	<li class="active"><a data-toggle="tab" href="#se-1">ALL</a></li>
	<li><a data-toggle="tab" href="#se-2">NEWS</a></li>
	<li><a data-toggle="tab" href="#se-3">TIPS</a></li>
	<li><a data-toggle="tab" href="#se-4">EVENT</a></li>
	</li>
	</ul>
						</div>
				</div>


<div class="row animated fadeInUp" align="center">
<div class="col-md-12 pd-0" align="center">

<div class="tab-content">


<div id="se-1" class="tab-pane fade in active">
	<div class="row">
<?php 

$menu= new WP_Query(array( 'post_type' => 'post','posts_per_page'=> 8));
while ( $menu->have_posts() )
{
$menu->the_post();
$menu_id 		= get_the_ID();
$menu_img_id 	= get_post_thumbnail_id($menu_id);
$menu_img_url 	= wp_get_attachment_url($menu_img_id);
?>
  <?php if (strlen(the_title('','',FALSE)) > 50) { //Character length
          $title_short = substr(the_title('','',FALSE), 0, 50); // Character length
          preg_match('/^(.*)\s/s', $title_short, $matches);
      if ($matches[1]) $title_short = $matches[1];
          $title_short = $title_short.' ...'; // Ellipsis
      } else {
          $title_short = the_title('','',FALSE);
      } ?>
<div id="news" class="res col-lg-3 col-md-4 col-xs-6 pd-left-0" align="center">
	<div class="bg-news">
			<div class="news-home-3">
				<div style="background-image:url(<?php echo $menu_img_url ?>);" class="news-home"></div>	
				<div class="news-home-2">
					<div class="news-t"><?php echo $title_short ?></div>
					<div class="news-d"><?php echo get_the_date('d M Y', $post->ID);?></div>
					<div class="news-c"><?php echo substr(get_the_excerpt(), 0,180); ?>...</div>
					<div class="ab-n"><a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;"><button class="btn btn-1 btn-1e">MORE</button></a></div> 		
				</div>
			</div>
	</div>
	<!-- <a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#000;"><div class="img-bnew"><?php the_post_thumbnail('medium'); ?></div></a> -->
</div>
<?php
}wp_reset_postdata();
?>
<div class="v-newshome2"></div>

</div>
	<div class="load-newshome ln2" align="center">SEE MORE</div>
</div>


<div id="se-2" class="tab-pane fade">
	<div class="row">
<?php 
$typenews = "news";
$menu= new WP_Query(array( 'post_type' => 'post','posts_per_page'=> 8, 'category_name'=>$typenews));
while ( $menu->have_posts() )
{
$menu->the_post();
$menu_id 		= get_the_ID();
$menu_img_id 	= get_post_thumbnail_id($menu_id);
$menu_img_url 	= wp_get_attachment_url($menu_img_id);
?>
  <?php if (strlen(the_title('','',FALSE)) > 50) { //Character length
          $title_short = substr(the_title('','',FALSE), 0, 50); // Character length
          preg_match('/^(.*)\s/s', $title_short, $matches);
      if ($matches[1]) $title_short = $matches[1];
          $title_short = $title_short.' ...'; // Ellipsis
      } else {
          $title_short = the_title('','',FALSE);
      } ?>
<div id="news" class="res col-lg-3 col-md-4 col-xs-6 pd-left-0" align="center">
	<div class="bg-news">
			<div class="news-home-3">
				<div style="background-image:url(<?php echo $menu_img_url ?>);" class="news-home"></div>	
				<div class="news-home-2">
					<div class="news-t"><?php echo $title_short ?></div>
					<div class="news-d"><?php echo get_the_date('d M Y', $post->ID);?></div>
					<div class="news-c"><?php echo substr(get_the_excerpt(), 0,180); ?>...</div>
					<div class="ab-n"><a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;"><button class="btn btn-1 btn-1e">MORE</button></a></div> 		
				</div>
			</div>
	</div>
	<!-- <a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#000;"><div class="img-bnew"><?php the_post_thumbnail('medium'); ?></div></a> -->
</div>
<?php
}wp_reset_postdata();
?>
<div class="v-newshome2"></div>

</div>

	<div class="load-newshome ln2" align="center">SEE MORE</div>
</div>




<div id="se-3" class="tab-pane fade">
	<div class="row">
<?php 
$typenews = "Tips";
$menu= new WP_Query(array( 'post_type' => 'post','posts_per_page'=> 8, 'category_name'=>$typenews));
while ( $menu->have_posts() )
{
$menu->the_post();
$menu_id 		= get_the_ID();
$menu_img_id 	= get_post_thumbnail_id($menu_id);
$menu_img_url 	= wp_get_attachment_url($menu_img_id);
?>
  <?php if (strlen(the_title('','',FALSE)) > 50) { //Character length
          $title_short = substr(the_title('','',FALSE), 0, 50); // Character length
          preg_match('/^(.*)\s/s', $title_short, $matches);
      if ($matches[1]) $title_short = $matches[1];
          $title_short = $title_short.' ...'; // Ellipsis
      } else {
          $title_short = the_title('','',FALSE);
      } ?>
<div id="news" class="res col-lg-3 col-md-4 col-xs-6 pd-left-0" align="center">
	<div class="bg-news">
			<div class="news-home-3">
				<div style="background-image:url(<?php echo $menu_img_url ?>);" class="news-home"></div>	
				<div class="news-home-2">
					<div class="news-t"><?php echo $title_short ?></div>
					<div class="news-d"><?php echo get_the_date('d M Y', $post->ID);?></div>
					<div class="news-c"><?php echo substr(get_the_excerpt(), 0,180); ?>...</div>
					<div class="ab-n"><a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;"><button class="btn btn-1 btn-1e">MORE</button></a></div> 		
				</div>
			</div>
	</div>
	<!-- <a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#000;"><div class="img-bnew"><?php the_post_thumbnail('medium'); ?></div></a> -->
</div>
<?php
}wp_reset_postdata();
?>
<div class="v-newshome2"></div>

</div>

	<div class="load-newshome ln2" align="center">SEE MORE</div>
</div>



<div id="se-4" class="tab-pane fade">
	<div class="row">
<?php 
$typenews = "event";
$menu= new WP_Query(array( 'post_type' => 'post','posts_per_page'=> 8, 'category_name'=>$typenews));
while ( $menu->have_posts() )
{
$menu->the_post();
$menu_id 		= get_the_ID();
$menu_img_id 	= get_post_thumbnail_id($menu_id);
$menu_img_url 	= wp_get_attachment_url($menu_img_id);
?>
  <?php if (strlen(the_title('','',FALSE)) > 50) { //Character length
          $title_short = substr(the_title('','',FALSE), 0, 50); // Character length
          preg_match('/^(.*)\s/s', $title_short, $matches);
      if ($matches[1]) $title_short = $matches[1];
          $title_short = $title_short.' ...'; // Ellipsis
      } else {
          $title_short = the_title('','',FALSE);
      } ?>
<div id="news" class="res col-lg-3 col-md-4 col-xs-6 pd-left-0" align="center">
	<div class="bg-news">
			<div class="news-home-3">
				<div style="background-image:url(<?php echo $menu_img_url ?>);" class="news-home"></div>	
				<div class="news-home-2">
					<div class="news-t"><?php echo $title_short ?></div>
					<div class="news-d"><?php echo get_the_date('d M Y', $post->ID);?></div>
					<div class="news-c"><?php echo substr(get_the_excerpt(), 0,180); ?>...</div>
					<div class="ab-n"><a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#fff;"><button class="btn btn-1 btn-1e">MORE</button></a></div> 		
				</div>
			</div>
	</div>
	<!-- <a href="<?php the_permalink() ?>" title="Klik untuk informasi lebih detail" style="color:#000;"><div class="img-bnew"><?php the_post_thumbnail('medium'); ?></div></a> -->
</div>
<?php
}wp_reset_postdata();
?>
<div class="v-newshome2"></div>

</div>

	<div class="load-newshome ln2" align="center">SEE MORE</div>
</div>





</div></div>
</div></div>
			<div class="col-md-2"></div>
		</div>

	</div>
</div>


<?php get_footer(); ?>
