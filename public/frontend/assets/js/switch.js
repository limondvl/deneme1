$(document).ready(function() {

  //Menüdeki linkin tıklanmasıyla olay tetikleniyor
  $("#menu_link li a").click(function(event) {

    //Menüdeki linkin çalışmasını engelliyoruz 
    event.preventDefault();

    //Tıklanan menünün link değerini alıyoruz (#menu_1,#menu_2 vb.)
    var link = ($(this).attr("href")).slice(1);

    //paragrafdaki id'nin pozisyon değerini alıyoruz
    var link_pos = $("#" + link + "").position().top;

    //Yazı alanın o durumdaki scrollTop değerini alıyoruz
    var cur_pos = $('#overflow_text').scrollTop();

    //Tıklanan menüye göre yapılması gerekn scrollTop değeri
    var total_scroll = cur_pos + link_pos;

    //Yazımızın içeriğini animasyonla kaydırıyoruz
    $('#overflow_text').animate({
      scrollTop: total_scroll
    }, 'slow');
  });
});