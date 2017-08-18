<?php
/*
Template Name: Connect with us Page
*/
?>

<?php get_header(); ?>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

<section class="bg-con-1">
<div class="prlx-2"></div>
<div class="row animated fadeIn">
	<div class="col-md-12 txt-bg1 " align="center">
		<div class="title-who">LET US HELP YOU THROUGH</div>

	</div>
</div>
</section>

<div class="row">
	<div class="col-md-12 bg-con-2">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 animated bounceInUp pd-0">
				<div class="title-home2">CONTACT</div>
				<div class="dot-h">.  .  .  .</div>
<div class="row form-home">
	<div class="col-md-6 pd-0">
	<div class="form-txt">FULL NAME</div>
	<input type="text" name="name" class="input-home" placeholder="Your Full Name"><br/>
	<div class="form-txt">EMAIL</div>
	<input type="text" name="email" class="input-home" placeholder="Your Email">
	</div>

	<div class="col-md-6">
<div class="info-home">
Look beyond to the right methodology, because digital marketing will be the key to optimize brand based on the objectives that we want to achieve Together, let’s invite consumer to engage a new experience in the digital journey.
</div>

<div class="info-home2">
PT Drife Solusi Integrasi<br/>
Ruko 85<br/>
Jl. Bungur Besar Raya no. 85 Blok A2 Lt. 3<br/>
Jakarta Pusat 10620, Indonesia<br/>
+(62-21) 424 4489
</div>
	</div>
</div>

<div class="form-txt">MESSAGE</div>
<textarea name="pesan" class="textarea-home" placeholder="Let's input your question here..."></textarea>


<div class="row p-massage">
	<div class="col-md-7"></div>
	<div class="col-md-1">
		<a href="https://www.google.co.id/maps/place/Jl.+Bungur+Besar+No.85A2,+Kemayoran,+Kota+Jakarta+Pusat,+Daerah+Khusus+Ibukota+Jakarta+10610/@-6.1655377,106.8395152,17z/data=!3m1!4b1!4m2!3m1!1s0x2e69f5b801bd2201:0xeed19d26cf1d1c28?hl=en"
		target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/location.png" height="40px"></a>
	</div>
	<div class="col-md-4 pd-0">
		 <div class="btn-submit" >SUBMIT</div>
	</div>
</div>
</div>
			</div>
			<div class="col-md-2"></div>
		</div>	
	</div>
</div>

<div class="row map-go ">
	<div class="col-md-12 pd-0">
	<div id='gmap_canvas' style='height:250px;width:100%;z-index:2;'></div>
	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	</div> <a href='http://maps-generator.com/'>add google maps to my website</a> 
	<script type='text/javascript' src='http://embedmaps.com/google-maps-authorization/script.js?id=68d0ffc93d190e31b6885e02c58cbfc0478e67a0'></script>
	<script type='text/javascript'>function init_map(){var myOptions = {scrollwheel: false,zoom:15,center:new google.maps.LatLng(-6.1641982,106.8417528),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-6.165582, 106.841896)});infowindow = new google.maps.InfoWindow({content:'<strong>Drife Solution</strong><br>Jl. Bungur Besar Raya No.85<br>10620 Jakarta<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	</div>
</div>

<?php get_footer(); ?>
