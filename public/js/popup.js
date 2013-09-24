define(['bpopup','dot'],function(require,exports,module){

    var article_tpl = null;
    var baseUrl = seajs.data.base;
    exports.init = function(data){

        var type = data.type;

        $(this).trigger(type);

    }

    $(exports).on('article',function(){

        if(article_tpl){
            pop_article(article_tpl);
        }else{
            $.get(baseUrl+'../template/pop-article.tpl').done(function(tpl){
                article_tpl = tpl;
                pop_article(article_tpl);
            });
        }

    });

    function pop_article(tpl){

        $('.more-article').each(function(){

            $(this).on('click',function(){

                var reqUrl = $(this).data('post');

                $.post(reqUrl).done(function(data){

                    var tempFn = doT.template(article_tpl);
                    var html = tempFn(data);

                    $('body').append(html);

                    $('.pop-article').bPopup({
                        follow: [true, false], //x, y
                        position: ['auto', $(window).scrollTop()+50],
                        onClose:function(){
                            $('.pop-article').remove();
                        }
                    });

                });

                return false;
            });

        });

    }
})