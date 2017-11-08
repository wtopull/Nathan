(function($) {  
    $.fn.ajaxSubmit = function(options) {  
        var form = this;  
        var formAction = form.attr('action');  
        var formMethod = form.attr('method');  
        if(formMethod == null ||  
                !/^(POST|GET)$/i.test(formMethod.trim())){  
            formMethod = "GET";  
        }  
        var params = new Object();  
        /*组合参数*/                  
        var items = form.find("input[type=hidden],"+  
                "input[type=text],"+  
                "input[type=password],"+  
                "textarea,"+  
                "select,"+  
                "input[type=radio]:checked,"+  
                "input[type=checkbox]:checked");  
          
        items.each(function(index){  
            params[this.name] = this.value;  
        });  
        /**/  
        var dataType = options.dataType;  
        if(dataType == null)  
            dataType = 'json';  
        var success = options.success;  
        if(success == null){  
            success = function(){  
            };  
        }  
        $.ajax({  
            type: formMethod,  
            url: formAction,  
            data: params,  
            dataType: dataType,  
            success: success  
        });  
    };  
})(Zepto);
