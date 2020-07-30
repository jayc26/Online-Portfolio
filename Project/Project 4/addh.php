<?php 

session_start();
$role="";
if (isset($_SESSION['username'])){

    $role=$_SESSION['Role'];
}
if($role!="Admin")
{
    header("location: login.php");
}
/*if (!isset($_SESSION['username']))
{

	header("location: login.php");


}*/
if(!isset($_SESSION))
{
	header("Location: login.php");
}
if (!empty($_SESSION['Eh'])) {
	$eh = $_SESSION['Eh'];
}
else
{
	//echo"<script>window.location.assign('login.php');</script>";
}
//$role=$_SESSION['Role'];

/*if($role!="Admin")
{
	echo"<script>alert('You Do Not Have Access To This Page.');window.location.assign('login.php');</script>";
}*/
// Include config file
require_once 'includes/config.php';

$jp=$r=$at="";
$jp_err=$r_err=$at_err=$fuerr="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(empty(trim($_POST['jp'])))
      {
        $jp_err = "Please Enter Valid Name";
      } 
      else
      {
        $jp = mysqli_real_escape_string($conn,$_POST["jp"]);
      }
      if(empty(trim($_POST['r'])))
      {
        $r_err = "Please Enter Valid Rate";
      } 
      else
      {
        $r = mysqli_real_escape_string($conn,$_POST["r"]);
      }

      
      
      $target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      if(isset($_POST['fileToUpload'])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    /*if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }*/
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        $fuerr="Please Upload File";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $file_name=$_FILES["fileToUpload"]["name"];
            $qi="insert into uploads(img,ides) values('$file_name','$jp')";
           mysqli_query($conn, $qi);
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
     }
     if(empty($jp_err) && empty($r_err) && empty($fuerr))
      {
        $qe="insert into jobprofile(job_profile,rate) values('$jp','$r')";
        mysqli_query($conn, $qe);
        $q="insert into logs(name,page,action) values('$jp','Hire','Inserted')";
            mysqli_query($conn, $q);
      }
      
      $at=$_POST['at'];
      $i=1;
      if(empty($fuerr))
      {
      foreach ($at as $key => $atr) {
        //echo"<script>alert('$jp $atr $pn');</script>";
        $qr="insert into perks(project,pd,pid) values('$jp','$atr','$i')";
        mysqli_query($conn, $qr);
        $i=$i+1;
       
        
      }
      if($fuerr=="")
    {
    echo"<script>window.location.assign('ahire.php');</script>";
    }
    }
      
      //echo"<script> alert('$cn $fname $lname $c'); </script>";
      /*if(empty($cp_err) && empty($sm_err) && empty($sy_err) && empty($em_err) && empty($ey_err) && empty($job_err) && empty($pos_err) && empty($des_err))
		{
      $query="update experience set company_name='$cp', start_month='$sm', start_year='$sy', end_month='$em', end_year='$ey', job_type='$job', pos='$pos', description='$des' where id='$ed'";
      mysqli_query($conn, $query);
      
      $qi="update uploads set img='$file_name', ides='$jp' where ides='$pn'";
           mysqli_query($conn, $qi);
      echo"<script>alert('Record Edited Successfully');</script>";
			
    }*/

}
      






?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="portfolio.css">


<style>
      body{
  font-family: 'Open Sans', sans-serif;
  background:#3498db;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:500px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #2980b9 4px solid; 
}

.email{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn{
  background:#2ecc71;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#2CC06B; 
}

#btn2{
  float:left;
  background:#3498db;
  width:125px;  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #2980b9 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  margin-left:10px;
  font-weight:800;
  font-size:0.8em;
}

#btn2:hover{ 
background:#3594D2; 
}
        </style>

      <script>
      var input = document.getElementById('contact');
      //alert("Hello");
      
      input.oninvalid = function(event) {
        //alert("Hello");
    event.target.setCustomValidity('Username should only contain lowercase letters. e.g. john');
}
      </script>


