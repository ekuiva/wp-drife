<?php
   /*
   Template Name: About Us Page
   */
   ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 
	$page_id = $post->ID;
	$about_us_components_page = get_post_meta($page_id, 'about-us-components-page', TRUE);
?>
<div class="row">
	<div class="container-portfolio career-container">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-4">
            <h2 class="portfolio-title-single-page">
            	<?php
		            foreach ($about_us_components_page as $key => $value) {
		               echo($value['title-about-us']);
		            }
            	?>
            </h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-4">
            <p class="portfolio-text-description">
               <?php
		            foreach ($about_us_components_page as $key => $value) {
		               echo($value['title-deskripsi']);
		            }
            	?>
            </p>
         </div>
      </div>
   </div>
</div>
<div class="row portfolio-bg-row">
  <div class="col-md-2"></div>
  <div class="col-md-5">
     <div class="portfolio-line"></div>
     <div class="portfolio-logo-single">
        <h1 class="portfoilio-text-title about-us-space">VISION</h1>
     </div>
     <h4 class="portfolio-short-desc-client-bawah">
        <?php
           foreach ($about_us_components_page as $key => $value) {
              echo($value['visi-deskripsi']);
           }
           ?>
     </h4>
  </div>
</div>
<div class="row">
   <div class="portfolio-image-cover about-us-space-top">
      <?php
         foreach ($about_us_components_page as $key => $value) {
            $gambar_cover_body = wp_get_attachment_url($value['cover-gambar-visi']);
         }
         ?>
      <img src="<?php echo $gambar_cover_body ?>" class="portfolio-image-cover-class">
   </div>
</div>
<div class="row portfolio-bg-row">
  <div class="col-md-2"></div>
  <div class="col-md-5">
     <div class="portfolio-line"></div>
     <div class="portfolio-logo-single">
        <h1 class="portfoilio-text-title about-us-space">MISION</h1>
     </div>
     <h4 class="portfolio-short-desc-client-bawah">
        <?php
           foreach ($about_us_components_page as $key => $value) {
              echo($value['misi-deskripsi']);
           }
           ?>
     </h4>
  </div>
</div>
<div class="row">
   <div class="portfolio-image-cover about-us-space-top">
      <?php
         foreach ($about_us_components_page as $key => $value) {
            $gambar_cover_body = wp_get_attachment_url($value['cover-gambar-misi']);
         }
         ?>
      <img src="<?php echo $gambar_cover_body ?>" class="portfolio-image-cover-class">
   </div>
</div>
<?php
 foreach ($about_us_components_page as $key => $value) {
    $values_deskripsi = $value['values-deskripsi'];
 }
 if(!empty($values_deskripsi)){
 ?>
<div class="row portfolio-bg-row">
  <div class="col-md-2"></div>
  <div class="col-md-5">
     <div class="portfolio-line"></div>
     <div class="portfolio-logo-single">
        <h1 class="portfoilio-text-title about-us-space">VALUES</h1>
     </div>
     <h4 class="portfolio-short-desc-client-bawah">
        
     </h4>
  </div>
</div>
<div class="row">
   <div class="portfolio-image-cover about-us-space-top">
      <?php
         foreach ($about_us_components_page as $key => $value) {
            $gambar_cover_body = wp_get_attachment_url($value['cover-gambar-values']);
         }
         ?>
      <img src="<?php echo $gambar_cover_body ?>" class="portfolio-image-cover-class">
   </div>
</div>
<?php
 }
?>

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