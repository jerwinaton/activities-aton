<!DOCTYPE html>
<html>
<body>

<h2>My First JavaScript</h2>

Click me to display Date and Time.</button>
<script>
function success(){
var msg = 
'<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">' +
'<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">'+
'<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>'+
'</symbol>'+
'</svg>'+
'<div class="alert alert-fixed alert-success alert-dismissible fade show d-flex align-items-center justify-content-center" role="alert">'+
'<div>'+
'<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#check-circle-fill"/></svg><strong>Your data has been submitted successlfuly!</strong>'+
'</div>'+
'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'+
'</div>'
;

document.getElementById('show_alert').innerHTML = msg;
}
</script>
<div id="show_alert"></div>

<input type="submit" name="ngi" value"submit" onclick="success();">

<?php 
// if (isset($_POST["ngi"])){
// 	 echo "<script> 
//     document.getElementById(\"show_alert\").innerHTML =\"<script> success(); </script>\"; </script>";

// }
?>
</body>
</html> 
