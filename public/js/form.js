$( document ).ready(function() {

var $checkboxes = [".form-q-one", ".form-q-two", ".form-q-three", ".form-q-six", ".form-q-seven", ".form-q-eight"]; 

$.each($checkboxes, function(index, item) {

  var $checkboxes = $(item);

   $checkboxes.change(function () {
    if (this.checked) {
        if ($checkboxes.filter(':checked').length == 1) {
            $checkboxes.not(':checked').prop('disabled', true);
        }
    } else {
        $checkboxes.prop('disabled', false);
    }
  });

});

});