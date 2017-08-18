// Load More Untuk Portfolio di Homepage
var noof = 6;
var offsetin = 2;
$('.load_portfolio_in_home').click(function(){
    var idpage = $(this).data('idpage');
    $('.load_portfolio_in_home').hide();
    $('.load_nowrow').fadeIn();

    $.ajax({
    url : ajaxscript.ajaxurl,
    data : {
      'action':'ajax_load_portfolio_in_homepage',
      'of' : noof,
      'idpage' : idpage
    },
    success:function(mssg){
        var obj = $.parseJSON(mssg);
        var length = obj.length;
        var html = '';
        var fn = 0;

        for( i = 0;i< length; i++)
        {
          fn = obj[i]['page'];
          html += '<div class="col-md-6 col-sm-6 bg-content-portfolio">';
          html += '<a href="'+obj[i]['link']+'"><div class="overflow-portfolio">';
          html += '<img src="'+obj[i]['poto']+'" class="img-portfolio">';
          html += '</div>';
          html += '<div class="content-workflow">';
          html += '<img class="logo-client-portfolio" src="'+obj[i]['poto_logo_url']+'">';
          html += '<h3 class="text-client-portfolio">'+obj[i]['title']+'</h3>';
          html += '<h4 class="view-detail-portfolio">View Detail</h4>';
          html += '</div></a>';
          html += '</div>'
        }
        
        if(fn <= 1){
          $('.more-news').hide();
        }

        $('.load_nowrow').hide();
        $('.load_portfolio_in_home').fadeIn();
        $('.load_data_portfolio_home').append(html);

        // Untuk menampilkan hover view detail
        $('.bg-content-portfolio').hover(function() { 
            $(this).find('.content-workflow').css('display', 'block'); 
        }, function() { 
            $(this).find('.content-workflow').css('display', 'none');
        });
    },
  }); 
  noof = noof + offsetin; 
});

// Load More Untuk Portfolio di Portfolio Page
var noof = 6; // untuk batas mulai offset looping
var offsetin = 2; // untuk berapa banyak di tampilkan
$('.load_portfolio_in_portfolio_page').click(function(){
    var idpage = $(this).data('idpage');
    $('.load_portfolio_in_portfolio_page').hide();
    $('.load_nowrow').fadeIn();

    $.ajax({
    url : ajaxscript.ajaxurl,
    data : {
      'action':'ajax_load_portfolio_in_portfolio_page',
      'of' : noof,
      'idpage' : idpage
    },
    success:function(mssg){

        var obj = $.parseJSON(mssg);
        var length = obj.length;
        var html = '';
        var fn = 0;

        for( i = 0;i< length; i++)
        {
          fn = obj[i]['page'];
          html += '<div class="col-md-6 col-sm-6 bg-content-portfolio">';
          html += '<a href="'+obj[i]['link']+'"><div class="overflow-portfolio">';
          html += '<img src="'+obj[i]['poto']+'" class="img-portfolio">';
          html += '</div>';
          html += '<div class="content-workflow">';
          html += '<img class="logo-client-portfolio" src="'+obj[i]['poto_logo_url']+'">';
          html += '<h3 class="text-client-portfolio">'+obj[i]['title']+'</h3>';
          html += '<h4 class="view-detail-portfolio">View Detail</h4>';
          html += '</div></a>';
          html += '</div>'
        }

        if(fn <= 1){
          $('.more-news').hide();
        }

        $('.load_nowrow').hide();
        $('.load_portfolio_in_portfolio_page').fadeIn();
        $('.load_data_in_portfolio_page').append(html);

        // Untuk menampilkan hover view detail
        $('.bg-content-portfolio').hover(function() { 
            $(this).find('.content-workflow').css('display', 'block'); 
        }, function() { 
            $(this).find('.content-workflow').css('display', 'none');
        });
    },
  }); 
  noof = noof + offsetin; 
});

// Load More Untuk Portfolio di Single Service Page
var noof4 = 6; // untuk batas mulai offset looping
var offsetin4 = 2; // untuk berapa banyak di tampilin
$('.load_portfolio_in_service').click(function(){

    var idpage = $(this).data('idpage');

    $('.load_portfolio_in_service').hide();
    $('.load_nowrow').fadeIn();
    $.ajax({
    url : ajaxscript.ajaxurl,
    data : {
      'action':'ajax_load_portfolio_in_service',
      'of' : noof4,
      'idpage' : idpage
    },
    success:function(mssg){

        var obj = $.parseJSON(mssg);
        var length = obj.length;
        var html = '';
        var fn = 0;

        for( i = 0;i< length; i++)
        {
          fn = obj[i]['page'];
          html += '<div class="col-md-6 col-sm-6 bg-content-portfolio">';
          html += '<a href="'+obj[i]['link']+'"><div class="overflow-portfolio">';
          html += '<img src="'+obj[i]['poto']+'" class="img-portfolio">';
          html += '</div>';
          html += '<div class="content-workflow">';
          html += '<img class="logo-client-portfolio" src="'+obj[i]['poto_logo_url']+'">';
          html += '<h3 class="text-client-portfolio">'+obj[i]['title']+'</h3>';
          html += '<h4 class="view-detail-portfolio">View Detail</h4>';
          html += '</div></a>';
          html += '</div>'
        }

        if(fn <= 1){
            $('.more-news').hide();
        }

        $('.load_nowrow').hide();
        $('.load_portfolio_in_service').fadeIn();
        $('.load_data_portfolio').append(html);

        // Untuk menampilkan hover view detail
        $('.bg-content-portfolio').hover(function() { 
            $(this).find('.content-workflow').css('display', 'block'); 
        }, function() { 
            $(this).find('.content-workflow').css('display', 'none');
        });

        noof4 = noof4 + offsetin4; 
    },
  }); 
});
