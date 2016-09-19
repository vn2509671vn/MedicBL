<!-- Add start Header-->
<?php require("../header.php");?>
<!-- Add end Header-->
<!-- Add start slider-->
<?php require("../slider.php");?>
<!-- Add end slider-->
<!-- Add start services-->
<?php require("../services.php");?>
<!-- Add end services-->
<div class="container text-center">    
    <div class="row">
    <br>
        <!-- Left content-->
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="row text-left">
                  <div class="col-sm-12 padding-left-0">
                    <a class="text-left a-title line-hight-nor"><?php echo $main['timphong'];?></a>
                  </div>
                </div>
                <br>
                <div class="col-md-12" id="map_content">
                    <input type="text" name="currency" class="form-control" id="autocomplete" placeholder="Nhập tên phòng">
                    <div style="clear:both;"></div>
                    <div id="floor1">
                        <img src="../images/floor/tang1.jpg" usemap="#mapOne" width="100%" data-id="1" id="imageMap1">
                    </div>
                    <div id="floor2">
                        <img src="../images/floor/tang2.jpg" usemap="#mapTwo" width="100%" data-id="2" id="imageMap2">
                    </div>
                    <div id="floor3">
                        <img src="../images/floor/tang3.jpg" usemap="#mapThree" width="100%" data-id="3" id="imageMap3">
                    </div>
                    <div id="floor4">
                        <img src="../images/floor/tang4.jpg" usemap="#mapFour" width="100%" data-id="4" id="imageMap4">
                    </div>
                    <div id="floor5">
                        <img src="../images/floor/tang5.jpg" usemap="#mapFive" width="100%" data-id="5" id="imageMap5">
                    </div>
                    <div id="floor6">
                        <img src="../images/floor/tang6.jpg" usemap="#mapSix" width="100%" data-id="6" id="imageMap6">
                    </div>
                    
                    <map name="mapOne">
                        <area data="1-KCC" full="Tang 1 - Khoa Cap Cuu" href="#" coords="374,784,207,784,460,360,875,358,868,421,900,418,883,503,973,511,963,543,813,543,798,581,597,576,557,661,424,663,412,706" shape="poly">
                        <area data="1-KCC" full="Tang 1 - Khoa Cap Cuu" href="#" coords="795,581,707,891,888,899,885,951,587,956,607,886,419,889,460,796,485,791,497,766,485,748,465,746,387,746,414,706,677,708,718,583" shape="poly">
                        <area data="1-WC-1" full="Tang 1 - WC" href="#" coords="367,789,287,949,106,946,199,784" shape="poly">
                        <area data="1-WC-2" full="Tang 1 - WC" href="#" coords="1614,230,1622,265,1860,268,1842,230" shape="poly">
                    	<area data="1-DT" full="Tang 1 - Dien Tim" href="#" coords="592,576,575,623,702,621,715,581" shape="poly">
                        <area data="1-SA" full="Tang 1 - Sieu Am" href="#" coords="570,623,550,661,685,663,700,626" shape="poly">
                        <area data="1-TN-1" full="Tang 1 - Thu ngan" href="#" coords="555,661,537,701,675,701,685,666" shape="poly">
                        <area data="1-TN-2" full="Tang 1 - Thu Ngan" href="#" coords="1534,711,1559,881,1772,884,1727,706" shape="poly">
                    	<area data="1-NT" full="Tang 1 - Nha thuoc" href="#" coords="427,663,414,701,532,706,550,663" shape="poly">
                        <area data="1-TTBB" full="Tang 1 - Thu Thuat Bo Bot" href="#" coords="808,548,755,721,925,723,965,546" shape="poly">
                        <area data="1-XQ-1" full="Tang 1 - X-Quang" href="#" coords="758,721,740,786,915,786,928,728" shape="poly">
                        <area data="1-XQ-2" full="Tang 1 - X-Quang" href="#" coords="1091,173,1081,230,1216,235,1218,175" shape="poly">
                        <area data="1-CTS-1" full="Tang 1 - CT Scaner" href="#" coords="738,786,707,894,893,896,915,784" shape="poly">
                        <area data="1-CTS-2" full="Tang 1 - CT Scaner" href="#" coords="1083,233,1068,335,1211,338,1216,235" shape="poly">
                        <area data="1-DSA" full="Tang 1 - DSA" href="#" coords="918,781,890,951,1163,949,1173,784" shape="poly">
                        <area data="1-MRI" full="Tang 1 - MRI" href="#" coords="1268,170,1271,295,1562,295,1536,168" shape="poly">
                        <area data="1-NTBHYT" full="Tang 1 - Nha Thuoc BHYT" href="#" coords="1511,581,1529,708,1722,706,1694,583" shape="poly">
                        <area data="1-CTB-1" full="Tang 1 - Cau Thang Bo" href="#" coords="242,516,162,643,282,643,352,518" shape="poly">
                        <area data="1-CTB-2" full="Tang 1 - Cau Thang Bo" href="#" coords="572,145,552,183,735,183,755,150" shape="poly">
                        <area data="1-CTB-3" full="Tang 1 - Cau Thang Bo" href="#" coords="1078,461,1201,463,1196,541,1073,546" shape="poly">
                        <area data="1-CTB-4" full="Tang 1 - Cau Thang Bo" href="#" coords="1824,463,1850,541,1987,546,1952,461" shape="poly">
                        <area data="1-CTB-5" full="Tang 1 - Cau Thang Bo" href="#" coords="1624,268,1629,303,1877,310,1865,268" shape="poly">
                        <area data="1-TC" full="Tang 1 - Thang Cuon" href="#" coords="1997,375,2060,501,2310,501,2228,373" shape="poly">
                        <area data="1-TM" full="Tang 1 - Thang May" href="#" coords="1637,308,1637,333,1834,330,1827,305" shape="poly">
                    </map>
                    <map name="mapTwo">
                        <area data="2-KhuKham-1"      full="Khu kham 1" href="#" coords="3636,3807,4106,3817,3991,4860,3459,4871" shape="poly">
                        <area data="2-KhuKham-2"      full="Khu kham 2" href="#" coords="5452,4036,5452,4860,4951,4860,4930,4568,4440,4558,4502,4047" shape="poly">
                        <area data="2-KhuKham-3"      full="Khu kham 3" href="#" coords="5807,4043,6767,4033,6892,4867,5849,4888" shape="poly">
                        <area data="2-KhuKham-4"      full="Khu kham 4" href="#" coords="7163,4036,8112,4036,8342,4850,7309,4860" shape="poly">
                        <area data="2-KhuKham-5"      full="Khu kham 5" href="#" coords="8425,3818,8937,3818,9323,4861,8759,4872" shape="poly">
                        <area data="2-KhuKham-6"      full="Khu kham 6" href="#" coords="7361,5048,9375,5027,9510,5392,7403,5392" shape="poly">
                        <area data="2-KhuKham-7"      full="Khu kham 7" href="#" coords="5879,5048,6923,5048,6965,5402,5869,5402" shape="poly">
                        <area data="2-KhuKham-8"      full="Khu kham 8" href="#" coords="3417,5037,3803,5048,3740,5580,3344,5569" shape="poly">
                        <area data="2-XN-1"      full="Khoa xet nghiem 1" href="#" coords="3448,1262,4158,1283,4001,2232,4711,2232,4680,2691,3073,2722" shape="poly">
                        <area data="2-XN-2"      full="Khoa xet nghiem 2" href="#" coords="4356,1210,4794,1199,4732,2086,4231,2075" shape="poly">
                        <area data="2-XN-3"      full="Khoa xet nghiem 3" href="#" coords="5817,3807,6745,3817,6777,4036,5817,4026" shape="poly">
                        <area data="2-LMXN"      full="Lay mau xet nghiem" href="#" coords="5817,3827,6766,3827,6787,4036,5817,4036" shape="poly">
                        <area data="2-LM"      full="Lay mau" href="#" coords="5827,3817,6756,3817,6777,4015,5827,4026" shape="poly">
                        <area data="2-TiemNgua-1"       full="Tiem ngua 1" href="#" coords="4440,4568,4940,4578,4940,4871,4419,4860" shape="poly">
                        <area data="2-TiemNgua-2"       full="Tiem ngua 2" href="#" coords="3803,5037,4773,5037,4773,5382,4367,5392,4346,5590,3730,5590" shape="poly">
                        <area data="2-NA"       full="Nhu anh" href="#" coords="3490,3150,3751,3139,3709,3483,3427,3473" shape="poly">
                        <area data="2-LX"       full="Loang xuong" href="#" coords="3198,3150,3469,3150,3448,3473,3125,3483" shape="poly">
                        <area data="2-SieuAm-1"       full="Sieu am" href="#" coords="3845,2712,4659,2701,4648,2972,3803,2993" shape="poly">
                        <area data="2-SieuAm-2"       full="Sieu am 2" href="#" coords="3751,3139,4627,3160,4606,3473,3730,3473" shape="poly">
                        <area data="2-XQ"       full="Xquang" href="#" coords="3062,2722,3845,2701,3803,2993,3000,2993" shape="poly">
                        <area data="2-DTT"       full="Do tim thai" href="#" coords="3407,5037,3772,5058,3740,5580,3313,5580" shape="poly">
                        <area data="2-SPK"       full="San phu khoa" href="#" coords="3594,4036,4095,4047,3970,4860,3469,4860" shape="poly">
                        <area data="2-KN"       full="Kham nhi" href="#" coords="4492,4036,4972,4036,4930,4568,4450,4558" shape="poly">
                        <area data="2-KhamNgoai"       full="Kham ngoai" href="#" coords="4982,4036,5462,4036,5462,4871,4940,4871" shape="poly">
                        <area data="2-KhamNoi-1"       full="Kham noi 1" href="#" coords="6307,4036,6766,4036,6902,4860,6370,4860" shape="poly">
                        <area data="2-KhamNoi-2"       full="Kham noi 2" href="#" coords="7163,4047,7632,4036,7820,4860,7319,4860" shape="poly">
                        <area data="2-KhamNha"       full="Kham nha" href="#" coords="7653,4036,8102,4026,8269,4568,7768,4568" shape="poly">
                        <area data="2-TMH"       full="Tai mui hong" href="#" coords="5827,4036,6307,4026,6359,4568,5859,4578" shape="poly">
                        <area data="2-DL"       full="Da lieu" href="#" coords="7757,4578,8269,4578,8331,4860,7810,4871" shape="poly">
                        <area data="2-KM"       full="Kham mat" href="#" coords="8561,4297,9114,4297,9302,4850,8738,4860" shape="poly">
                        <area data="2-KV"       full="Kham vip" href="#" coords="8477,4015,9030,4047,9103,4297,8571,4276" shape="poly">
                        <area data="2-DK"       full="Do kinh" href="#" coords="8717,5048,9354,5037,9489,5392,8801,5402" shape="poly">
                        <area data="2-DM"       full="Do mat" href="#" coords="8738,5048,9364,5048,9489,5402,8801,5382" shape="poly">
                        <area data="2-CK"       full="Cat kinh" href="#" coords="8310,5037,8676,5048,8801,5382,8436,5413" shape="poly">
                        <area data="2-VLTL-1"       full="Vat ly tri lieu 1" href="#" coords="7747,5058,8310,5027,8436,5392,7789,5392" shape="poly">
                        <area data="2-VLTL-2"       full="Vat ly tri lieu 2" href="#" coords="5879,4860,6359,4860,6359,4578,5859,4568" shape="poly">
                        <area data="2-DLZ"       full="Dot lazer" href="#" coords="7340,5048,7705,5037,7810,5392,7413,5392" shape="poly">
                        <area data="2-CSD"       full="Cham soc da" href="#" coords="6391,5048,6912,5037,6985,5392,6432,5402" shape="poly">
                        <area data="2-VD"       full="Van dong" href="#" coords="5869,5037,6380,5058,6412,5382,5890,5413" shape="poly">
                        <area data="2-DienTim"       full="Dien tim" href="#" coords="4711,2211,5149,2232,5118,2701,4669,2701" shape="poly">
                        <area data="2-ThuThuat"       full="Thu thuat" href="#" coords="4784,5037,5462,5037,5452,5392,4763,5392" shape="poly">
                        <area data="2-LocThan"       full="Loc than" href="#" coords="5379,1199,5921,1220,5952,1856,5379,1846" shape="poly">
                        <area data="2-NoiSoi-1"       full="Noi soi 1" href="#" coords="6046,1387,6485,1408,6547,1856,6078,1856" shape="poly">
                        <area data="2-NoiSoi-2"       full="Noi soi 2" href="#" coords="6714,1502,7038,1512,7131,1846,6756,1867" shape="poly">
                        <area data="2-ThangCuon"       full="Thang cuon" href="#" coords="8676,2326,9500,2326,9834,2993,8978,3014" shape="poly">
                        <area data="2-ThangBo-1"       full="Cau thang bo 1" href="#" coords="2520,3139,2968,3129,2770,3817,2301,3807" shape="poly">
                        <area data="2-ThangBo-2"       full="Cau thang bo 2" href="#" coords="3501,1064,4179,1064,4168,1262,3469,1252" shape="poly">
                        <area data="2-ThangBo-3"       full="Cau thang bo 3" href="#" coords="5504,2785,5932,2795,5963,3233,5514,3233" shape="poly">
                        <area data="2-ThangBo-4"       full="Cau thang bo 4" href="#" coords="7319,1752,8154,1721,8248,1961,7382,1982" shape="poly">
                        <area data="2-ThangBo-5"       full="Cau thang bo 5" href="#" coords="8133,2785,8550,2795,8707,3244,8279,3223" shape="poly">
                        <area data="2-NVS-1"       full="Nha ve sinh 1" href="#" coords="2791,3807,3626,3828,3553,4203,2666,4224" shape="poly">
                        <area data="2-NVS-2"       full="Nha ve sinh 2" href="#" coords="4763,1856,5003,1846,5003,1919,4742,1940" shape="poly">
                        <area data="2-NVS-3"       full="Nha ve sinh 3" href="#" coords="6693,1377,7006,1387,7038,1502,6714,1512" shape="poly">
                        <area data="2-NVS-4"       full="Nha ve sinh 4" href="#" coords="7257,1554,8091,1554,8175,1710,7330,1731" shape="poly">
                        <area data="2-ThangMay"       full="Thang may" href="#" coords="7382,1971,8050,1971,8091,2075,7424,2075" shape="poly">
                        <area data="2-ThuNgan-1"       full="Thu ngan 1" href="#" coords="7131,3828,8060,3828,8112,4015,7142,4026" shape="poly">
                        <area data="2-ThuNgan-2"       full="Thu ngan 2" href="#" coords="4513,3817,5441,3828,5452,4026,4481,4026" shape="poly">
                        <area data="2-WC-1"       full="Wc 1" href="#" coords="2770,3807,3636,3817,3563,4213,2666,4224" shape="poly">
                        <area data="2-WC-2"       full="Wc 2" href="#" coords="4773,1846,5013,1836,5024,1919,4753,1940" shape="poly">
                        <area data="2-WC-3"       full="Wc 3" href="#" coords="6693,1398,7006,1377,7048,1512,6693,1502" shape="poly">
                        <area data="2-WC-4"       full="Wc 4" href="#" coords="7278,1544,8102,1533,8164,1700,7309,1742" shape="poly">
                        <area data="2-Toilet-1"       full="Toilet 1" href="#" coords="2791,3817,3626,3807,3532,4203,2676,4203" shape="poly">
                        <area data="2-Toilet-2"       full="Toilet 2" href="#" coords="4753,1836,4993,1836,4982,1929,4742,1940" shape="poly">
                        <area data="2-Toilet-3"       full="Toilet 3" href="#" coords="6693,1387,7017,1387,7038,1502,6704,1502" shape="poly">
                        <area data="2-Toilet-4"       full="Toilet 4" href="#" coords="7278,1544,8091,1533,8164,1710,7309,1710" shape="poly">
                    </map>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<!-- Add start footer-->
