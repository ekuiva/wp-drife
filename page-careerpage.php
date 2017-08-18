<?php
/*
Template Name: Career Page
CSS Style 	: Ada beberapa style css yang berhubungan dengan page portfolio. Jadi hati-hati untuk mengedit cssnya. 
*/
?>
<?php get_header(); 
if (have_posts()) : while (have_posts()) : the_post(); 
$page_id = $post->ID;

// Product Component Page
$products_components_page = get_post_meta($page_id, 'products-components-page', TRUE);
$careerdetail = get_post_meta($page_id, 'careerdetail', TRUE);
?>
<div class="row">
	 <div class="container-portfolio">
	  <div class="row">
	     <div class="col-md-2"></div>
	     <div class="col-md-4">
	        <h2 class="portfoilio-text-title"><?php echo get_the_title()?></h2>
	     </div>
	  </div>
	  <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-4">
            <p class="portfolio-text-description career-button-space">
               <?php echo get_the_content()?>
            </p>
         </div>
      </div>
</div>
<div class="row portfolio-bg-row">
	<div class="row career-space-on-bottom">
		<div class="col-md-2"></div>
		<div class="col-md-8">
         <div class="portfolio-line"></div>
         <?php
         $get_careers = new WP_Query(array( 'post_type' => 'career', 'order' => 'ASC' ));
         if($get_careers->post_count >= 1){
         ?>
		 <!-- start content -->
		 <div class="portfolio-logo-single">
            <h1 class="portfoilio-text-title career-top-space">Available Position</h1>
         </div>
         <h4 class="portfolio-short-desc-client-bawah career-description">
            Find your ideal job with Drife
         </h4>
         <?php 
         $i = 1;
         while ($get_careers->have_posts()) {
         	$get_careers->the_post();
         	$career_components_page = get_post_meta($post->ID, 'career-components-page', true); 
         	$str_in = ($i==1)?'in':''; 
         	$str_accordion = ($i==1)?'':'collapsed'; 
         ?>
		  <!-- start career description -->
		  <div class="panel-group" id="accordion<?php echo $i;?>">
		    <div class="panel panel-default career-panel-custom">
		      <div class="career-panel-heading">
		        <h4 class="career-panel-title">
		          <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" class="accordion-toggle <?php echo $str_accordion?>">
		          <?php echo get_the_title() ?>
		          </a>
		        </h4>
		      </div>
		      <div id="collapse<?php echo $i;?>" class="panel-collapse collapse <?php echo $str_in;?>">
		        <div class="panel-body career-body-title">
			        <h3 class="career-jobrecutiment">Job Requirement</h3>
			        <?php echo $career_components_page[0]['career-job-requirement'];?>
			        <h3 class="career-jobdescription">Job Description</h3>
			        <?php echo $career_components_page[0]['career-job-description'];?>
		        </div>
		      </div>
		    </div>
		  </div> 
         <!-- end career description -->
		 <!-- end content -->
         <?php
         $i++;
         }
         } else {
         ?>
		 <div class="portfolio-logo-single">
            <h1 class="portfoilio-text-title career-top-space">There currently no position available</h1>
         </div>
         <?php
         }wp_reset_postdata();
         ?>
      	</div>
      	<div class="col-md-2"></div>
	</div>
</div>
<div class="row career-space">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-4">
				<h3 class="share-and-tags-title">Contact Information</h3>
				<div class="share-and-tags-line"></div>
				<?php
				   foreach ($careerdetail as $key => $value) {
				      $career_contact_information = $value['career-contact-information'];
				   }
				?>
				<div class="career-info-contact"><?php echo $career_contact_information ?></div>
			</div>
			<?php
			   foreach ($careerdetail as $key => $value) {
			      $career_form_application = $value['career-form-application'];
			      $url = wp_get_attachment_url($career_form_application);
			   }
			   if (!empty($url)) { //start if
			?>
			<div class="col-md-4">
				<h3 class="share-and-tags-title">Form Application</h3>
				<div class="share-and-tags-line"></div>
				<a href="<?php echo $url?>" target="blank" class="career-icon">
					<div class="career-download-form">
						<img src="<?php echo bloginfo('template_directory'); ?>/library/images/icon-pdf.png">
						Download Form
					</div>
				</a>
			</div>	
			<?php
			   } //end if
			?>
		</div>
	</div>
	<div class="col-md-2"></div>
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
