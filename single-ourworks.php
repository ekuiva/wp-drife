<?php get_header(); ?>
<?php 
   if (have_posts()) : while (have_posts()) : the_post(); 
   $page_id		= $post->ID;
   $get_works_photo = get_post_meta($page_id, 'worksphoto', TRUE);
   ?>
<section class="bobo">
   <!-- <div class="logo-client"><?php the_post_thumbnail('full'); ?></div> -->
   <div class="flexslider">
      <div class="darr">
         <img src="<?php echo get_template_directory_uri(); ?>/library/images/dArr.png">
         <p>scroll down</p>
      </div>
      <ul class="slides">
         <?php
            foreach($get_works_photo as $key=>$value) {
            		$works_photo			=	$value['works-photo'];
            		$works_photo_url		=	wp_get_attachment_url($works_photo);
            ?>
         <li>
            <img src="<?php echo $works_photo_url ;?>" />
         </li>
         <?php
            }
            ?> 
      </ul>
   </div>
</section>
<div class="row">
   <div class="col-md-12 bg-home6">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
               <header class="article-header">
                  <div class="title-singlenews"><?php the_title(); ?></div>
                  <div class="dot-h">.  .  .  .</div>
               </header>
               <section class="entry-content clearfix txt-singnews" itemprop="articleBody">
                  <?php the_content(); ?>
               </section>
               <div id="owl-1">
                  <?php
                     $photoaks = get_post_meta($post->ID,'postphoto',true);
                     foreach ($photoaks as $potoaks => $poto) {
                     $idpoto = $poto['post-photo'];
                     $linkpoto = wp_get_attachment_image_src($idpoto,'full');
                  ?>
                  <div class="item img-show"><img src="<?php echo $linkpoto[0];?>" alt="Drife News Photo" rel="<?php echo $linkpoto[0];?>"></div>
                  <?php
                     }
                     ?>
               </div>
               <div class="v-poto">
                  <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-6" align="left">
                        <div class="f-poto">
                        </div>
                        <div class="btn-close"><img title="Close this images !" src="<?php bloginfo('template_directory'); ?>/library/images/close-btn.png"></div>
                     </div>
                     <div class="col-md-2"></div>
                  </div>
               </div>
            </article>
            <?php endwhile; ?>
            <div class="row">
               <div class="col-md-6">
                  <span class="title-singlenews pull-left"><?php previous_post('%','<span class="glyphicon glyphicon-menu-left box-mn2"></span> Previous', 'no'); ?></span>
               </div>
               <div class="col-md-6">
                  <span class=" title-singlenews pull-right"><?php next_post('%','Next <span class="glyphicon glyphicon-menu-right box-mn"></span>', 'no'); ?></span>
               </div>
            </div>
            <?php else : ?>
            <article id="post-not-found" class="hentry clearfix">
               <header class="article-header">
                  <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
               </header>
               <section class="entry-content">
                  <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
               </section>
               <footer class="article-footer">
                  <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
               </footer>
            </article>
            <?php endif; ?>
         </div>
         <div class="col-md-2"></div>
      </div>
   </div>
</div>
<?php get_footer(); ?>