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
                <div class="col-md-12">
                    <input type="text" name="currency" class="form-control" id="autocomplete" placeholder="Nhập tên phòng">
                    <ul id='boundList'></ul>
                    <div style="clear:both;"></div>
                    <img src="../images/floor/tang1.jpg" usemap="#tang1" width="100%">
                    <map name="tang1" id="floor1">
                        <area data="1-KCC" full="Tang 1 - Khoa Cap Cuu" href="#" coords="374,784,207,784,460,360,875,358,868,421,900,418,883,503,973,511,963,543,813,543,798,581,597,576,557,661,424,663,412,706" shape="poly">
                        <area data="1-KCC" full="Tang 1 - Khoa Cap Cuu" href="#" coords="795,581,707,891,888,899,885,951,587,956,607,886,419,889,460,796,485,791,497,766,485,748,465,746,387,746,414,706,677,708,718,583" shape="poly">
                        <area data="1-WC" full="Tang 1 - WC" href="#" coords="367,789,287,949,106,946,199,784" shape="poly">
                        <area data="1-WC" full="Tang 1 - WC" href="#" coords="1614,230,1622,265,1860,268,1842,230" shape="poly">
                    	<area data="1-DT" full="Tang 1 - Dien Tim" href="#" coords="592,576,575,623,702,621,715,581" shape="poly">
                        <area data="1-SA" full="Tang 1 - Sieu Am" href="#" coords="570,623,550,661,685,663,700,626" shape="poly">
                        <area data="1-TN" full="Tang 1 - Thu ngan" href="#" coords="555,661,537,701,675,701,685,666" shape="poly">
                        <area data="1-TN" full="Tang 1 - Thu Ngan" href="#" coords="1534,711,1559,881,1772,884,1727,706" shape="poly">
                    	<area data="1-NT" full="Tang 1 - Nha thuoc" href="#" coords="427,663,414,701,532,706,550,663" shape="poly">
                        <area data="1-TTBB" full="Tang 1 - Thu Thuat Bo Bot" href="#" coords="808,548,755,721,925,723,965,546" shape="poly">
                        <area data="1-XQ" full="Tang 1 - X-Quang" href="#" coords="758,721,740,786,915,786,928,728" shape="poly">
                        <area data="1-XQ" full="Tang 1 - X-Quang" href="#" coords="1091,173,1081,230,1216,235,1218,175" shape="poly">
                        <area data="1-CTS" full="Tang 1 - CT Scaner" href="#" coords="738,786,707,894,893,896,915,784" shape="poly">
                        <area data="1-CTS" full="Tang 1 - CT Scaner" href="#" coords="1083,233,1068,335,1211,338,1216,235" shape="poly">
                        <area data="1-DSA" full="Tang 1 - DSA" href="#" coords="918,781,890,951,1163,949,1173,784" shape="poly">
                        <area data="1-MRI" full="Tang 1 - MRI" href="#" coords="1268,170,1271,295,1562,295,1536,168" shape="poly">
                        <area data="1-NTBHYT" full="Tang 1 - Nha Thuoc BHYT" href="#" coords="1511,581,1529,708,1722,706,1694,583" shape="poly">
                        <area data="1-CTB" full="Tang 1 - Cau Thang Bo" href="#" coords="242,516,162,643,282,643,352,518" shape="poly">
                        <area data="1-CTB" full="Tang 1 - Cau Thang Bo" href="#" coords="572,145,552,183,735,183,755,150" shape="poly">
                        <area data="1-CTB" full="Tang 1 - Cau Thang Bo" href="#" coords="1078,461,1201,463,1196,541,1073,546" shape="poly">
                        <area data="1-CTB" full="Tang 1 - Cau Thang Bo" href="#" coords="1824,463,1850,541,1987,546,1952,461" shape="poly">
                        <area data="1-CTB" full="Tang 1 - Cau Thang Bo" href="#" coords="1624,268,1629,303,1877,310,1865,268" shape="poly">
                        <area data="1-TC" full="Tang 1 - Thang Cuon" href="#" coords="1997,375,2060,501,2310,501,2228,373" shape="poly">
                        <area data="1-TM" full="Tang 1 - Thang May" href="#" coords="1637,308,1637,333,1834,330,1827,305" shape="poly">
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
$(document).ready(function () {
    var img = $('img');

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
            fillColor: 'a5780c',
            stroke: true,
        },
        render_select: {
            fillColor: 'a5780c',
            stroke: false,
        },
        areas: [
                // { key: "TX",
                //     toolTip: $('<div>Don\'t mess with Texas. Why? <a href="http://dontmesswithtexas.org/" target="_blank">Click here</a> for more info.</div>')

                // },
                // { key: "ME",
                //     toolTip: $('<div style="margin:auto; width:100px;"><img src="images/lobster-small.gif"/></div><div style="clear:both;"></div><p>Trees, ocean, lobsters, it\'s all here.</p>'),
                //     selected: false

                // },
                { key: "1-TC",
                    toolTip: $('<div>Thang máy <a href="#">Click here</a> for more info.</div>'),
                    selected: false
                }
                ],
        listKey: 'data',
        listSelectedClass: 'selected',
        showToolTip: true,
        toolTipClose: ["area-mouseout"]
    });
    
    // bind click event 
    // $(document).on('click','#boundList li',function(e) {
       
    //     var el = $(e.target);
    //     img.mapster('set',null,el.attr('data')); 
       
    // });
});
</script>