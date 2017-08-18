<?php
   /*
   Template Name: Services Page
   */
   ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
   <div class="container-portfolio services-container">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-4">
            <h2 class="portfoilio-text-title">WE HELP BRANDS GROW THEIR DIGITAL ASSETS TO THEIR FULLSET EXTENT</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-9">
            <p class="service-text-description">Establishing sustainable digital assets are not easy. But hardship and preserverance are things that help us grow.</p>
            <div class="description-service space-we-do">it’s more than a value or ideal.</div>
            <div class="title-service ">IT’S WHAT WE DO</div>
            <div class="row">
               <?php 
                  $menu= new WP_Query(array( 'post_type' => 'services', 'order' => 'DESC', 'post_status'=>'publish' )); //Parent ID 9 : Services - It's What We Do
                  while ( $menu->have_posts() )
                  {
                  $menu->the_post();{
                  ?>
               <div class="col-md-3 col-sm-5 item-wedo-space">
                  <a href="<?php the_permalink();?>" title="Know more about <?php the_title();?>...">
                     <div class="title-homeb2"><?php the_title(); ?></div>
                     <div class="line-wedo"></div>
                     <div class="txt-home2">
                        <?php echo substr(get_the_excerpt($id), 0,200); ?>
                     </div>
                     <div class="button-wedo">
                  <a href="<?php the_permalink();?>">
                  <?php 
                     // WCK Field Button We Do
                     $hasil = get_post_meta($post->ID, 'buttonwhatwedo', true); 
                     echo ($hasil[0]['text-button']);
                     ?>
                  <img class="img-button-right" src="<?php bloginfo('template_directory'); ?>/library/images/right.png">
                  </a>
                  </div>
                  </a>
               </div>
               <?php
                  }
                  }wp_reset_postdata();
                  ?>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- ========================== Contact us BG ======================== -->

<?php get_template_part( 'content', 'contactus' ); ?> 

<!-- ========================== Contact us BG ======================== -->
<?php /*
<div class="row">
   <div class="col-md-12 bg-contact-us"> 
      <button class="button-contacts" id="btn-show-modal" data-toggle="modal" data-target="#myModal" onmouseout="document.getElementById('btnred-contact').className='back-button-contacts';" onmouseover="document.getElementById('btnred-contact').className='back-button-contacts';">Contact Us</button><br />
      <button class="back-button-contacts" id="btnred-contact"></button>
   </div>
</div>
*/ ?>

<?php endwhile; ?>
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
<?php get_footer(); ?>