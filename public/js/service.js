define(['validate'],function(){

    var tabsTop = $('.tab-top');
    var tradeType = $('input[name=tradeType]');
    var tradeTime = $('input[name=tradeTime]');
//    pageCheck();

    function pageCheck(){
        switch (location.hash){
            case '#lease' :
                checkout(0);
                break;
            case "#sell" :
                checkout(1);
                break;
            case '#transfer':
                checkout(2);
                break;
        }
        tradeType.each(function(i){
           $(this).on('change',function(){
               checkout(i);
           })
        });

        function checkout(n){
            tabsTop.find('a').removeClass('selected').eq(n).addClass('selected');
            tradeType.each(function(i){
                if(i == n){
                    this.checked =true;
//                    this.disabled = false;
                }else{
                    this.checked =false;
//                    this.disabled = true;
                }
            });
            if(n==0){
                tradeTime.get(0).disabled = false;
            }else{
                tradeTime.get(0).disabled = true;
            }
        }
    }
    $(window).on('hashchange',pageCheck).trigger('hashchange');

    $('#form_a1').validator({
        errorCallback:function(unvalidFields){
            alert('表单不完整!');
        }
    });

    $('#form_a1').find('[type=submit]').on('click',function(){
        // check login


    });


    ie_old()&&ie_old()();

    function ie_old(){
        var appVersion = navigator.appVersion.toLocaleLowerCase();
        var ie6 = appVersion.indexOf('ie 6') != -1 ;
        var ie7 = appVersion.indexOf('ie 7') != -1 ;
        var url = location.href;
        if(ie6||ie7){

            return function(){

                setInterval(function(){
                    if(location.href != url){

                        $(window).trigger('hashchange');
                        url = location.href
                    }
                },100);

            }
        }

    }

});