$('#radio-type-ticket input:radio').click(function() {
    if ($(this).val() === '1') {
        $('#nv').prop("disabled", true);
    } 
    else if ($(this).val() === '2') {
        $('#nv').prop("disabled", false);
    } 
  });