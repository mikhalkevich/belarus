$(function(){
    $('.QmrVtf').hide();
   $('#google_news a').each(function(){
       var href = $(this).attr('href');
       var new_href = 'https://news.google.com'+href;
       $(this).attr({'href': new_href, 'target': '_blank'});
   }) ;
});