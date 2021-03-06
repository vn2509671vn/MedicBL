$(function(){
  var currencies = [
    { value: 'Tầng 1 - Khoa Cấp Cứu', data: '1-KCC' },
    { value: 'Tầng 1 - Nhà vệ sinh', data: '1-WC' },
    { value: 'Tầng 1 - WC', data: '1-WC' },
    { value: 'Tầng 1 - Toilet', data: '1-WC' },
    { value: 'Tầng 1 - Điện Tim', data: '1-DT' },
    { value: 'Tầng 1 - Siêu Âm', data: '1-SA' },
    { value: 'Tầng 1 - Thu Ngân', data: '1-TN' },
    { value: 'Tầng 1 - Nhà Thuốc', data: '1-NT' },
    { value: 'Tầng 1 - Thủ Thuật Bó Bột', data: '1-TTBB' },
    { value: 'Tầng 1 - X-Quang', data: '1-XQ' },
    { value: 'Tầng 1 - CT Scaner', data: '1-CTS' },
    { value: 'Tầng 1 - DSA', data: '1-DSA' },
    { value: 'Tầng 1 - MRI', data: '1-MRI' },
    { value: 'Tầng 1 - Nhà Thuốc Bảo Hiểm Y Tế', data: '1-NTBHYT' },
    { value: 'Tầng 1 - Cầu Thang Bộ', data: '1-CTB' },
    { value: 'Tầng 1 - Thang Cuốn', data: '1-TC' },
    { value: 'Tầng 1 - Thang Máy', data: '1-TM' },
    
    { value: 'Tầng 2 - Khoa Xét Nghiệm', data: '2-XN' },
    { value: 'Tầng 2 - Lấy Mẫu Xét Nghiệm', data: '2-LMXN' },
    { value: 'Tầng 2 - Lấy Máu', data: '2-LM' },
    { value: 'Tầng 2 - Tiêm Ngừa', data: '2-TiemNgua' },
    { value: 'Tầng 2 - Khu Khám', data: '2-KhuKham' },
    { value: 'Tầng 2 - Siêu Âm', data: '2-SieuAm' },
    { value: 'Tầng 2 - X-Quang 1', data: '2-XQ' },
    { value: 'Tầng 2 - Loãng Xương', data: '2-LX' },
    { value: 'Tầng 2 - Nhũ Ảnh', data: '2-NA' },
    { value: 'Tầng 2 - Đo Tim Thai', data: '2-DTT' },
    { value: 'Tầng 2 - Sản Phụ Khoa', data: '2-SPK' },
    { value: 'Tầng 2 - Khám Nhi', data: '2-KN' },
    { value: 'Tầng 2 - Khám Ngoại', data: '2-KhamNgoai' },
    { value: 'Tầng 2 - Khám Nội', data: '2-KhamNoi' },
    { value: 'Tầng 2 - Khám Nha', data: '2-KhamNha' },
    { value: 'Tầng 2 - Tai Mũi Họng', data: '2-TMH' },
    { value: 'Tầng 2 - Da Liễu', data: '2-DL' },
    { value: 'Tầng 2 - Khám Mắt', data: '2-KM' },
    { value: 'Tầng 2 - Khám Vip', data: '2-KV' },
    { value: 'Tầng 2 - Đo Kính', data: '2-DK' },
    { value: 'Tầng 2 - Đo Mắt', data: '2-DM' },
    { value: 'Tầng 2 - Cắt Kính', data: '2-CK' },
    { value: 'Tầng 2 - Vật Lý Trị Liệu', data: '2-VLTL' },
    { value: 'Tầng 2 - Đốt Lazer', data: '2-DLZ' },
    { value: 'Tầng 2 - Chăm Sóc Da', data: '2-CSD' },
    { value: 'Tầng 2 - Vận Động', data: '2-VD' },
    { value: 'Tầng 2 - Thủ Thuật', data: '2-ThuThuat' },
    { value: 'Tầng 2 - Điện Tim', data: '2-DienTim' },
    { value: 'Tầng 2 - Lọc Thận', data: '2-LocThan' },
    { value: 'Tầng 2 - Nội Soi', data: '2-NoiSoi' },
    { value: 'Tầng 2 - Thu Ngân', data: '2-ThuNgan' },
    { value: 'Tầng 2 - Cầu Thang Bộ', data: '2-ThangBo' },
    { value: 'Tầng 2 - Thang Cuốn', data: '2-ThangCuon' },
    { value: 'Tầng 2 - Thang Máy', data: '2-ThangMay' },
    { value: 'Tầng 2 - Nhà Vệ Sinh', data: '2-NVS' },
    { value: 'Tầng 2 - WC', data: '2-WC' },
    { value: 'Tầng 2 - Toilet', data: '2-Toilet' },
    
    { value: 'Tầng 3 - Khoa Phẩu Thuật - Gây Mê Hồi Sức', data: '3-KPT' },
    { value: 'Tầng 3 - Phòng Mổ', data: '3-PM' },
    { value: 'Tầng 3 - Hồi Sức Nội', data: '3-HSN' },
    { value: 'Tầng 3 - Hồi Sức Ngoại', data: '3-HSNg' },
    { value: 'Tầng 3 - Cầu Thang Bộ', data: '3-CTB' },
    { value: 'Tầng 3 - Thang Cuốn', data: '3-TC' },
    { value: 'Tầng 3 - Thang Máy', data: '3-TM' },
    { value: 'Tầng 3 - Nhà Vệ Sinh', data: '3-NVS' },
    { value: 'Tầng 3 - WC', data: '3-NVS' },
    { value: 'Tầng 3 - Toilet', data: '3-NVS' },
    { value: 'Tầng 3 - Hành Chính Văn Phòng', data: '3-HCVP' },
    { value: 'Tầng 3 - Ban Giám Đốc', data: '3-HCVP' },
    { value: 'Tầng 3 - Sảnh Chờ Thân Nhân', data: '3-SCTN' },
    
    { value: 'Tầng 4 - Hội Trường', data: '4-HT' },
    { value: 'Tầng 4 - Khoa Sản', data: '4-KS' },
    { value: 'Tầng 4 - Phòng Sanh Mổ', data: '4-PSM' },
    { value: 'Tầng 4 - Phòng Sanh', data: '4-PS' },
    { value: 'Tầng 4 - Phòng Tiền Sản', data: '4-PTS' },
    { value: 'Tầng 4 - Phòng Dưỡng Nhi', data: '4-PDN' },
    { value: 'Tầng 4 - Phòng Hồi Sức Sản', data: '4-PHSS' },
    { value: 'Tầng 4 - Cầu Thang Bộ', data: '4-CTB' },
    { value: 'Tầng 4 - Thang Máy', data: '4-TM' },
    { value: 'Tầng 4 - Nhà Vệ Sinh', data: '4-NVS' },
    { value: 'Tầng 4 - WC', data: '4-NVS' },
    { value: 'Tầng 4 - Toilet', data: '4-NVS' },
    
    { value: 'Tầng 5 - Phòng 5001', data: '5-5001' },
    { value: 'Tầng 5 - Phòng 5002', data: '5-5002' },
    { value: 'Tầng 5 - Phòng 5003', data: '5-5003' },
    { value: 'Tầng 5 - Phòng 5004', data: '5-5004' },
    { value: 'Tầng 5 - Phòng 5005', data: '5-5005' },
    { value: 'Tầng 5 - Phòng 5006', data: '5-5006' },
    { value: 'Tầng 5 - Phòng 5007', data: '5-5007' },
    { value: 'Tầng 5 - Phòng 5008', data: '5-5008' },
    { value: 'Tầng 5 - Phòng 5009', data: '5-5009' },
    { value: 'Tầng 5 - Phòng 5010', data: '5-5010' },
    { value: 'Tầng 5 - Phòng 5011', data: '5-5011' },
    { value: 'Tầng 5 - Phòng 5012', data: '5-5012' },
    { value: 'Tầng 5 - Phòng 5013', data: '5-5013' },
    { value: 'Tầng 5 - Phòng 5014', data: '5-5014' },
    { value: 'Tầng 5 - Phòng 5015', data: '5-5015' },
    { value: 'Tầng 5 - Phòng 5016', data: '5-5016' },
    { value: 'Tầng 5 - Phòng 5017', data: '5-5017' },
    { value: 'Tầng 5 - Phòng 5018', data: '5-5018' },
    { value: 'Tầng 5 - Thủ Thuật', data: '5-TT' },
    { value: 'Tầng 5 - Phòng Chăm Sóc Đặc Biệt', data: '5-PCSDB' },
    { value: 'Tầng 5 - Cầu Thang Bộ', data: '5-CTB' },
    { value: 'Tầng 5 - Thang Máy', data: '5-TM' },
    { value: 'Tầng 5 - Nhà Vệ Sinh', data: '5-NVS' },
    { value: 'Tầng 5 - WC', data: '5-NVS' },
    { value: 'Tầng 5 - Toilet', data: '5-NVS' },
    { value: 'Tầng 5 - Phòng Bệnh', data: '5-PB' }
  ];
  $('#autocomplete').autocomplete({
        lookup: currencies,
        onSelect: function (suggestion) {
            var floor = getFloor(suggestion.data);
            // var arrFloor = [1,2,3,4,5,6];
            // if($('#floor'+floor).hasClass('hide')){
            //   $('#floor'+floor).removeClass('hide');
            //   $('#floor'+floor).addClass('show');
            //   // var src = $('#floor'+floor+" img").attr("src");
            //   // if(src == ""){
            //   //   $('#floor'+floor+" img").attr("src","../images/floor/tang"+floor+".jpg");
            //   // }
              
            //   for(var i = 0; i < arrFloor.length; i++){
            //     if(arrFloor[i] != floor){
            //       if($('#floor'+arrFloor[i]).hasClass('show')){
            //         $('#floor'+arrFloor[i]).removeClass('show');
            //         $('#floor'+arrFloor[i]).addClass('hide');
            //       }
            //     }
            //   }
            // }
            // setTimeout(function(){
            //   var img = $('#imageMap'+floor);
            //   img.mapster('set',null,suggestion.data);
            //   img.mapster('tooltip',suggestion.data);
            // }, 1000);
            if(floor == $('#imageMap').attr("data-id")){
                var img = $('#imageMap');
                img.mapster('set',null,suggestion.data);
                img.mapster('tooltip',suggestion.data);
            }
            else {
                $('#imageMap').hide();
                $('.mapTooltip').remove();
                $('.mapTooltipContent').remove();
                
                $('#imageMap').attr("data-id",floor);
                $('#imageMap').attr("usemap","#map"+floor);
                $('#imageMap').attr("src","../images/floor/tang"+floor+".jpg");
                $('.mapster_el').attr("src","../images/floor/tang"+floor+".jpg");
                $('#grid-load').html("<img src='../admin/upload/image_doctor/loading.gif'/>").fadeIn('fast');
                $('#imageMap').load(function(){
                    $('#grid-load').fadeOut('fast');
                    $('#imageMap').show();
                    loadJsForMap(floor);
                    setTimeout(function(){
                      var img = $('#imageMap');
                      img.mapster('set',null,suggestion.data);
                      img.mapster('tooltip',suggestion.data);
                    }, 1000);
                });
            }
        }
      });
});