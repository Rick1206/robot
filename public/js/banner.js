define(function(require,exports,modlue){

    require('carouFredSel');

    exports.init = function(){

        var short = $('.index-banner-block .short');
        var $p = $('.index-banner-ctrl-it');
        var carou = $('.index-banner ul');
        carou.carouFredSel({
            auto:false,
            items :{
                width:968,
                height:674
            },
            prev:'.index-banner-prev',
            next:'.index-banner-next',
            scroll:{
                fx:"crossfade",
                onBefore:function($this){
                    var old = $this.items.old;
                    var visible = $this.items.visible;
                    pagination(visible.data('index'));
                }
            },
            onCreate:function($this){
                pagination($this.items.data('index'));
            }
        });
        $p.each(function(n){
            $(this).on('click',function(){
                carou.trigger('slideTo',n);
            })
        });
        function pagination(n){
            var pos = short.eq(n).show().position();
            short.hide();
            short.eq(n).css({
                opacity:0,
                left:pos.left-150,
                top:pos.top-20
            })
            short.eq(n).show().animate({left:pos.left,top:pos.top,opacity:1},600);
            $p.removeClass('selected').eq(n).addClass('selected');
        }
    };

})