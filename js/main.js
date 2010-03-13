$(function() {
  
  //Makes search value 'Search this site' disappear on focus and reappear on blur when appropriate
  $('input[name=s]').focus(function(){
      if ($(this).val() == 'Search this site')
          $(this).val('');
  });
  $('input[name=s]').blur(function(){
      if ($(this).val() == '')
          $(this).val('Search this site');
  });

});