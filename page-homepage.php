<?php
   /*
   Template Name: Home Page
   */
?>
<?php get_header(); ?>
<script type="text/javascript">
   function visitPage(){
       window.location='/what-we-do/';
   }
</script>

<section class="bg-home1">
   <?php
   $menu = new WP_Query(array(
       'post_type' => 'page',
       'page_id' => 5
   ));
   while ($menu->have_posts()) {
       $menu->the_post();
       $url = wp_get_attachment_url(get_post_thumbnail_id());
   ?>
      <div class="prlx-1 pc_dis" style="background: url('<?php echo $url;?>') no-repeat center 100% fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;height:1000px"></div>

      <section class="bg_mobilehome m_dis" style="background: url(<?php echo $url?>) center 100% no-repeat;">
            <div class="row animated fadeIn">
               <div class="col-md-12 txt-bg1 " align="center"></div>
            </div>
      </section>

   <?php
      }wp_reset_postdata();
   ?>
   <div class="row">
   <div class="col-md-3"></div>
   <div class="col-md-6">
      <div class="title-align">
         <h1 class="title-bg">GROW STRONG</h1>
      </div>
      <div class="description-align">
         <p class="title-description">
            MAKE YOUR <b>IDEAS</b> HAPPEN <br>
            BOOST YOUR <b>PRESENCE</b>
         </p>
      </div>
      <div class="btn-empower-me-align">
         <a href="#services-section-id" id="services-section">
            <button class="btn-empower-me" onmouseout="document.getElementById('btnred').className='back-button-empower-me-show';" onmouseover="document.getElementById('btnred').className='back-button-empower-me-hidden';">EMPOWER ME!</button>
            <button class="back-button-empower-me" id="btnred" ></button>
         </a>
      </div>
      <div class="row">
         <div class="col-md-5"></div>
         <div class="col-md-2">
            <div class="img-mouse">
                <div class="img-mouse-sprite"></div>
            </div>
         </div>
         <div class="col-md-5"></div>
      </div>
      <div class="col-md-3"></div>
   </div>
</section>

