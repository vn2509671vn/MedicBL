function selectorMenu(idMenu){
    jQuery("#"+idMenu).addClass("active");
    jQuery("#footer"+idMenu).css("color","#f4b51c");
    jQuery("#footer"+idMenu).css("background-color","#f2f2f2");
}