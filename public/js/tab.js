define(function(require,exports,module){

    exports.init = function(){

        $('.nav-tabs').each(function(){
            var $tabs = $(this);
            var $content = $(this).siblings('.tab-content');
            $tabs.find('li').each(function(n){
               $(this).on('click',function(){
                   $(this).addClass('active').siblings().removeClass('active');
                   $content.find('.tab-pane').removeClass('active').eq(n).addClass('active');
               });
            });
        })

    }
});