<?php get_header(); ?>
<?php 
   if (have_posts()) : while (have_posts()) : the_post(); 
   $page_id = $post->ID;
   
   // Portfolio Component Page
   $portfolio_components_page = get_post_meta($page_id, 'portfolio-components-page', TRUE);
   
   // Portfolio - Components Page Slider
   $portfolio_components_page_slider = get_post_meta($page_id, 'portfolio-components-page-slider', TRUE);
   
   // Portfolio - Components Page Special Feature
   $portfolio_components_page_special_feature = get_post_meta($page_id, 'portfolio-components-page-special-feature', TRUE);
   
   // Untuk menampilkan image cover header, setiap halaman beda cover headernya.
   foreach ($portfolio_components_page as $key => $value) {
      $cover_image_header = wp_get_attachment_url($value['cover-image-header']);
   }
   ?>
   <section class="single-page-portfolio" style="background: url(<?php echo $cover_image_header?>) 100% 0 / cover no-repeat;">
      <div class="row animated fadeIn">
         <div class="col-md-12 txt-bg1 " align="center"></div>
      </div>
   </section>
<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">
      <div class="portfolio-line"></div>
      <div class="portfolio-logo-single">
         <?php
            foreach ($portfolio_components_page as $key => $value) {
               $logo_client = wp_get_attachment_url($value['logo-cleint']);
            }
            ?>
         <img src="<?php echo $logo_client ?>" class="portfolio-img-logo-single">
      </div>
      <h4 class="portfolio-short-desc-client">
         <?php
            foreach ($portfolio_components_page as $key => $value) {
               echo($value['deskripsi-singkat-perusahaan']);
            }
            ?>
      </h4>
   </div>
   <div class="col-md-2"></div>
</div>
<div class="row">
   <div class="portfolio-image-cover">
      <?php
         foreach ($portfolio_components_page as $key => $value) {
            $gambar_cover_body = wp_get_attachment_url($value['gambar-cover-body']);
         }
         ?>
      <img src="<?php echo $gambar_cover_body ?>" class="portfolio-image-cover-class">
   </div>
</div>
<div class="row portfolio-bg-row">
   <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-5">
         <div class="portfolio-line"></div>
         <div class="portfolio-logo-single">
            <h1 class="portfolio-title-single-page"><?php echo get_the_title()?></h1>
         </div>
         <h4 class="portfolio-short-desc-client-bawah">
            <?php
               foreach ($portfolio_components_page as $key => $value) {
                  echo($value['deskripsi-singkat-project-fitur']);
               }
               ?>
         </h4>
      </div>
      <div class="col-md-3 portfolio-btn-space">
         <?php
            foreach ($portfolio_components_page as $key => $value) {
               $url_website_client = $value['website-client'];
            }
            // start kondisi ketika website client ada
            if(!empty($url_website_client)){
            ?>
               <a href="<?php echo $url_website_client; ?>" target="_blank">
                  <button class="portfolio-btn" onmouseout="document.getElementById('btnred-portfolio').className='portfolio-btn-shadow';" onmouseover="document.getElementById('btnred-portfolio').className='portfolio-btn-shadow-hidden';">Launch Site</button><br/>
                  <button class="portfolio-btn-shadow" id="btnred-portfolio"></button>
               </a>
            <?php
            // end kondisi ketika website client ada
            }
            ?>
      </div>
   </div>
   <div class="row portfolio-image-works-space">
      <div class="col-md-1"></div>
      <div class="col-md-5">
         <div class="portfolio-image-works">
            <?php
               foreach ($portfolio_components_page as $key => $value) {
                  $gambar_project_portfolio_1_kiri = wp_get_attachment_url($value['gambar-project-portfolio-1-kiri']);
               }
               ?>
            <img src="<?php echo $gambar_project_portfolio_1_kiri ?>" class="portfolio-image-works-class">
         </div>
      </div>
      <div class="col-md-5">
         <div class="portfolio-image-works">
            <?php
               foreach ($portfolio_components_page as $key => $value) {
                  $gambar_project_portfolio_2_kiri = wp_get_attachment_url($value['gambar-project-portfolio-2-kanan']);
               }
               ?>
            <img src="<?php echo $gambar_project_portfolio_2_kiri ?>" class="portfolio-image-works-class">
         </div>
      </div>
      <div class="col-md-1"></div>
   </div>
