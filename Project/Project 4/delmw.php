<?php
require_once 'includes/config.php';
if(isset($_REQUEST["i"]))
{
	
	$i=mysqli_escape_string($conn,$_POST['i']);	
    echo $i;


//$ex=$_SESSION['Ext'];


$sqlh = "SELECT * FROM projects where pid='$i'";
$rn = mysqli_query($conn,$sqlh);
$rob = mysqli_fetch_array($rn);
$pna=$rob['pname'];
$q="insert into logs(name,page,action) values('$pna','Myworks','Deleted')";
            mysqli_query($conn, $q);
$query5="delete from projects where pid='$i'";
    mysqli_query($conn,$query5);
    $query6="delete from uploads where ides='$pna'";
    mysqli_query($conn,$query6);

}
?>