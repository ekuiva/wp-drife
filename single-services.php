<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
   <div class="container-portfolio">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-5">
            <h2 class="portfoilio-text-title"><?php echo get_the_title();?></h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-4">
            <p class="portfolio-text-description">
               <?php echo substr(get_the_excerpt($id_portfolio), 0,150); ?>
            </p>
         </div>
      </div>
   </div>
   <div class="row space-portfolio">
      <?php          
         $resarray = '';
         $fn = 0;
         // Mendapatkan kategori single page service
         $result = get_the_category($post->ID);

         // Pemisahan array id kategori single service
         foreach ($result as $key => $value) {
         $idcat = $value->term_id;
         $slugcat = $value->slug;
         $resarray = $idcat.','.$resarray;
         }
         // Menghapus koma yang ada dilist id kategori single page service
         $resarray = rtrim($resarray, ',');
         // Mengambil data portfolio berdasarkan nama kategori yang akan ditampilkan di single serive
         $get_portfolio = new WP_Query( array('post_type' => 'portfolio','post_status'=>'publish','category_name' => $slugcat, 'posts_per_page' => 6));
         // Looping post portfolio berdasarkan filtering category_name
         while ($get_portfolio->have_posts()) {
         $get_portfolio->the_post();
         $id_portfolio = get_the_ID();
         $image_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
         if ($image_thumb) {
            $url_img = $image_thumb['0'];
         } else {
            $url_img = get_template_directory_uri() . '/library/images/sorry.png';
         }
         
         // WCK Field Post Photo
         $foto_hover_putih = get_post_meta($id, 'foto-hover-putih', true); 
         foreach ($foto_hover_putih as $key => $value) {
            $image_hover_putih = $value['image-hover-putih'];
            $image_hover_putih_url = wp_get_attachment_url($image_hover_putih);
         }
         ?>
      <div class="col-md-6 col-sm-6 bg-content-portfolio">
         <a href="<?php print_r(get_permalink()); ?>">
            <div class="overflow-portfolio">
               <img class="img-portfolio" src="<?php echo $url_img; ?>">
            </div>
            <div class="content-workflow">
                  <img class="logo-client-portfolio" src="<?php echo $image_hover_putih_url ?>">
                  <h3 class="text-client-portfolio"><?php echo get_the_title($id_portfolio)?></h3>
                  <h4 class="view-detail-portfolio">View Detail</h4>
            </div>
         </a>
      </div>
      <?php
         $fn++;
         } wp_reset_postdata();
         ?>

      <!-- Oput Ajax -->
      <div class="load_data_portfolio"></div>
      <!-- Load More -->
      <?php if($fn >= 6){?>
         <div class="col-md-12 more-news" align="center">
            <div class="load_more load_portfolio_in_service" data-idpage="<?php echo $post->ID; ?>" title="View More" >
            <a>
               <img src="<?php bloginfo('template_directory'); ?>/library/images/more-icon.png"><br />
               MORE PORTFOLIO
            </a>
            </div>
         </div>
      <?php } ?>
   </div>
</div>
<div class="row">
   <div class="col-md-12 bg-home3">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8 m-pd-0">
            <div class="row">
               <div class="col-md-8">
                  <div class="line-client"></div>
                  <!-- <p class="sub-title-clients">They are more than clients. They are</p> -->
                  <div class="title-clients service-title-client-page">CLIENTS TO USE THIS SERVICES</div>
               </div>
            </div>
            <!-- For start -->
            <div class="row">
               <!-- Slider for Display 1024 Laptop -->
               <div class="slider-service-client service-theme-slider owl-carousel owl-theme">
                  <?php
                      $all_client = 'all';
                        $menu = new WP_Query(array( 'post_type' => 'ourworks','posts_per_page'=> -1,'category_name'=>$all_client));
                        while ( $menu->have_posts() ) {
                        $menu->the_post();
                        ?>
                     <div class="item item-service-cleint"><?php the_post_thumbnail('full');?></div>
                     <?php
                        } wp_reset_postdata();
                     ?>
               </div>
            </div>
         </div>
         <div class="col-md-2"></div>
      </div>
   </div>
</div>

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