<?php require("../footer.php");?>
<!-- Add end footer-->

<!-- Add start script active menu-->
<script type="text/javascript">
    selectorMenu("id6");
</script>
<script type="text/javascript">
function loadJsForMap(id){
    var img = $('#imageMap'+id);

    // get each unique value of attribute "state" from the areas;
    // sort them; then generate an unordered list from these values.
    // add an attribute "state='KY'" to each one to bind to the map
    // key
    
    var states = Array.prototype.map.call($('area'),
    function (e) {
        return e.getAttribute('data');
    });

    // bind selection of a state to the UL we created. The "listSelectedClass"
    // option causes the class "selected" to be added or removed
    // from the element in "boundList" whose "state" attribute has a value
    // matching the mapKey for the selected area.
    
    img.mapster({
        mapKey: 'data',
        singleSelect: true,
        scaleMap: true,
        render_highlight: {
            fill: false,
            stroke: true,
            strokeColor: 'ff0000',
            strokeWidth: 4,
        },
        render_select: {
            fill: false,
            stroke: true,
            strokeColor: 'ff0000',
            strokeWidth: 4,
        },
        onClick: function(e) {
        	if(e.selected){
        	    showTooltip(e);
        	}
        	else {
        	    $('div.mapTooltip').remove();
        	}
        },
        onShowToolTip: function(e) {
            var areaMapPosition = $('area[data="'+e.key+'"]').attr('coords').split(',');
            var len = areaMapPosition.length;
            var maxLValue = 0;  // Max left of area
            var maxTValue = 0;  // Max top of area
            var vectorX = new Array();
            var vectorY = new Array();
            for(var i = 0; i < len; i+=2){
                if(i == 0){
                    maxLValue = parseInt(areaMapPosition[i],10);
                    maxTValue = parseInt(areaMapPosition[i+1],10);
                }
                else {
                    if(parseInt(areaMapPosition[i],10) > maxLValue){
                        maxLValue = parseInt(areaMapPosition[i],10);
                        maxTValue = parseInt(areaMapPosition[i+1],10);
                    }
                }
                vectorX.push(parseInt(areaMapPosition[i],10));
                vectorY.push(parseInt(areaMapPosition[i+1],10));
            }
            
            if(IsPointInPolygon(len, vectorX, vectorY, maxLValue-10, maxTValue-5)){
                maxTValue = maxTValue - 5;
                maxLValue = maxLValue - 10;
            }
            else if(IsPointInPolygon(len, vectorX, vectorY, maxLValue-10, maxTValue+5)){
                maxTValue = maxTValue + 5;
                maxLValue = maxLValue - 10;
            }
            else if(IsPointInPolygon(len, vectorX, vectorY, maxLValue+10, maxTValue-5)){
                maxTValue = maxTValue - 5;
                maxLValue = maxLValue + 10;
            }
            else if(IsPointInPolygon(len, vectorX, vectorY, maxLValue+10, maxTValue+5)){
                maxTValue = maxTValue + 5;
                maxLValue = maxLValue + 10;
            }
            var topTooltip = maxTValue;
            var leftTooltip = maxLValue;
            $('div.mapTooltip').remove();
            $('.mapster_tooltip').remove();
            $('<div class="mapTooltip"><img src="../images/floor/SelectedPoint.png" width="50"></div>').appendTo('#map_content');
            $('div.mapTooltip').css({
                top: topTooltip + 34 - 80 +"px",
                left: leftTooltip + 15 - 25 + "px"
            });
        },
        listKey: 'data',
        listSelectedClass: 'selected',
        showToolTip: true,
        toolTipClose: ["area-click"]
    });
}
$(document).ready(function () {
    var idMap = 1;
    while(idMap <= 6){
        loadJsForMap(idMap);
        $('#floor'+idMap).addClass('hide');
        idMap++;
    }
});
</script>