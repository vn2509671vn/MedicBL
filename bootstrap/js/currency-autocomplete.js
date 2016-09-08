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
  ];
  $('#autocomplete').autocomplete({
        lookup: currencies,
        onSelect: function (suggestion) {
            var img = $('img');
            img.mapster('set',null,suggestion.data);
            img.mapster('tooltip',suggestion.data);
        }
      });
});