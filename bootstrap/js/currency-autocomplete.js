$(function(){
  var currencies = [
    { value: 'Maine', data: 'ME' },
    { value: 'New Hampshire', data: 'NH' },
    { value: 'Vermont', data: 'VT' },
    { value: 'Massachusetts', data: 'MA' },
    { value: 'Rhode Island', data: 'RI' },
    { value: 'Connecticut', data: 'CT' },
    { value: 'New Jersey', data: 'NJ' },
    { value: 'Delaware', data: 'DE' },
    { value: 'Maryland', data: 'MD' },
    { value: 'District of Columbia', data: 'DC' },
    { value: 'Hawaii', data: 'HI' },
  ];
  $('#autocomplete').autocomplete({
        lookup: currencies,
        onSelect: function (suggestion) {
            var img = $('img');
            img.mapster('set',null,suggestion.data); 
        }
      });
});