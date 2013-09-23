define(function(require,exports,module){

    $(document).ready(function(){

        if($('.index-banner').length==1){
            require.async('banner',function(banner){
                banner.init();
            });
        }

        if($('.nav-tabs').length>0){
            require.async('tab',function(tab){
                tab.init();
            });
        }
    });
});