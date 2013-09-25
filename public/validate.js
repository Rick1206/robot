define(function(require,exports,module){


    exports.check = validate;


    function validate(ele,r){
        var reg = {
            mobile : /^0*(13|15)\d{9}$/,
            email :/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/,
            nonNull:/\S+/
        };
        $(ele).focusout(function(){
            var _val = $(this).val();
            var regx = reg[r] ;
            if(regx.test(_val)||_val==""){
                $(this).parents('.control-group').removeClass('error');
            }else{
                $(this).parents('.control-group').addClass('error');
            }
        });
    }

})