function profilePhotoValidation() {
    var fileInput = document.getElementById("profilePhoto");
    var fileSize = fileInput.files[0].size; // in bytes
    var maxSize = 2 * 1024 * 1024; // 2 MB

    if (fileSize > maxSize) {
        document.getElementById("profileValidationText").innerHTML =
            "File size exceeds 2 MB. Please choose a smaller file.";
        // Clear the file input to allow the user to choose another file
        fileInput.value = "";
    } else {
        // If the file size is within limits, proceed to preview the image
        previewImage();
    }
}

function previewImage() {
    var fileInput = document.getElementById('profilePhoto');
    var preview = document.getElementById('preview');
    preview.innerHTML = ''; // Clear any previous content

    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // Create an image element
            var img = document.createElement('img');
            img.src = e.target.result;
            img.alt = 'Image Preview';

            // Append the image to the preview element
            preview.appendChild(img);
            document.getElementById('viewDyPhoto').hidden = true;
            preview.hidden = false;

        };

        // Read the image file as a data URL
        reader.readAsDataURL(fileInput.files[0]);
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
  else{
    previewCoverImage();
  }
}

function previewCoverImage(){
    var fileInput = document.getElementById('coverPhoto');
    var preview = document.getElementById('preview');
    preview.innerHTML = ''; // Clear any previous content

    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // Create an image element
            var img = document.createElement('img');
            img.src = e.target.result;
            img.alt = 'Image Preview';

            // Append the image to the preview element
            preview.appendChild(img);
            document.getElementById('viewCoverPhoto').hidden = true;
            preview.hidden = false;

        };

        // Read the image file as a data URL
        reader.readAsDataURL(fileInput.files[0]);
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
