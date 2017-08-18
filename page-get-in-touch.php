<?php
/*
Template Name: Landing Page Get In Touch
CSS Style 	: Ada beberapa style css yang berhubungan dengan page portfolio. Jadi hati-hati untuk mengedit cssnya. 
*/
get_header(); 
if (have_posts()) : while (have_posts()) : the_post(); 
$page_id = $post->ID;
?>
<div class="row">
<div class="container-get-in-touch">
	<div class="col-md-3"></div>
     <div class="col-md-6 col_popred-page">
        <div class="modal-header-sub-title">Our support team are ready to take care of your problems</div>
        <div class="modal-header-title">Ask us anything</div>
        <div class="row">
           <div class="space-form-modal">
              <?php echo do_shortcode( '[contact-form-7 id="75" title="Contact Form"]' ); ?> 
           </div>
        </div>
     </div>
     <div class="col-md-3"></div>
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

