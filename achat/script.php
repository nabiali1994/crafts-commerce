$( function() {
  var availableTags= [
  'aa',
  'bb',
  'cc'
  ];

//document.write(availableTags[0]);
  $( "#tags" ).autocomplete({
    source: availableTags
  });
} );
