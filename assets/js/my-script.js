jQuery(document).ready(function($) {
    
    let title = my_script_vars.pageTitle;

    if (title == 'home'){
        $("#nave").attr("data-style" , "dark");
        $("#nave").attr("data-position" , "absolute"); 
    }else{
        $("#nave").attr("data-style" , "light");
        $("#nave").attr("data-position" , "relative"); 
    }
});