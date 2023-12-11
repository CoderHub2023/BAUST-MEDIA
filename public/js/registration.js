function validateFile() {
    var fileInput = document.getElementById('idcardphoto');
    var fileSize = fileInput.files[0].size; // in bytes
    var maxSize = 2 * 1024 * 1024; // 2 MB

    if (fileSize > maxSize) {
        document.getElementById("idcardvalidationText").innerHTML = "File size exceeds 2 MB. Please choose a smaller file.";
        // Clear the file input to allow the user to choose another file
        fileInput.value = '';
    }
}