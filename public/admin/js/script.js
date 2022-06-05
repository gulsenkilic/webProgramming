$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

var loadFile = function(event) {
    document.getElementById("defaultPicture").style.display = "none";
    var output = document.getElementById('newImage');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};