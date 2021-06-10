<?php 
$con=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, '../../ssl/BaltimoreCyberTrustRoot.crt.pem', NULL, NULL); 
mysqli_real_connect($con, "citipraisedbmsserver.mysql.database.azure.com", "admin_citipraise@citipraisedbmsserver","#Cimdbms", "activity1", 3306);

//If connection failed, show the error
if (!$con)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>  