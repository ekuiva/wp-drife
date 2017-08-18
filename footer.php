<!-- Modal Contacts -->
<!-- Modal -->

<style type="text/css">
/* Responsive Media 768px */
@media(max-width:768px){



}
</style>

<!-- <div id="myModal" class="modal fade" role="dialog" tabindex="-1"> -->
  <div class="row row_popcontactus animated fadeIn">
     <div class="col-md-3"></div>
     <div class="col-md-6 col_popred animated zoomIn">
        <div class="close-modal" id="btn-close-modal"  title="Hide Contact Us">
           <span class="icon-modal-close glyphicon glyphicon-remove"></span>
        </div>
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
<!-- </div> -->

<footer class="footer" role="contentinfo">
   <div id="inner-footer" class="wrap clearfix">
      <div class="row footer-section">
         <div class="col-md-2 col-sm-1 in-footer"></div>
         <div class="col-md-2 col-sm-2 in-footer">
            <span class="title-footer">DRIFE</span>
            <div class="line-footer"></div>
            <ul class="list-menu-footer">
                <?php
                  $menu_id = 10; //FOOTER - DRIFE
                  $menu_items = wp_get_nav_menu_items($menu_id);
                  foreach ( $menu_items as $key => $menu_item ) { 
                ?>
                <li><a href="<?php echo $menu_item->url?>"><?php echo $menu_item->title?></a></li>
                <?php } ?>
            </ul>
         </div>
         <div class="col-md-2 col-sm-3 in-footer">
            <span class="title-footer">SERVICES</span>
            <div class="line-footer"></div>
            <ul class="list-menu-footer">
                <?php
                  $menu_id = 51; //FOOTER - SERVICES
                  $menu_items = wp_get_nav_menu_items($menu_id);
                  foreach ( $menu_items as $key => $menu_item ) { 
                ?>
                <li><a href="<?php echo $menu_item->url?>"><?php echo $menu_item->title?></a></li>
                <?php } ?>
            </ul>
         </div>
         <div class="col-md-2 col-sm-2 in-footer">
            <span class="title-footer">PRODUCTS</span>
            <div class="line-footer"></div>
            <ul class="list-menu-footer">
                <?php
                  $menu_id = 52; //FOOTER - PRODUCTS
                  $menu_items = wp_get_nav_menu_items($menu_id);
                  foreach ( $menu_items as $key => $menu_item ) { 
                ?>
                <li><a href="<?php echo $menu_item->url?>"><?php echo $menu_item->title?></a></li>
                <?php } ?>
            </ul>
         </div>
         <div class="col-md-2 col-sm-3 in-footer">
            <center>
              <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-round.png" class="img-logo-drife-footer" />
              <div class="footer-address">
                <p>PT. DRIFE SOLUSI INTEGRASI</p>
                <p>WISMA STACO 5TH FLOOR</p>
                <p><a href="tel:+622128542113">(+62-21) 2854 2113</a></p>
                <p><a href="tel:+622128542877">(+62-21) 2854 2877</a></p>
              </div>
              <div class="instagram-section">
                <a href="https://www.instagram.com/drife.co.id/" target="blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/library/images/instagram-logo.png"/>
                  <p>@DRIFE.CO.ID</p>
                </a>
              </div>
            </center>
         </div>
         <div class="col-md-2 in-footer"></div>
      </div>
   </div>
   <div class="footer-copyright">
      <div class="col-md-12 footer-section-text">
         <center><p>&copy; <?php echo date("Y"); ?> PT DRIFE SOLUSI INTEGRASI | ALL RIGHTS RESERVED</p></center>
      </div>
   </div>
</footer>
</div>
<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>
<script type="text/javascript">
   $(document).ready(function() {
      $(window).scroll(function(){
         $('*[class^="prlx"]').each(function(r){
            var pos = $(this).offset().top;
            var scrolled = $(window).scrollTop();
            $('*[class^="prlx"]').css('top', -(scrolled * 0.2) + 'px');       
          });
      });
   });
</script>
</body>
</html>