function profilePhotoValidation() {
    var fileInput = document.getElementById("profilePhoto");
    var fileSize = fileInput.files[0].size; // in bytes
    var maxSize = 2 * 1024 * 1024; // 2 MB

    if (fileSize > maxSize) {
        document.getElementById("profileValidationText").innerHTML =
            "File size exceeds 2 MB. Please choose a smaller file.";
        // Clear the file input to allow the user to choose another file
        fileInput.value = "";
    }
}

function coverPhotoValidation() {
  var fileInput = document.getElementById("coverPhoto");
  var fileSize = fileInput.files[0].size; // in bytes
  var maxSize = 2 * 1024 * 1024; // 2 MB

  if (fileSize > maxSize) {
      document.getElementById("coverPhotoValidationText").innerHTML =
          "File size exceeds 2 MB. Please choose a smaller file.";
      // Clear the file input to allow the user to choose another file
      fileInput.value = "";
  }
}

$(document).ready(function () {
    $("#proimage").submit(function (event) {
        // Prevent form from submitting automatically
        event.preventDefault();

        // Do some validation checks here
        // ...

        // Submit the form using AJAX instead
        $.ajax({
            type: "POST",
            url: $("#proimage").attr("action"),
            data: new FormData($("#proimage")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                // Handle the response from the server
                // ...
            },
            error: function (xhr, status, error) {
                // Handle any errors that occur during the AJAX request
                // ...
            },
        });
    });
});
