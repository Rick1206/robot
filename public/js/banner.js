define(function(require,exports,modlue){

    require('carouFredSel');

    $('.index-banner ul').carouFredSel({
        auto:false,
        scroll:{
            fx:"crossfade"

        },
        items :{
            width:968,
            height:674
        }

    });



})