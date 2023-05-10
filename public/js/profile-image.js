$(document).ready(function() {
    $('#proimage').submit(function(event) {
      // Prevent form from submitting automatically
      event.preventDefault();

      // Do some validation checks here
      // ...

      // Submit the form using AJAX instead
      $.ajax({
        type: 'POST',
        url: $('#proimage').attr('action'),
        data: new FormData($('#proimage')[0]),
        processData: false,
        contentType: false,
        success: function(response) {
          // Handle the response from the server
          // ...
        },
        error: function(xhr, status, error) {
          // Handle any errors that occur during the AJAX request
          // ...
        }
      });
    });
  });