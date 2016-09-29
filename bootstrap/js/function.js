function selectorMenu(idMenu){
    jQuery("#"+idMenu).addClass("active");
    jQuery("#footer"+idMenu).css("color","#f4b51c");
    jQuery("#footer"+idMenu).css("background-color","#f2f2f2");
}

function bodauTiengViet(str) {
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        return str;
}

var changeTooltipPosition = function(e) {
    var tooltipX = e.e.pageX - 10;
    var tooltipY = e.e.pageY - 35;
    var tooltipX_Content = tooltipX + 20;
    var tooltipY_Content = tooltipY - 10;
    $('div.mapTooltip').css({top: tooltipY, left: tooltipX});
    $('div.mapTooltipContent').css({top: tooltipY_Content, left: tooltipX_Content});
};
    
var showTooltip = function(e, color) {
    $('div.mapTooltip').remove();
    $('div.mapTooltipContent').remove();
    $('#small-dialog').remove();
    var titleArea = $('area[data="'+e.key+'"]').attr('full');
    var pathImg = 'href="../Panorama/' + $('area[data="'+e.key+'"]').attr('data-path') + '"';
    if (pathImg === 'href="../Panorama/undefined"'){
        pathImg = "";
    }
    $('<div class="mapTooltip"><img src="../images/floor/giotnuoc.png" width="20" class="pull-left"></div><div class="mapTooltipContent"><a class="txtTooltip text-bold" style="color: #'+color+'" '+pathImg+'" target="_blank">'+titleArea+'</a></div>').appendTo('body');
    // $('.popup-with-zoom-anim').magnificPopup({
    //               type: 'inline',
        
    //               fixedContentPos: false,
    //               fixedBgPos: true,
        
    //               overflowY: 'auto',
        
    //               closeBtnInside: true,
    //               preloader: false,
                  
    //               midClick: true,
    //               removalDelay: 300,
    //               mainClass: 'my-mfp-zoom-in'
    //         });
    changeTooltipPosition(e);
};

function IsPointInPolygon(nvert, vertx, verty, testx, testy) {
    var bResult = false; 
    for (var i = 0, j = nvert - 1; i < nvert; j = i++) { 
        if (((verty[i] > testy) != (verty[j] > testy)) && 
            (testx < (vertx[j] - vertx[i]) * (testy - verty[i]) / (verty[j] - verty[i]) + vertx[i]))
        { 
            bResult = !bResult; 
        } 
    } 
        return bResult; 
}

function getFloor(szRoom){
    var nFloor = 0;
    nFloor = parseInt(szRoom.slice(0,1),10);
    return nFloor;
}