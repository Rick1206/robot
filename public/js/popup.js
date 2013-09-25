define(['bpopup','dot'],function(require,exports,module){

    var article_tpl = null;
    var login_tpl = null;
    var register_tpl = null;
    var baseUrl = seajs.data.base;

    exports.init = function(data){

        var type = data.type;

        $(this).trigger(type);

    };

    $(exports).on('article',function(){
        pop_article(article_tpl);
    });
    $(exports).on('login',function(){
        pop_login(login_tpl);
    });
    $(exports).on('register',function(){
        pop_register(register_tpl);
    });

    function pop_article(tpl){

        if(!article_tpl){
            $.get(baseUrl+'../template/pop-article.tpl').done(function(tpl){
                article_tpl = tpl;
                pop_article(article_tpl);
            });
            return false;
        }
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

    };



    function pop_login(tpl){

        if(!login_tpl){
            $.get(baseUrl+'../template/pop-login.tpl').done(function(tpl){
                login_tpl = tpl;
                pop_login(login_tpl);
            });
            return false;
        };
        $('.login-s').on('click',function(){
            $('body').append(tpl);
            $('.pop-login').bPopup({
                onClose:function(){
                    $('.pop-login').remove();
                }
            });
        });
    };

    function pop_register(tpl){

        if(!register_tpl){
            $.get(baseUrl+'../template/pop-register.tpl').done(function(tpl){
                register_tpl = tpl;
                pop_register(register_tpl);
            });
            return false;
        };

        $('.register-s').on('click',function(){
            $('body').append(tpl);
            $('.pop-register').bPopup({
                onClose:function(){
                    $('.pop-register').remove();
                }
            });
        });
    };
})