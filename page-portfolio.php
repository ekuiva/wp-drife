<?php
   /*
   Template Name: Portfolio Page
   */
   ?>
<?php get_header(); ?>
<div class="row">
   <div class="container-portfolio">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-4">
            <h2 class="portfoilio-text-title">What we've done so far</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-4">
            <p class="portfolio-text-description">
               To win we start with YOU. Are your digital strategy, content, media, eCommerce, and analytics right for your brand? Drife is here to find answers to these.
            </p>
         </div>
      </div>
      <div class="row space-portfolio">
         <?php
            $fn = 0;
            // Get post menggunakan WP_query dengan filtering by kategori
            $get_wp_post = new WP_Query( array('post_type' => 'portfolio', 'posts_per_page' => 6, 'post_status'=>'publish'));
            // Looping post, untuk menampilkan post
            while ($get_wp_post->have_posts()) {
               $get_wp_post->the_post();
               $id = get_the_ID();
               $image_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
               if ($image_thumb) {
                  $url_img = $image_thumb['0'];
               } else {
                  $url_img = get_template_directory_uri() . '/library/images/sorry.png';
               }
               $image_id = get_post_thumbnail_id($id);
               $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
               if (count($alt));
               $cat_news = get_the_category($id);
               $cat_name = $cat_news[0]->name;

               // WCK Field Post Photo
               $foto_hover_putih = get_post_meta($id, 'foto-hover-putih', true); 
               foreach ($foto_hover_putih as $key => $value) {
                  $image_hover_putih = $value['image-hover-putih'];
                  $image_hover_putih_url = wp_get_attachment_url($image_hover_putih);
               }
            ?>
         <div class="col-md-6 col-sm-6 bg-content-portfolio">
            <a href="<?php the_permalink()?>">
               <div class="overflow-portfolio">
                  <img class="img-portfolio" src="<?php echo $url_img ?>">
               </div>
               <div class="content-workflow">
                  <img class="logo-client-portfolio" src="<?php echo $image_hover_putih_url ?>">
                  <h3 class="text-client-portfolio"><?php echo get_the_title($id)?></h3>
                     <h4 class="view-detail-portfolio">View Detail</h4>
               </div>
            </a>
         </div>
         <?php 
            $fn++;
            } wp_reset_postdata();
            ?>
         <!-- Oput Ajax -->
         <div class="load_data_in_portfolio_page"></div>
         <!-- Load More -->
         <?php if( $fn >= 6 ){?>
         <div class="col-md-12 more-news" align="center">
            <div class="load_more load_portfolio_in_portfolio_page" data-idpage="<?php echo $post->ID; ?>" title="More Items">
                  <a>
                     <img src="<?php bloginfo('template_directory'); ?>/library/images/more-icon.png"><br />
                     MORE ITEMS
                  </a>
            </div>
         </div>
         <?php } ?>
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
*/?>
<?php get_footer(); ?>