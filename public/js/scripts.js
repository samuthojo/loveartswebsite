var win_base_url = window.location.origin + "/";

$('#bannerTopBar #links a').each(function(){
    if(win_base_url.indexOf($(this).prop("href")) != -1){
        if(window.location.pathname == "/" || window.location.pathname == "" || window.location.pathname == "/home")
            $(this).addClass('active');
        else
            $(this).removeClass('active');
    }else{
        if(window.location.href.indexOf($(this).prop("href")) != -1){
            $(this).addClass('active');
        }
        else
            $(this).removeClass('active');
    }
});