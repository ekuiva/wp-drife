<?php
/*
Template Name: Tester Page
*/
?>

<?php get_header(); ?>

<br/><br/><br/><br/><br/><br/><br/>


<script type="text/javascript">
function showQuote() {
pickWords =
[
"Success",
"powerful",
"strong",
"forward",
"advance",
"further",
"ahead",
"invincible",
"amazing",
"incredible",
"spectacular",
"astonishing",
"astounding",
"surprising",
"bewildering",
"stunning",
"staggering",
"awesome",
"sensational",
"phenomenal",
"incredible",
"marvellous",
"exciting",
"flabbergasting",
"supercalifragilisticexpialidocious"
]

var word22 = pickWords[Math.floor(Math.random()*pickWords.length)];
pickColors =

[
  "#aa2233",
  "#00cc44",
  "#F342AA"
]
var Color22 = pickColors[Math.floor(Math.random()*pickColors.length)];
var Top22 = (Math.floor(Math.random()*800));
var Left22 = (Math.floor(Math.random()*800));

var style33 = '<h4 class="animated fadeIn" style="font-size: 2.3em; color:'+Color22+';">';
var style34 = '</h4>';
var finWord22 = style33 + word22 + style34;

var duration = 400;  

 document.getElementById("quotes").innerHTML=finWord22; 
}

onload = function(){
 setInterval(function(){ showQuote(); }, 2000);
}

</script>

<div id="quotes"></div>

<?php get_footer(); ?>
