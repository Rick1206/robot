define(function(require,exports,module){

    exports.init = function(){

        var $faq = $('#faq .list');

        $faq.find('li').each(function(){

           $(this).find('.f').on('click',function(){

               $(this).toggleClass('active');
               $(this).siblings('.q').slideToggle(200);
           });

        });

    }

});