</head>

<body style="background-color:#05021B">
        <div id="wrapper">
                <header style="top: 0; position:fixed;width:100%">
            
                <nav>
                        
                        <ul>
                             <li> <h1 style="color: aqua"> Jay Chaphekar </h1>
                                  <!-- <img src="name.png" alt="name"/> --><li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li>
                                 <li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li><li>   </li>
                                 <?php

if($role=="Admin")
{?>
<li><a href="index.php">Home</a></li>
<li><a href="askills.php">My Skills</a></li>
<li><a href="amyworks.php">Works</a></li>
<li><a href="recommendation.php">Recommendation</a></li>
<li><a href="aHire.php">Hire Me</a></li>

<li><a href="contact.php">Contact Me</a></li>
<?php if (!isset($_SESSION['username'])){ ?>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Sign Up</a></li>
<?php } else
{?>
<li>

                                      <a href="Logout.php">
                                          Logout
                                      </a>
                                      
                                      <?php } ?>
    
    </li>
<?php } 
else
{
?>
<li><a href="index.php">Home</a></li>
<li><a href="skills.php">My Skills</a></li>
<li><a href="myworks.php">Works</a></li>
<li><a href="recommendation.php">Recommendation</a></li>
<li><a href="Hire.php">Hire Me</a></li>

<li><a href="contact.php">Contact Me</a></li>
<?php if (!isset($_SESSION['username'])){ ?>
<li><a href="login.php">Login</a></li>
<li><a href="register.php">Sign Up</a></li>
<?php } else
{?>
<li>

                                      <a href="Logout.php">
                                          Logout
                                      </a>
                                      
                                      <?php } ?>
    
    </li>

<?php }?>

                    


                            
                    
                        </ul>
                    </nav>
        </header>
        <section style="align-content: center;align-self:center; margin-left: 20px">
            <br>
            <br>
            <br>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

            <form method="post" action="" enctype="multipart/form-data">
            <?php 
            

            ?>
            <div class="box">
                
            <h1>Add Hire Me!</h1>
            <input type="hidden" name="eid" value="<?php echo $row['jid']?>" />
            <label style="float: left">Job Position</label>
            <input type="text" style="float: left; margin-left: 40px" name="jp" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="fnerr" name="jperr"><?php echo $jp_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Rate  $</label>
            <input type="number" style="float: left; margin-left: 85px" name="r" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="fnerr" name="rerr"></span>
																								</div>
            <br>
           
            <label style="float: left">Attributes</label>
            <input type="text" style="float: left;margin-left: 55px" name="at[]" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="lnerr" name="lnerr"><?php echo $at_err; ?></span>
																								</div>
                                                                                                <br>
                                                                                                <label style="float: left">Attributes</label>
            <input type="text" style="float: left;margin-left: 55px" name="at[]" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="lnerr" name="lnerr"><?php echo $at_err; ?></span>
																								</div>
                                                                                                <br>
                                                                                                <label style="float: left">Attributes</label>
            <input type="text" style="float: left;margin-left: 55px" name="at[]" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="lnerr" name="lnerr"><?php echo $at_err; ?></span>
																								</div>
                                                                                                <br>
                                                                                               
            <br>
            
            
            <label style="float: left">Update Image</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <div>
            
                                                <span class="help-block" style="color:red;font-size:small" id="fuerr" name="fuerr"><?php echo $fuerr; ?></span>
																								</div>
            <br>
            
           
           
           
              
            <a href="#" style="float: right; margin-right:225px"><div> <button id="btn2" name="edit">Add </button></div></a> <!-- End Btn2 -->
            

            </div> <!-- End Box -->
              
            </form>
            
          
              
                <form  method="post" action="">
                       
                      
                        <div class="container">
                          </section>
        <br>
        <br>
        <br>
        <br>
        <section> <footer>Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>