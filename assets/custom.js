$(document).ready(function(){
  $('.form2').hide();
  $('.yardimciekip').hide();
  $('.sigorta').hide();

  $(".yardimci-check").click(function(){
          if( $(this).is(':checked') ) {
              $('.yardimciekip').show();
          }
          else {
            $('.yardimciekip').hide();

          }
      });
      $("[name=sigorta]").click(function(){
        if( $(this).val() == 'Evet' ) {
            $('.sigorta').show();
        }
        else {
          $('.sigorta').hide();

        }
          });

  setInterval(function(){
    var dt = new Date();
    var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
    $('.saat').html(time);
  },1000);

  $('[name=ilce]').on('change',function(){
    var data = $(this).val();
    $('#mahalle').attr('disabled',true);
    $.post('./anasayfa/semt_getir',{'ilce':data},function(resp){
      $('#semt').html(resp).removeAttr('disabled');
    });
  });

  $('#semt').on('change',function(){
    var data = $(this).val();
    $.post('./anasayfa/mahalle_getir',{'semt':data},function(resp){
      $('#mahalle').html(resp).removeAttr('disabled');
    });
  });






});
function form2(){
  $('.form1').hide();
  $('.form2').show();
}
function form1(){
  $('.form2').hide();
  $('.form1').show();
}
