define(function(require,exports,module){

    var pop = require('popup');

    $(document).ready(function(){

        pop.init({type:'login'});
        pop.init({type:'register'});

        if($('.more-article').length>0){
            pop.init({type:'article'});
        };

        if($('.index-banner').length==1){
            require.async('banner',function(banner){
                banner.init();
            });
        };

        if($('.nav-tabs').length>0){
            require.async('tab',function(tab){
                tab.init();
            });
        };

        if($('#faq').length==1){
            require.async('faq',function(faq){
                faq.init();
            });
        };


    });
});