</div>
<div class="row portfolio-bg-feature">
   <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
         <div class="portfolio-line-feature"></div>
         <?php
           foreach ($portfolio_components_page as $key => $value) {
              $judul_highlight_custom_fitur = $value['judul-highlight-custom-fitur'];
           }
           ?>
         <h2 class="portfolio-title-feature"><?php echo $judul_highlight_custom_fitur; ?></h2>
         <h4 class="portfolio-short-desc-feature">
            <?php
               foreach ($portfolio_components_page as $key => $value) {
                  echo($value['deskripsi-highlight-fitur']);
               }
               ?>
         </h4>
      </div>
      <div class="col-md-2"></div>
   </div>
   <div class="row portfolio-slider-space">
      <div class="col-md-1"></div>
      <div class="col-md-10">
         <div class="portfolio-slider-single portfolio-theme-slider owl-carousel owl-theme">
            <?php
               // start gambar slider
               foreach ($portfolio_components_page_slider as $key => $value) {
               $gambar_slider_portfolio = wp_get_attachment_url($value['gambar-slider-portfolio']);
               $text_deskripsi_per_slide = $value['text-deskripsi-per-slide']
               ?>
            <div class="item portfolio-img-slider">
               <img src="<?php echo $gambar_slider_portfolio; ?>">
               <h3><?php echo $text_deskripsi_per_slide; ?></h3>
            </div>
            <?php
               // end gambar slider
               }
               ?>
         </div>
      </div>
      <div class="col-md-1"></div>
   </div>
   <!-- start custom special fitur jika client ada request -->
   <?php 
   foreach ($portfolio_components_page_special_feature as $key => $value) {
      $judul_spesial_fitur_custom_exist = $value['judul-spesial-fitur-custom'];
   }
   if(!empty($judul_spesial_fitur_custom_exist)){
   ?>
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8 portfolio-feature-space">
            <h2 class="portfolio-title-feature">
            	<?php
   	           foreach ($portfolio_components_page_special_feature as $key => $value) {
   	              echo($value['judul-spesial-fitur-custom']);
   	           }
   	           ?>
            </h2>
            <h4 class="portfolio-short-desc-feature">
               <?php
                  foreach ($portfolio_components_page_special_feature as $key => $value) {
                     echo($value['deskripsi-spesial-fitur']);
                  }
                  
                  ?>
            </h4>
         </div>
         <div class="col-md-2"></div>
      </div>
      <div class="row portfolio-feature-special-space">
         <div class="col-md-1"></div>
         <div class="col-md-10">
            <div class="row">
               <div class="col-md-6 col-sm-6 portfolio-special-feature-left">
                  <?php
                     foreach ($portfolio_components_page_special_feature as $key => $value) {
                        $gambar_spesial_fitur_kiri_1 = wp_get_attachment_url($value['gambar-spesial-fitur-kiri-1']);
                     }
                     ?>
                  <img src="<?php echo $gambar_spesial_fitur_kiri_1 ?>">
                  <?php
                     foreach ($portfolio_components_page_special_feature as $key => $value) {
                        $deskripsi_gambar_kiri = $value['deskripsi-gambar-kiri'];
                     }
                     ?>
                  <h3><?php echo $deskripsi_gambar_kiri?></h3>
               </div>
               <div class="col-md-6 col-sm-6 portfolio-special-feature-right">
                  <?php
                     foreach ($portfolio_components_page_special_feature as $key => $value) {
                        $gambar_spesial_fitur_kanan_2 = wp_get_attachment_url($value['gambar-spesial-fitur-kanan-2']);
                     }
                     ?>
                  <img src="<?php echo $gambar_spesial_fitur_kanan_2?>">
                  <?php
                     foreach ($portfolio_components_page_special_feature as $key => $value) {
                        $deskripsi_gambar_kanan = $value['deskripsi-gambar-kanan'];
                     }
                     ?>
                  <h3><?php echo $deskripsi_gambar_kanan?></h3>
               </div>
            </div>
         </div>
         <div class="col-md-1"></div>
      </div>
   <?php 
   }
   ?>
   <!-- start custom special fitur jika client ada request -->
