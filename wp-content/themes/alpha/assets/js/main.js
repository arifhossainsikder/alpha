; (function ($) {
   $(document).ready(function () {
       $(".popup").each(function () {
           var image = $(this).find("img").attr("src");
           $(this).attr("data-featherlight",image);
       });
   });
})(jQuery);