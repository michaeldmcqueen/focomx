(function ($) {
    $(document).ready(function() {
   
     $('.menu-toggle').click(function() {  
       $('body').toggleClass('menu-open');
       $('.menu-toggle').toggleClass('menu-toggle--open');
     });

     // FAQ 
    $('.faq--question').click(function () {
      if ($(this).parent().hasClass('faq-item--open')) {
        $(this).parent().removeClass('faq-item--open');
      } else {
        $('.faq--question').parent().removeClass('faq-item--open');
        $(this).parent().addClass('faq-item--open');
      }
    });
   
    });
})(jQuery);