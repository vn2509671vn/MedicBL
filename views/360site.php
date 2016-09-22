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
                    <div id="grid-load">
                    </div>
                    <div id="floor">
                        <img src="../images/floor/tang1.jpg" usemap="#map1" width="100%" data-id="1" id="imageMap0">
                    </div>
                    <!--<div id="floor1">-->
                    <!--    <img src="../images/floor/tang1.jpg" usemap="#mapOne" width="100%" data-id="1" id="imageMap1">-->
                    <!--</div>-->
                    <!--<div id="floor2">-->
                    <!--    <img src="../images/floor/tang2.jpg" usemap="#mapTwo" width="100%" data-id="2" id="imageMap2">-->
                    <!--</div>-->
                    <!--<div id="floor3">-->
                    <!--    <img src="../images/floor/tang3.jpg" usemap="#mapThree" width="100%" data-id="3" id="imageMap3">-->
                    <!--</div>-->
                    <!--<div id="floor4">-->
                    <!--    <img src="../images/floor/tang4.jpg" usemap="#mapFour" width="100%" data-id="4" id="imageMap4">-->
                    <!--</div>-->
                    <!--<div id="floor5">-->
                    <!--    <img src="../images/floor/tang5.jpg" usemap="#mapFive" width="100%" data-id="5" id="imageMap5">-->
                    <!--</div>-->
                    <!--<div id="floor6">-->
                    <!--    <img src="../images/floor/tang6.jpg" usemap="#mapSix" width="100%" data-id="6" id="imageMap6">-->
                    <!--</div>-->
                    
                    <map name="map1">
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
                    <map name="map2">
                        <area data="2-KhuKham"      full="Khu kham 1" href="#" coords="3636,3807,4106,3817,3991,4860,3459,4871" shape="poly">
                        <area data="2-KhuKham"      full="Khu kham 2" href="#" coords="5452,4036,5452,4860,4951,4860,4930,4568,4440,4558,4502,4047" shape="poly">
                        <area data="2-KhuKham"      full="Khu kham 3" href="#" coords="5807,4043,6767,4033,6892,4867,5849,4888" shape="poly">
                        <area data="2-KhuKham"      full="Khu kham 4" href="#" coords="7163,4036,8112,4036,8342,4850,7309,4860" shape="poly">
                        <area data="2-KhuKham"      full="Khu kham 5" href="#" coords="8425,3818,8937,3818,9323,4861,8759,4872" shape="poly">
                        <area data="2-KhuKham"      full="Khu kham 6" href="#" coords="7361,5048,9375,5027,9510,5392,7403,5392" shape="poly">
                        <area data="2-KhuKham"      full="Khu kham 7" href="#" coords="5879,5048,6923,5048,6965,5402,5869,5402" shape="poly">
                        <area data="2-KhuKham"      full="Khu kham 8" href="#" coords="3417,5037,3803,5048,3740,5580,3344,5569" shape="poly">
                        <area data="2-XN"      full="Khoa xet nghiem 1" href="#" coords="3448,1262,4158,1283,4001,2232,4711,2232,4680,2691,3073,2722" shape="poly">
                        <area data="2-XN"      full="Khoa xet nghiem 2" href="#" coords="4356,1210,4794,1199,4732,2086,4231,2075" shape="poly">
                        <area data="2-XN"      full="Khoa xet nghiem 3" href="#" coords="5817,3807,6745,3817,6777,4036,5817,4026" shape="poly">
                        <area data="2-LMXN"      full="Lay mau xet nghiem" href="#" coords="5817,3827,6766,3827,6787,4036,5817,4036" shape="poly">
                        <area data="2-LM"      full="Lay mau" href="#" coords="5827,3817,6756,3817,6777,4015,5827,4026" shape="poly">
                        <area data="2-TiemNgua"       full="Tiem ngua 1" href="#" coords="4440,4568,4940,4578,4940,4871,4419,4860" shape="poly">
                        <area data="2-TiemNgua"       full="Tiem ngua 2" href="#" coords="3803,5037,4773,5037,4773,5382,4367,5392,4346,5590,3730,5590" shape="poly">
                        <area data="2-NA"       full="Nhu anh" href="#" coords="3490,3150,3751,3139,3709,3483,3427,3473" shape="poly">
                        <area data="2-LX"       full="Loang xuong" href="#" coords="3198,3150,3469,3150,3448,3473,3125,3483" shape="poly">
                        <area data="2-SieuAm"       full="Sieu am" href="#" coords="3845,2712,4659,2701,4648,2972,3803,2993" shape="poly">
                        <area data="2-SieuAm"       full="Sieu am 2" href="#" coords="3751,3139,4627,3160,4606,3473,3730,3473" shape="poly">
                        <area data="2-XQ"       full="Xquang" href="#" coords="3062,2722,3845,2701,3803,2993,3000,2993" shape="poly">
                        <area data="2-DTT"       full="Do tim thai" href="#" coords="3407,5037,3772,5058,3740,5580,3313,5580" shape="poly">
                        <area data="2-SPK"       full="San phu khoa" href="#" coords="3594,4036,4095,4047,3970,4860,3469,4860" shape="poly">
                        <area data="2-KN"       full="Kham nhi" href="#" coords="4492,4036,4972,4036,4930,4568,4450,4558" shape="poly">
                        <area data="2-KhamNgoai"       full="Kham ngoai" href="#" coords="4982,4036,5462,4036,5462,4871,4940,4871" shape="poly">
                        <area data="2-KhamNoi"       full="Kham noi 1" href="#" coords="6307,4036,6766,4036,6902,4860,6370,4860" shape="poly">
                        <area data="2-KhamNoi"       full="Kham noi 2" href="#" coords="7163,4047,7632,4036,7820,4860,7319,4860" shape="poly">
                        <area data="2-KhamNha"       full="Kham nha" href="#" coords="7653,4036,8102,4026,8269,4568,7768,4568" shape="poly">
                        <area data="2-TMH"       full="Tai mui hong" href="#" coords="5827,4036,6307,4026,6359,4568,5859,4578" shape="poly">
                        <area data="2-DL"       full="Da lieu" href="#" coords="7757,4578,8269,4578,8331,4860,7810,4871" shape="poly">
                        <area data="2-KM"       full="Kham mat" href="#" coords="8561,4297,9114,4297,9302,4850,8738,4860" shape="poly">
                        <area data="2-KV"       full="Kham vip" href="#" coords="8477,4015,9030,4047,9103,4297,8571,4276" shape="poly">
                        <area data="2-DK"       full="Do kinh" href="#" coords="8717,5048,9354,5037,9489,5392,8801,5402" shape="poly">
                        <area data="2-DM"       full="Do mat" href="#" coords="8738,5048,9364,5048,9489,5402,8801,5382" shape="poly">
                        <area data="2-CK"       full="Cat kinh" href="#" coords="8310,5037,8676,5048,8801,5382,8436,5413" shape="poly">
                        <area data="2-VLTL"       full="Vat ly tri lieu 1" href="#" coords="7747,5058,8310,5027,8436,5392,7789,5392" shape="poly">
                        <area data="2-VLTL"       full="Vat ly tri lieu 2" href="#" coords="5879,4860,6359,4860,6359,4578,5859,4568" shape="poly">
                        <area data="2-DLZ"       full="Dot lazer" href="#" coords="7340,5048,7705,5037,7810,5392,7413,5392" shape="poly">
                        <area data="2-CSD"       full="Cham soc da" href="#" coords="6391,5048,6912,5037,6985,5392,6432,5402" shape="poly">
                        <area data="2-VD"       full="Van dong" href="#" coords="5869,5037,6380,5058,6412,5382,5890,5413" shape="poly">
                        <area data="2-DienTim"       full="Dien tim" href="#" coords="4711,2211,5149,2232,5118,2701,4669,2701" shape="poly">
                        <area data="2-ThuThuat"       full="Thu thuat" href="#" coords="4784,5037,5462,5037,5452,5392,4763,5392" shape="poly">
                        <area data="2-LocThan"       full="Loc than" href="#" coords="5379,1199,5921,1220,5952,1856,5379,1846" shape="poly">
                        <area data="2-NoiSoi"       full="Noi soi 1" href="#" coords="6046,1387,6485,1408,6547,1856,6078,1856" shape="poly">
                        <area data="2-NoiSoi"       full="Noi soi 2" href="#" coords="6714,1502,7038,1512,7131,1846,6756,1867" shape="poly">
                        <area data="2-ThangCuon"       full="Thang cuon" href="#" coords="8676,2326,9500,2326,9834,2993,8978,3014" shape="poly">
                        <area data="2-ThangBo"       full="Cau thang bo 1" href="#" coords="2520,3139,2968,3129,2770,3817,2301,3807" shape="poly">
                        <area data="2-ThangBo"       full="Cau thang bo 2" href="#" coords="3501,1064,4179,1064,4168,1262,3469,1252" shape="poly">
                        <area data="2-ThangBo"       full="Cau thang bo 3" href="#" coords="5504,2785,5932,2795,5963,3233,5514,3233" shape="poly">
                        <area data="2-ThangBo"       full="Cau thang bo 4" href="#" coords="7319,1752,8154,1721,8248,1961,7382,1982" shape="poly">
                        <area data="2-ThangBo"       full="Cau thang bo 5" href="#" coords="8133,2785,8550,2795,8707,3244,8279,3223" shape="poly">
                        <area data="2-NVS"       full="Nha ve sinh 1" href="#" coords="2791,3807,3626,3828,3553,4203,2666,4224" shape="poly">
                        <area data="2-NVS"       full="Nha ve sinh 2" href="#" coords="4763,1856,5003,1846,5003,1919,4742,1940" shape="poly">
                        <area data="2-NVS"       full="Nha ve sinh 3" href="#" coords="6693,1377,7006,1387,7038,1502,6714,1512" shape="poly">
                        <area data="2-NVS"       full="Nha ve sinh 4" href="#" coords="7257,1554,8091,1554,8175,1710,7330,1731" shape="poly">
                        <area data="2-ThangMay"       full="Thang may" href="#" coords="7382,1971,8050,1971,8091,2075,7424,2075" shape="poly">
                        <area data="2-ThuNgan"       full="Thu ngan 1" href="#" coords="7131,3828,8060,3828,8112,4015,7142,4026" shape="poly">
                        <area data="2-ThuNgan"       full="Thu ngan 2" href="#" coords="4513,3817,5441,3828,5452,4026,4481,4026" shape="poly">
                        <area data="2-WC"       full="Wc 1" href="#" coords="2770,3807,3636,3817,3563,4213,2666,4224" shape="poly">
                        <area data="2-WC"       full="Wc 2" href="#" coords="4773,1846,5013,1836,5024,1919,4753,1940" shape="poly">
                        <area data="2-WC"       full="Wc 3" href="#" coords="6693,1398,7006,1377,7048,1512,6693,1502" shape="poly">
                        <area data="2-WC"       full="Wc 4" href="#" coords="7278,1544,8102,1533,8164,1700,7309,1742" shape="poly">
                        <area data="2-Toilet"       full="Toilet 1" href="#" coords="2791,3817,3626,3807,3532,4203,2676,4203" shape="poly">
                        <area data="2-Toilet"       full="Toilet 2" href="#" coords="4753,1836,4993,1836,4982,1929,4742,1940" shape="poly">
                        <area data="2-Toilet"       full="Toilet 3" href="#" coords="6693,1387,7017,1387,7038,1502,6704,1502" shape="poly">
                        <area data="2-Toilet"       full="Toilet 4" href="#" coords="7278,1544,8091,1533,8164,1710,7309,1710" shape="poly">
                    </map>
                    <map name="map3">
                        <area data="3-KPT" full="Khoa phau thuat gay me hoi suc" href="#" coords="3458,5079,3458,4933,3657,4829,6046,4818,6088,5611,2927,5611,2864,5809,1893,5809,2112,5089" shape="poly">
                        <area data="3-KPT" full="Khoa phau thuat gay me hoi suc 2" href="#" coords="3020,4701,2905,5107,2123,5098,2958,2228,4356,2240,4210,3334,3458,3325,3145,4733" shape="poly">
                        <area data="3-KPT" full="Khoa phau thuat gay me hoi suc 3" href="#" coords="3751,3327,3667,3682,3782,3786,3980,3786,4147,3661,4200,3337" shape="poly">
                        <area data="3-KPT" full="Khoa phau thuat gay me hoi suc 4" href="#" coords="4846,3977,4867,3873,6015,3883,5973,3591,4481,3581,4408,3998,3740,3998,3636,4050,3563,4436,3720,4551,6036,4561,6005,3988" shape="poly">
                        <area data="3-KPT" full="Khoa phau thuat gay me hoi suc 5" href="#" coords="5368,1055,6860,1034,7006,1993,5587,2004,5576,1701,5347,1722" shape="poly">
                        <area data="3-KPT" full="Khoa phau thuat gay me hoi suc 6" href="#" coords="4627,2023,4878,2034,4784,3379,4492,3379" shape="poly">
                        <area data="3-PM" full="Phong mo" href="#" coords="2624,3317,3407,3337,3104,4725,3010,4704,2895,5079,3031,5090,2864,5820,1904,5820" shape="poly">
                        <area data="3-PM" full="Phong mo 2" href="#" coords="4116,3963,6015,3963,6036,4516,4022,4547" shape="poly">
                        <area data="3-PM" full="Phong mo 3" href="#" coords="3980,4818,6046,4829,6078,5611,3907,5590" shape="poly">
                        <area data="3-HSN" full="Hoi suc noi" href="#" coords="5369,1065,6850,1063,6996,2002,5608,2012,5567,1743,5358,1731" shape="poly">
                        <area data="3-HSNg" full="Hoi suc ngoai" href="#" coords="2958,2242,4367,2232,4200,3317,2644,3313" shape="poly">
                        <area data="3-CTB" full="Cau thang bo" href="#" coords="1904,3306,2374,3327,2123,4078,1612,4088" shape="poly">
                        <area data="3-CTB" full="Cau thang bo 2" href="#" coords="3135,897,3866,897,3834,1095,3083,1116" shape="poly">
                        <area data="3-CTB" full="Cau thang bo 3" href="#" coords="5201,2805,5639,2816,5670,3292,5180,3296" shape="poly">
                        <area data="3-CTB" full="Cau thang bo 4" href="#" coords="7205,1637,8102,1637,8196,1898,7267,1898" shape="poly">
                        <area data="3-CTB" full="Cau thang bo 5" href="#" coords="8060,2805,8509,2795,8634,3296,8164,3306" shape="poly">
                        <area data="3-TC" full="Thang cuon" href="#" coords="8644,2284,9542,2274,9876,3045,8916,3035" shape="poly">
                        <area data="3-TM" full="Thang may" href="#" coords="7246,1909,7997,1898,8018,2002,7278,2013" shape="poly">
                        <area data="3-NVS" full="Nha ve sinh" href="#" coords="7163,1432,8050,1421,8112,1640,7194,1630" shape="poly">
                        <area data="3-NVS" full="Nha ve sinh 2" href="#" coords="5149,1063,5337,1063,5368,1303,5128,1303" shape="poly">
                        <area data="3-NVS" full="Nha ve sinh 3" href="#" coords="4064,1418,4481,1429,4429,1721,4022,1710" shape="poly">
                        <area data="3-HCVP" full="Hanh chinh van phong" href="#" coords="6192,3556,7820,3556,8331,5830,6339,5799" shape="poly">
                        <area data="3-HCVP" full="Hanh chinh van phong 2" href="#" coords="8060,3567,8749,3556,8978,4286,8248,4307" shape="poly">
                        <area data="3-HCVP" full="Hanh chinh van phong 3" href="#" coords="8258,4401,9010,4380,9458,5799,8603,5809" shape="poly">
                        <area data="3-NVS" full="Wc" href="#" coords="7184,1617,8102,1627,8029,1429,7163,1408" shape="poly">
                        <area data="3-NVS" full="Wc 2" href="#" coords="5139,1053,5326,1053,5337,1272,5149,1283" shape="poly">
                        <area data="3-NVS" full="Wc 3" href="#" coords="4064,1418,4460,1418,4419,1721,4022,1731" shape="poly">
                        <area data="3-SCTN" full="Sanh cho than nhan" href="#" coords="4920,1721,5577,1742,5577,2023,4909,2013" shape="poly">
                        <area data="3-NVS" full="Toilet" href="#" coords="4064,1408,4450,1429,4429,1710,4022,1710" shape="poly">
                        <area data="3-NVS" full="Toilet 2" href="#" coords="5149,1033,5358,1043,5347,1293,5139,1304" shape="poly">
                        <area data="3-NVS" full="Toilet 3" href="#" coords="7152,1429,8039,1429,8102,1596,7184,1648" shape="poly">
                        <area data="3-HCVP" full="Ban giam doc" href="#" coords="8050,3577,8770,3577,8968,4307,8248,4318" shape="poly">
                    </map>
                    <map name="map4">
                        <area data="4-NVS" full="Nha ve sinh" href="#" coords="3970,1899,4314,1899,4293,2191,3949,2191" shape="poly">
                        <area data="4-NVS" full="Nha ve sinh 2" href="#" coords="1769,4653,2635,4643,2509,5321,1664,5332" shape="poly">
                        <area data="4-NVS" full="Wc" href="#" coords="3970,1899,4304,1909,4304,2191,3939,2170" shape="poly">
                        <area data="4-NVS" full="Wc 2" href="#" coords="1779,4643,2635,4653,2520,5321,1654,5332" shape="poly">
                        <area data="4-NVS" full="Toilet" href="#" coords="3960,1899,4314,1909,4293,2191,3939,2191" shape="poly">
                        <area data="4-NVS" full="Toilet 2" href="#" coords="1779,4653,2624,4643,2520,5332,1664,5321" shape="poly">
                        <area data="4-TM" full="Thang may" href="#" coords="7403,2671,8279,2671,8300,2869,7413,2848" shape="poly">
                        <area data="4-CTB" full="Cau thang bo" href="#" coords="8217,4100,8759,4090,8874,4852,8321,4841" shape="poly">
                        <area data="4-CTB" full="Cau thang bo 2" href="#" coords="4878,4090,5410,4111,5399,4841,4846,4841" shape="poly">
                        <area data="4-CTB" full="Cau thang bo 3" href="#" coords="1236,4789,1758,4789,1529,5906,965,5906" shape="poly">
                        <area data="4-CTB" full="Cau thang bo 4" href="#" coords="2509,1033,3386,1043,3334,1398,2447,1409" shape="poly">
                        <area data="4-CTB" full="Cau thang bo 5" href="#" coords="7361,2233,8457,2243,8530,2702,7413,2671" shape="poly">
                        <area data="4-HT" full="Hoi truong" href="#" coords="3678,4007,4878,4028,4836,4873,5055,4894,4961,7252,1675,7252,1831,6396,2322,6396,2415,5854,2614,5864,2739,4915,3594,4925" shape="poly">
                        <area data="4-PS" full="Phong sanh" href="#" coords="2342,1909,2937,1909,2488,4643,1789,4643" shape="poly">
                        <area data="4-PS" full="Phong sanh 2" href="#" coords="2874,4007,3688,3996,3626,4476,2822,4476" shape="poly">
                        <area data="4-PSM" full="Phong sanh mo" href="#" coords="3104,3443,4909,3433,4888,4027,3021,3996" shape="poly">
                        <area data="4-PTS" full="Phong tien san" href="#" coords="3427,2410,4064,2400,4012,3015,3354,3005" shape="poly">
                        <area data="4-PHSS" full="Phong hoi suc san" href="#" coords="4074,2410,4951,2400,4920,3193,4001,3193" shape="poly">
                        <area data="4-PDN" full="Phong duong nhi" href="#" coords="5765,2410,6641,2410,6683,3172,5775,3182" shape="poly">
                        <area data="4-PTS" full="Phong cho sanh" href="#" coords="3427,2421,4074,2410,4022,3015,3344,3005" shape="poly">
                        <area data="4-KS" full="Khoa san" href="#" coords="3177,1909,3970,1909,3939,2181,3146,2181" shape="poly">
                        <area data="4-KS" full="Khoa san 2" href="#" coords="4304,1909,6933,1909,6954,2202,4283,2181" shape="poly">
                        <area data="4-KS" full="Khoa san 3" href="#" coords="3104,2400,7079,2400,7142,3182,4001,3182,4012,3015,3021,3005" shape="poly">
                        <area data="4-KS" full="Khoa san 4" href="#" coords="3104,3422,4909,3433,4878,4038,3688,4027,3594,4925,2749,4925,2874,3996,3031,3996" shape="poly">
                        <area data="4-KS" full="Khoa san 5" href="#" coords="2332,1909,2916,1920,2488,4643,1779,4643" shape="poly">
                    </map>
                    <map name="map5">
                        <area data="5-NVS" full="Nha ve sinh" href="#" coords="7691,1570,8920,1553,9060,1728,7796,1737" shape="poly">
                        <area data="5-NVS" full="WC" href="#" coords="7709,1571,8929,1571,9086,1755,7814,1746" shape="poly">
                        <area data="5-NVS" full="Toilet" href="#" coords="7700,1570,8928,1544,9060,1737,7796,1755" shape="poly">
                        <area data="5-CTB" full="Cau thang bo" href="#" coords="7796,1737,9060,1737,9253,1992,7928,1974" shape="poly">
                        <area data="5-CTB" full="Cau thang bo 2" href="#" coords="2347,1097,3251,1105,3164,1298,2216,1281" shape="poly">
                        <area data="5-TM" full="Thang may" href="#" coords="7928,1983,8981,1983,9069,2106,8016,2123" shape="poly">
                        <area data="5-TT" full="Thu thuat" href="#" coords="3751,1553,4286,1553,4251,1720,3699,1702" shape="poly">
                        <area data="5-PCSDB" full="Phong cham soc dac biet" href="#" coords="7042,1842,7533,1842,7770,2325,7217,2316" shape="poly">
                        <area data="5-5001" full="Phong 5001" href="#" coords="6524,1851,7042,1842,7217,2307,6647,2307" shape="poly">
                        <area data="5-5003" full="Phong 5003" href="#" coords="6006,1843,6515,1843,6647,2334,6094,2316" shape="poly">
                        <area data="5-5005" full="Phong 5005" href="#" coords="5497,1834,6006,1834,6085,2316,5532,2316" shape="poly">
                        <area data="5-5007" full="Phong 5007" href="#" coords="4988,1842,5497,1842,5541,2316,4980,2307" shape="poly">
                        <area data="5-5009" full="Phong 5009" href="#" coords="4462,1842,4980,1851,4971,2307,4409,2307" shape="poly">
                        <area data="5-5011" full="Phong 5011" href="#" coords="3962,1842,4462,1842,4401,2316,3856,2316" shape="poly">
                        <area data="5-5013" full="Phong 5013" href="#" coords="3453,1842,3962,1842,3856,2316,3295,2316" shape="poly">
                        <area data="5-5015" full="Phong 5015" href="#" coords="2926,1851,3470,1851,3286,2325,2716,2325" shape="poly">
                        <area data="5-5017" full="Phong 5017" href="#" coords="2137,1842,2926,1851,2716,2316,1847,2334" shape="poly">
                        <area data="5-5018" full="Phong 5018" href="#" coords="2207,1281,2953,1281,2742,1728,1917,1711" shape="poly">
                        <area data="5-5016" full="Phong 5016" href="#" coords="3242,1114,3690,1105,3567,1448,3076,1456" shape="poly">
                        <area data="5-5014" full="Phong 5014" href="#" coords="3681,1105,4120,1105,4032,1456,3567,1439" shape="poly">
                        <area data="5-5012" full="Phong 5012" href="#" coords="4120,1105,4558,1105,4506,1448,4041,1448" shape="poly">
                        <area data="5-5010" full="Phong 5010" href="#" coords="4550,1114,4997,1114,4988,1439,4515,1448" shape="poly">
                        <area data="5-5008" full="Phong 5008" href="#" coords="4980,1114,5445,1114,5453,1439,4997,1439" shape="poly">
                        <area data="5-5006" full="Phong 5006" href="#" coords="5453,1105,5875,1105,5936,1448,5462,1456" shape="poly">
                        <area data="5-5004" full="Phong 5004" href="#" coords="5866,1114,6322,1114,6410,1439,5927,1448" shape="poly">
                        <area data="5-5002" full="Phong 5002" href="#" coords="6322,1114,7182,1114,7331,1439,6419,1439" shape="poly">
                        <area data="5-PB" full="Phong benh" href="#" coords="2145,1851,7516,1834,7770,2316,1856,2325" shape="poly">
                        <area data="5-PB" full="Phong benh 2" href="#" coords="3242,1105,7173,1105,7340,1448,3084,1448" shape="poly">
                        <area data="5-PB" full="Phong benh 3" href="#" coords="2207,1290,2944,1298,2733,1720,1909,1711" shape="poly">
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
            var titleArea = $('area[data="'+e.key+'"]').attr('full');
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
            $('<div class="mapTooltip"><img src="../images/floor/SelectedPoint.png" width="50" class="pull-left"><a class="txtTooltip" href="../_html5/Project1.html" target="_blank">'+titleArea+'</a></div>').appendTo('#map_content');
            $('div.mapTooltip').css({
                top: topTooltip + 34 - 80 +"px",
                left: leftTooltip + 15 - 25 + "px"
            });
            
            // $('.popup-with-zoom-anim').magnificPopup({
            //       type: 'inline',
        
            //       fixedContentPos: false,
            //       fixedBgPos: true,
        
            //       overflowY: 'auto',
        
            //       closeBtnInside: true,
            //       preloader: false,
                  
            //       midClick: true,
            //       removalDelay: 300,
            //       mainClass: 'my-mfp-zoom-in'
            // });
    
        },
        listKey: 'data',
        listSelectedClass: 'selected',
        showToolTip: true,
        toolTipClose: ["area-click"]
    });
}
$(document).ready(function () {
    // var idMap = 1;
    // while(idMap <= 6){
    //     loadJsForMap(idMap);
    //     $('#floor'+idMap).addClass('hide');
    //     idMap++;
    // }
    loadJsForMap(0);
    
        
    $('.popup-with-zoom-anim').click(function(){
       console.log("Click"); 
    });
});
</script>