</div>
<div class="row portfolio-bg-we-do">
   <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
         <div class="portfolio-line-we-do"></div>
         <h4 class="portfolio-short-desc-we-do">it's more than a value or ideal..</h4>
         <h2 class="portfolio-title-we-do">IT'S WHAT WE DO To <?php echo get_the_title()?></h2>
      </div>
      <div class="col-md-2"></div>
   </div>
      <div class="row portfolio-space-we-do-item">
         <div class="col-md-2"></div>
         <div class="col-md-9 nopadding">
            <?php 
               $resarray = '';

               // Mendapatkan category ID didalam single post
               $result = get_the_category($post->ID);
               foreach ($result as $key => $value) {
                  $idcat = $value->term_id;
                  $resarray = $idcat.','.$resarray;
               }
               // Menghilangkan koma untuk id kategori portfolio
               $id_cat_portfolio = rtrim($resarray, ',');

               // Filtering portfolio berdasarkan kategori servicenya.
               $get_wp_post = new WP_Query( array('post_type' => 'services','cat' => $id_cat_portfolio ));
               $count_services = 1;
               while ($get_wp_post->have_posts()) {
               $get_wp_post->the_post();
               $id_portfolio = get_the_ID();

               // Pembatasan jumlah service yang tampil
               if ($count_services <= 3) {
                  $count_services++;
               ?>
               <div class="col-md-3 col-sm-4 portfolio-we-do-item">
                  <div class="row">
                     <h3><?php echo get_the_title()?></h3>
                  </div>
                  <div class="portfolio-line-we-do-item"></div>
                  <h4><?php echo substr(get_the_excerpt($post->ID), 0,200) ?></h4>
                  <div class="portfolio-btn-link">
                     <a href="<?php the_permalink()?>">
                     <?php 
                     // WCK Field Button We Do
                     $hasil = get_post_meta($post->ID, 'buttonwhatwedo', true); 
                     echo ($hasil[0]['text-button']);
                     ?>
                     <img class="portfolio-btn-right" src="<?php bloginfo('template_directory'); ?>/library/images/right.png">
                     </a>
                  </div>
               </div>
               <?php
               } //end if $count_services
               }wp_reset_postdata();
               if($count_services >= 1){ //start if
               ?>
               <div class="col-md-2 col-sm-4 load_more load_portfolio_in_home portfolio-btn-more-services" data-idpage="5" title="View More" style="display: block;">
                  <a href="<?php echo bloginfo('url'); ?>/services/">
                     <img src="<?php echo bloginfo('template_directory'); ?>/library/images/more-icon.png"><br>
                     MORE SERVICES
                  </a>
               </div>
            <?php
               } //end if
            ?>
         </div>
      </div>
