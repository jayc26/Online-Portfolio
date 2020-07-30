<?php
require_once 'includes/config.php';
if(isset($_REQUEST["i"]))
{
	
	$i=mysqli_escape_string($conn,$_POST['i']);	
    echo $i;


//$ex=$_SESSION['Ext'];


$q="insert into logs(name,page,action) values('id=$i','Skills','Deleted')";
            mysqli_query($conn, $q);
$query5="delete from experience where id='$i'";
    mysqli_query($conn,$query5);
}
?>