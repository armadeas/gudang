var ActiveMenu = function () {

    return {
        init: function () {
        var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        //alert(urlRegExp);
        $('.side_menu li a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).parents('li').each(function () {
                /*var deass = */$(this).children().children('span.arrow').addClass('open');
                //console.log(deass);
                //console.log($(this).children('a'));
            });
            //$(this).parents('li').children('a')children('span.arrow').addClass('open');            
            $(this).parents('li').addClass('active');
            }
        });        
    }
    };

}();