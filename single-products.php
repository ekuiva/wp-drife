<?php get_header(); ?>
<?php 
if (have_posts()) : while (have_posts()) : the_post(); 
$page_id = $post->ID;

// Product Component Page
$products_components_page = get_post_meta($page_id, 'products-components-page', TRUE);
// print_r($products_components_page);

// Untuk menampilkan image cover header, setiap halaman beda cover headernya.
foreach ($products_components_page as $key => $value) {
  $cover_image_header = wp_get_attachment_url($value['cover-image-header-products']);
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
      <div class="portfolio-logo-single product-single-space">
         <?php
            foreach ($products_components_page as $key => $value) {
               $logo_client = wp_get_attachment_url($value['logo-produk']);
            }
            ?>
         <img src="<?php echo $logo_client ?>" class="portfolio-img-logo-single">
      </div>
      <h4 class="portfolio-short-desc-client">
         <?php
            echo get_the_content();
          ?>
      </h4>
      <div class="row">
         <div class="portfolio-image-cover">
            <?php
               foreach ($products_components_page as $key => $value) {
                  $gambar_cover_body = wp_get_attachment_url($value['gambar-cover-body-produk']);
               }
               ?>
            <img src="<?php echo $gambar_cover_body ?>" class="portfolio-image-cover-class">
         </div>
      </div>
   </div>
   <div class="col-md-2"></div>
</div>
<div class="row portfolio-bg-row">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5">
       <div class="portfolio-line"></div>
       <div class="portfolio-logo-single product-single-space">
          <h1 class="portfolio-title-single-page product-title-single-page">
            <?php
             foreach ($products_components_page as $key => $value) {
                echo($value['quote-tentang-produk']);
             }
             ?>
          </h1>
       </div>
       <h4 class="portfolio-short-desc-client-bawah produk-short-desc-fitur">
          <?php
             foreach ($products_components_page as $key => $value) {
                echo($value['deskripsi-fitur-produk']);
             }
             ?>
       </h4>
    </div>
    <div class="col-md-5 portfolio-btn-space produk-btn-launch">
       <?php
          foreach ($products_components_page as $key => $value) {
             $url_website_client = $value['website-produk'];
             $button_try_product = $value['button-try-product'];
          }
          if(!empty($url_website_client) && !empty($button_try_product)){
          ?>
          <a href="<?php echo $url_website_client; ?>" target="_blank">
          <button class="product-btn" onmouseout="document.getElementById('btnred-product').className='product-btn-shadow';" onmouseover="document.getElementById('btnred-product').className='product-btn-shadow-hidden';"><?php echo $button_try_product?></button><br />
          <button class="product-btn-shadow" id="btnred-product"></button>
          </a>
          <?php }
          ?>
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