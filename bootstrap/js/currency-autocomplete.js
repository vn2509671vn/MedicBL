$(function(){
  var currencies = [
    { value: 'Tầng 1 - Khoa Cấp Cứu', data: '1-KCC' },
    { value: 'Tầng 1 - Nhà vệ sinh 1', data: '1-WC-1' },
    { value: 'Tầng 1 - WC 1', data: '1-WC-1' },
    { value: 'Tầng 1 - Toilet 1', data: '1-WC-1' },
    { value: 'Tầng 1 - Nhà vệ sinh 2', data: '1-WC-2' },
    { value: 'Tầng 1 - WC 2', data: '1-WC-2' },
    { value: 'Tầng 1 - Toilet 2', data: '1-WC-2' },
    { value: 'Tầng 1 - Điện Tim', data: '1-DT' },
    { value: 'Tầng 1 - Siêu Âm', data: '1-SA' },
    { value: 'Tầng 1 - Thu Ngân 1', data: '1-TN-1' },
    { value: 'Tầng 1 - Thu Ngân 2', data: '1-TN-2' },
    { value: 'Tầng 1 - Nhà Thuốc', data: '1-NT' },
    { value: 'Tầng 1 - Thủ Thuật Bó Bột', data: '1-TTBB' },
    { value: 'Tầng 1 - X-Quang 1', data: '1-XQ-1' },
    { value: 'Tầng 1 - X-Quang 2', data: '1-XQ-2' },
    { value: 'Tầng 1 - CT Scaner 1', data: '1-CTS-1' },
    { value: 'Tầng 1 - CT Scaner 2', data: '1-CTS-2' },
    { value: 'Tầng 1 - DSA', data: '1-DSA' },
    { value: 'Tầng 1 - MRI', data: '1-MRI' },
    { value: 'Tầng 1 - Nhà Thuốc Bảo Hiểm Y Tế', data: '1-NTBHYT' },
    { value: 'Tầng 1 - Cầu Thang Bộ', data: '1-CTB-1' },
    { value: 'Tầng 1 - Cầu Thang Bộ', data: '1-CTB-2' },
    { value: 'Tầng 1 - Cầu Thang Bộ', data: '1-CTB-3' },
    { value: 'Tầng 1 - Cầu Thang Bộ', data: '1-CTB-4' },
    { value: 'Tầng 1 - Cầu Thang Bộ', data: '1-CTB-5' },
    { value: 'Tầng 1 - Thang Cuốn', data: '1-TC' },
    { value: 'Tầng 1 - Thang Máy', data: '1-TM' },
    
    { value: 'Tầng 2 - Khoa Xét Nghiệm 1', data: '2-XN-1' },
    { value: 'Tầng 2 - Khoa Xét Nghiệm 2', data: '2-XN-2' },
    { value: 'Tầng 2 - Khoa Xét Nghiệm 3', data: '2-XN-3' },
    { value: 'Tầng 2 - Lấy Mẫu Xét Nghiệm', data: '2-LMXN' },
    { value: 'Tầng 2 - Lấy Máu', data: '2-LM' },
    { value: 'Tầng 2 - Tiêm Ngừa 1', data: '2-TiemNgua-1' },
    { value: 'Tầng 2 - Tiêm Ngừa 2', data: '2-TiemNgua-2' },
    { value: 'Tầng 2 - Khu Khám 1', data: '2-KhuKham-1' },
    { value: 'Tầng 2 - Khu Khám 2', data: '2-KhuKham-2' },
    { value: 'Tầng 2 - Khu Khám 3', data: '2-KhuKham-3' },
    { value: 'Tầng 2 - Khu Khám 4', data: '2-KhuKham-4' },
    { value: 'Tầng 2 - Khu Khám 5', data: '2-KhuKham-5' },
    { value: 'Tầng 2 - Khu Khám 6', data: '2-KhuKham-6' },
    { value: 'Tầng 2 - Khu Khám 7', data: '2-KhuKham-7' },
    { value: 'Tầng 2 - Khu Khám 8', data: '2-KhuKham-8' },
    { value: 'Tầng 2 - Siêu Âm 1', data: '2-SieuAm-1' },
    { value: 'Tầng 2 - Siêu Âm 2', data: '2-SieuAm-2' },
    { value: 'Tầng 2 - X-Quang 1', data: '2-XQ' },
    { value: 'Tầng 2 - Loãng Xương', data: '2-LX' },
    { value: 'Tầng 2 - Nhũ Ảnh', data: '2-NA' },
    { value: 'Tầng 2 - Đo Tim Thai', data: '2-DTT' },
    { value: 'Tầng 2 - Sản Phụ Khoa', data: '2-SPK' },
    { value: 'Tầng 2 - Khám Nhi', data: '2-KN' },
    { value: 'Tầng 2 - Khám Ngoại', data: '2-KhamNgoai' },
    { value: 'Tầng 2 - Khám Nội 1', data: '2-KhamNoi-1' },
    { value: 'Tầng 2 - Khám Nội 2', data: '2-KhamNoi-2' },
    { value: 'Tầng 2 - Khám Nha', data: '2-KhamNha' },
    { value: 'Tầng 2 - Tai Mũi Họng', data: '2-TMH' },
    { value: 'Tầng 2 - Da Liễu', data: '2-DL' },
    { value: 'Tầng 2 - Khám Mắt', data: '2-KM' },
    { value: 'Tầng 2 - Khám Vip', data: '2-KV' },
    { value: 'Tầng 2 - Đo Kính', data: '2-DK' },
    { value: 'Tầng 2 - Đo Mắt', data: '2-DM' },
    { value: 'Tầng 2 - Cắt Kính', data: '2-CK' },
    { value: 'Tầng 2 - Vật Lý Trị Liệu 1', data: '2-VLTL-1' },
    { value: 'Tầng 2 - Vật Lý Trị Liệu 2', data: '2-VLTL-2' },
    { value: 'Tầng 2 - Đốt Lazer', data: '2-DLZ' },
    { value: 'Tầng 2 - Chăm Sóc Da', data: '2-CSD' },
    { value: 'Tầng 2 - Vận Động', data: '2-VD' },
    { value: 'Tầng 2 - Thủ Thuật', data: '2-ThuThuat' },
    { value: 'Tầng 2 - Điện Tim', data: '2-DienTim' },
    { value: 'Tầng 2 - Lọc Thận', data: '2-LocThan' },
    { value: 'Tầng 2 - Nội Soi 1', data: '2-NoiSoi-1' },
    { value: 'Tầng 2 - Nội Soi 2', data: '2-NoiSoi-2' },
    { value: 'Tầng 2 - Thu Ngân 1', data: '2-ThuNgan-1' },
    { value: 'Tầng 2 - Thu Ngân 2', data: '2-ThuNgan-2' },
    { value: 'Tầng 2 - Cầu Thang Bộ 1', data: '2-ThangBo-1' },
    { value: 'Tầng 2 - Cầu Thang Bộ 2', data: '2-ThangBo-2' },
    { value: 'Tầng 2 - Cầu Thang Bộ 3', data: '2-ThangBo-3' },
    { value: 'Tầng 2 - Cầu Thang Bộ 4', data: '2-ThangBo-4' },
    { value: 'Tầng 2 - Cầu Thang Bộ 5', data: '2-ThangBo-5' },
    { value: 'Tầng 2 - Thang Cuốn', data: '2-ThangCuon' },
    { value: 'Tầng 2 - Thang Máy', data: '2-ThangMay' },
    { value: 'Tầng 2 - Nhà Vệ Sinh 1', data: '2-NVS-1' },
    { value: 'Tầng 2 - Nhà Vệ Sinh 2', data: '2-NVS-2' },
    { value: 'Tầng 2 - Nhà Vệ Sinh 3', data: '2-NVS-3' },
    { value: 'Tầng 2 - Nhà Vệ Sinh 4', data: '2-NVS-4' },
    { value: 'Tầng 2 - WC 1', data: '2-WC-1' },
    { value: 'Tầng 2 - WC 2', data: '2-WC-2' },
    { value: 'Tầng 2 - WC 3', data: '2-WC-3' },
    { value: 'Tầng 2 - WC 4', data: '2-WC-4' },
    { value: 'Tầng 2 - Toilet 1', data: '2-Toilet-1' },
    { value: 'Tầng 2 - Toilet 2', data: '2-Toilet-2' },
    { value: 'Tầng 2 - Toilet 3', data: '2-Toilet-3' },
    { value: 'Tầng 2 - Toilet 4', data: '2-Toilet-4' }
  ];
  $('#autocomplete').autocomplete({
        lookup: currencies,
        onSelect: function (suggestion) {
            var floor = getFloor(suggestion.data);
            var arrFloor = [1,2,3,4,5,6];
            if($('#floor'+floor).hasClass('hide')){
              $('#floor'+floor).removeClass('hide');
              $('#floor'+floor).addClass('show');
              // var src = $('#floor'+floor+" img").attr("src");
              // if(src == ""){
              //   $('#floor'+floor+" img").attr("src","../images/floor/tang"+floor+".jpg");
              // }
              
              for(var i = 0; i < arrFloor.length; i++){
                if(arrFloor[i] != floor){
                  if($('#floor'+arrFloor[i]).hasClass('show')){
                    $('#floor'+arrFloor[i]).removeClass('show');
                    $('#floor'+arrFloor[i]).addClass('hide');
                  }
                }
              }
            }
            setTimeout(function(){
              var img = $('#imageMap'+floor);
              img.mapster('set',null,suggestion.data);
              img.mapster('tooltip',suggestion.data);
            }, 1000);
            
        }
      });
});