<div class="row">
   <div class="col-md-12 bg-home3">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8 m-pd-0">
            <div class="row">
               <div class="col-md-8">
                  <div class="line-client"></div>
                  <p class="sub-title-clients">They are more than clients. They are</p>
                  <div class="title-clients">THE PEOPLE WE LOVE</div>
               </div>
            </div>
            <!-- For start -->
            <div class="row">
               <!-- Slider for Display 1024 Laptop -->
               <div class="swiper-container">
                  <div class="swiper-wrapper">
                     <?php 
                        $all_client = 'all';
                        $menu = new WP_Query(array( 'post_type' => 'ourworks','posts_per_page'=> -1,'category_name'=>$all_client));
                        while ( $menu->have_posts() ) {
                        $menu->the_post();
                        $id = get_the_ID();
                        $image_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), "medium");
                           if ($image_thumb) {
                              $url_img = $image_thumb['0'];
                           } else {
                              $url_img = get_template_directory_uri() . '/library/images/sorry.png';
                           }
                           $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                           if (count($alt));
                        ?>
                     <div class="swiper-slide"> <img src="<?php echo $url_img; ?>" alt="<?php echo $alt; ?>"> </div>
                     <?php
                        } wp_reset_postdata();
                     ?>
                  </div>
                  <!-- Add Pagination -->
                  <div class="swiper-pagination"></div>
                  <!-- Add Arrows -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
               <!-- Slider for Display 768 Tablet -->
               <div class="slider-client-for-phone owl-carousel owl-theme" >
                  <?php 
                     $all_client = 'all';
                     $menu = new WP_Query(array( 'post_type' => 'ourworks','posts_per_page'=> -1,'category_name'=>$all_client));
                     while ( $menu->have_posts() ) {
                     $menu->the_post();
                     $image_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'medium');
                        if ($image_thumb) {
                           $url_img = $image_thumb['0'];
                        } else {
                           $url_img = get_template_directory_uri() . '/library/images/sorry.png';
                        }
                        $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        if (count($alt));
                     ?>
                  <div> <img src="<?php echo $url_img; ?>" alt="<?php echo $alt; ?>"> </div>
                  <?php
                     } wp_reset_postdata();
                     ?>

                  <?php /*
                  <div class="owl-dots">
                     <div class="owl-dot active"><span></span></div>
                     <div class="owl-dot"><span></span></div>
                     <!-- <div class="owl-dot"><span></span></div> -->
                  </div>
                  */ ?>

               </div>
            </div>
         </div>
         <div class="col-md-2"></div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12 bg-home2">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-9">
            <!--bgh2-->
            <div class="line-whatwedo"></div>
            <div class="title-we-do space-title">WE HELP BRANDS GROW THEIR DIGITAL ASSETS TO THEIR FULLEST EXTENT</div>
            <!-- ancor scroll tujuan -->
            <a id="services-section-id" name="services-section-name"></a>
            <div class="description-we-do">Establishing sustainable digital assets are not easy. But hardship and preserverance are things that help us grow. </div>
            <div class="description-we-do space-we-do">it’s more than a value or ideal.</div>
            <div class="title-we-do">IT’S WHAT WE DO</div>
            <div class="row">
               <?php 
               $menu= new WP_Query(array( 'post_type' => 'services', 'order' => 'ASC', 'posts_per_page' => 6 )); //Parent ID 9 : Services - It's What We Do
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
         <div class="col-md-1"></div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12 newsletters">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-10">
            <form onsubmit="submit_formwishlist();return false;" name="subscribeform" method="post" id="formnewsletters" class="class-formnewsletters">
               <div class="row space-maring-newsletters">
                  <div class="col-md-3">
                     <div class="title-newsletters">STAY UPDATED</div>
                  </div>
                  <div class="col-md-3 col-sm-5">
                     <div class="form-title-newsletters">NAME*</div>
                     <div class="form-input-newsletters-div">
                        <input type="text" name="attribute1" class="form-input-newsletters attributeinput name-newsletters">
                        <div class="notiftxt notif_error"></div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-5">
                     <div class="form-title-newsletters">EMAIL*</div>
                     <div class="form-input-newsletters-div">
                        <input type="text" name="email" class="form-input-newsletters email-newsletters" >
                        <div class="notiftxt notif_error2"></div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-2">
                     <div class="form-input-names">
                        <input type="SUBMIT" name="input-name" class="form-button-newsletters" value="SUBMIT">
                        <div class="notiftxt notif_success"></div>
                        <?php // untuk pesan error / sukses ?>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-1"></div>
      </div>
   </div>
</div>

<div class="row">
   <div class="col-md-12 bg-news-home">
      <!-- Start Content Title -->
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <p class="sub-title-news">a glimpse of our track records and capabilities</p>
            <div class="head-title-news">What We’ve Done so far</div>
         </div>
         <div class="col-md-2"></div>
      </div>
      <!-- Start Content Portfolio -->
      <div class="row space-portfolio">
         <?php
            $fn = 0;
            // Get post menggunakan WP_query dengan filtering by kategori
            $get_wp_post = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => 6, 'post_status'=>'publish'));
            
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
               
               // WCK Field Post Photo Logo Client
               $foto_hover_putih = get_post_meta($id, 'foto-hover-putih', true); 
               foreach ($foto_hover_putih as $key => $value) {
                  $image_hover_putih = $value['image-hover-putih'];
                  $image_hover_putih_url = wp_get_attachment_url($image_hover_putih);
               }
         ?>
         <div class="col-md-6 bg-content-portfolio">
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
         <div class="load_data_portfolio_home"></div>
         <!-- Load More -->
         <?php if($fn >= 6 ){?>
         <div class="col-md-12 more-news" align="center">
            <div class="load_more load_portfolio_in_home" data-idpage="<?php echo $post->ID; ?>" title="View More">
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



</div>

<?php get_footer(); ?>