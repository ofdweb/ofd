$(document).ready(function(){
  
  var syncRangeValues = function (){
    $.each($('#prices input[type="range"]'), function(index, item){
      $('#' + $(item).attr('id') + 'Value span').html($(item).val());
    });
    var priceMonth = 59999;
    var priceYear = 799999;
    $('.calc-results .row > div span span').first().html(priceMonth);
    $('.calc-results .row > div span span').last().html(priceYear);
  };
  
  $('#prices input[type="range"]').on('change', function(){
    syncRangeValues();
  });
  

  $('.menu-link-wrapper a').on('click', function(){
    if ($('.main-menu-wrapper').hasClass('hidden-sm'))
     {
        $('.main-menu-wrapper').removeClass('hidden-sm').removeClass('hidden-xs').css('display', 'none');
     }
    $('.main-menu-wrapper').slideToggle();
    return false;
  });
  
  $('.connect-payments .links a').on('click', function(){
    var $p = $(this).parent().parent();
    $('.active', $p).removeClass('active');
    $(this).parent().addClass('active');
  });
  
  syncRangeValues();
});