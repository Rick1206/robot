define(function(require,exports,module){



    $(document).ready(function(){

        if($('.index-banner').length==1){
            require.async('banner');
        }

    });
});