</div>
<div class="row share-and-tags-space">
   <div class="col-md-2"></div>
   <div class="col-md-3 col-sm-3">
      <h3 class="share-and-tags-title">Share This</h3>
      <div class="share-and-tags-line"></div>
      <div class="share-and-tags-logo">
         <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink() ?>=" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="<?php echo bloginfo('template_directory'); ?>/library/images/logo-social/fb-logo.png"></a></li>
         <a href="https://twitter.com/intent/tweet?source=<?php echo the_permalink() ?>&text=:%20<?php echo the_permalink() ?>" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img src="<?php echo bloginfo('template_directory'); ?>/library/images/logo-social/tw-logo.png"></a>
         <a href="https://plus.google.com/share?url=<?php echo the_permalink() ?>" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img src="<?php echo bloginfo('template_directory'); ?>/library/images/logo-social/g-logo.png"></a>
      </div>
   </div>
   <div class="col-md-4 col-sm-8">
      <h3 class="share-and-tags-title">Tags</h3>
      <div class="share-and-tags-line"></div>
      <?php
         $tags = wp_get_post_tags($post->ID, 'post_tag', array("fields" => "all")); 
         $html = '<div class="share-and-tags-content">';
         $count = 1;
         foreach ( $tags as $tag ) {
            $count++;
            $html .= "<div class='share-and-tags-item'>{$tag->name}</div>";
            // if( $count > 8 ) break;
         }
         $html .= '</div>';
         echo $html;
         ?>
   </div>
   <?php
      foreach ($portfolio_components_page as $key => $value) {
         $mobile_app_andriod_client = $value['mobile-app-andriod-client'];
         $mobile_app_store_client = $value['mobile-app-store-client'];
      }
      // start konisi client mobile app
      ?>

      <!-- Jika andriod ada maka ini dijalankan -->
      <?php if (!empty($mobile_app_andriod_client) && empty($mobile_app_store_client)) { ?>
      <div class="col-md-3">
         <h3 class="share-and-tags-title">Mobile App</h3>
         <div class="share-and-tags-line"></div>
         <div class="share-and-tags-logo">
         <a  href="<?php echo $mobile_app_andriod_client ?>" target="blank"><img src="<?php echo bloginfo('template_directory'); ?>/library/images/portfolio/icon-google-play.png"></a>
         </div>
      </div>
      <!-- Jika app store ada maka ini dijalankan -->
      <?php } else if (!empty($mobile_app_store_client) && empty($mobile_app_andriod_client)) { ?>
      <div class="col-md-3">
         <h3 class="share-and-tags-title">Mobile App</h3>
         <div class="share-and-tags-line"></div>
         <div class="share-and-tags-logo">
         <a  href="<?php echo $mobile_app_store_client?>" target="blank"><img src="<?php echo bloginfo('template_directory'); ?>/library/images/portfolio/app-store.png"></a>
         </div>
      </div>
      <!-- Jika kedua-duanya ada maka jalankan ini -->
      <?php } else if (!empty($mobile_app_andriod_client) && !empty($mobile_app_store_client)) { 
      ?> 
      <div class="col-md-3">
         <h3 class="share-and-tags-title">Mobile App</h3>
         <div class="share-and-tags-line"></div>
         <div class="share-and-tags-logo">
         <a  href="<?php echo $mobile_app_andriod_client ?>" target="blank"><img src="<?php echo bloginfo('template_directory'); ?>/library/images/portfolio/icon-google-play.png"></a>
         <a  href="<?php echo $mobile_app_store_client ?>" target="blank"><img src="<?php echo bloginfo('template_directory'); ?>/library/images/portfolio/app-store.png"></a>
         </div>
      </div>
      <?php } ?>
</div>

<div class="row">
   <?php
      $fn = 0;
      // Get post menggunakan WP_query dengan filtering by kategori
      $get_wp_post = new WP_Query( array('post_type' => 'portfolio', 'posts_per_page' => 3 ));
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
         // if (count($alt));
         $cat_news = get_the_category($id);
         $cat_name = $cat_news[0]->name;

         // WCK Field Post Photo
         $foto_hover_putih = get_post_meta($id, 'foto-hover-putih', true); 
         foreach ($foto_hover_putih as $key => $value) {
            $image_hover_putih = $value['image-hover-putih'];
            $image_hover_putih_url = wp_get_attachment_url($image_hover_putih);
         } 
         if($page_id != $id ){ //start if
         ?>
         <div class="col-md-3 col-sm-3 bg-content-portfolio">
            <a href="<?php the_permalink()?>">
               <div class="overflow-portfolio-single">
                  <img class="img-portfolio-single" src="<?php echo $url_img ?>">
               </div>
               <div class="content-workflow">
                  <img class="logo-client-portfolio-related" src="<?php echo $image_hover_putih_url ?>">
                  <h3 class="text-client-portfolio-related"><?php echo get_the_title($id)?></h3>
                     <h4 class="view-detail-portfolio-related">View Detail</h4>
               </div>
            </a>
         </div>
      <?php
      } //end if
      $fn = $fn + 1;
      } wp_reset_postdata();
   ?>
   
   <div class="col-md-3 col-sm-3 load_more related-more-portfolio more-news-portfolio" data-idpage="5" title="View More" style="display: block;">
      <a href="<?php echo bloginfo('url'); ?>/portfolio/">
         <img  src="<?php echo bloginfo('template_directory'); ?>/library/images/more-icon.png"><br>
         MORE PORTFOLIO
      </a>
   </div>
</div>
<?php endwhile; ?>
<?php else : ?>
<div>ERROR Page : Content Not Found</div>
<?php endif; ?>
<?php get_footer(); ?>