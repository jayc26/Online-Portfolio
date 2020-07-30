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
if (!empty($_SESSION['Emw'])) {
	$eh = $_SESSION['Emw'];
}
else
{
    //echo"<script>alert('Error');</script>";
	//echo"<script>window.location.assign('login.php');</script>";
}
//$role=$_SESSION['Role'];

/*if($role!="Admin")
{
	echo"<script>alert('You Do Not Have Access To This Page.');window.location.assign('login.php');</script>";
}*/
// Include config file
require_once 'includes/config.php';

$pn=$c=$d=$e=$fu="";
$pn_err=$c_err=$d_err=$fuerr="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(empty(trim($_POST['pn'])))
      {
        $pn_err = "Please Enter Valid First Name";
      } 
      else
      {
        $pn = mysqli_real_escape_string($conn,$_POST["pn"]);
      }
      if(empty(trim($_POST['c'])))
      {
        $c_err = "Please Enter Valid Last Name";
      } 
      else
      {
        $c = mysqli_real_escape_string($conn,$_POST["c"]);
      }
      if(empty(trim($_POST['d'])))
      {
        $d_err = "Please Enter Valid Last Name";
      } 
      else
      {
        $d = mysqli_real_escape_string($conn,$_POST["d"]);
      }
      
      /*if(isset($_FILES['fileToUpload']))
      {
        $fuerr="";
      }
    
      else
      {
        $fuerr="Please upload valid file";
        echo"<script>alert('hiii $fuerr');</script>";
         
      }*/
     
      
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
        $fuerr="Please Upload File";
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $file_name=$_FILES["fileToUpload"]["name"];
            $qi="insert into uploads(img,ides) values('$file_name','$pn')";
           mysqli_query($conn, $qi);
           //echo"<script>alert('hiii');</script>";
           $fuerr="";
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
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
    if(empty($pn_err) && empty($c_err) && empty($d_err) && empty($fuerr))
    {
      //echo"<script>alert('$fuerr');</script>";
      $qe="insert into projects(pname,category,description) values('$pn','$c','$d')";
      mysqli_query($conn, $qe);
      $q="insert into logs(name,page,action) values('$pn','Projects','Inserted')";
          mysqli_query($conn, $q);
          $e=1;
    }
    if($fuerr=="")
    {
    echo"<script>window.location.assign('amyworks.php');</script>";
    }

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
           
            <div class="box">
                
            <h1>Add Project!</h1>
            <label style="float: left">Project Name</label>
            <input type="text" style="float: left; margin-left: 65px" name="pn" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="fnerr" name="jperr"><?php echo $pn_err; ?></span>
																								</div>
            <br>
            <label style="float: left;">Project Category</label>
            <select name="c" style="float: left; margin-left: 45px; width:175px">
            <option value="Website" selected>Website</option>
            <option value="Mobile Application">Mobile Application</option>
            <option value="Research">Research</option>
            <select>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="fnerr" name="rerr"><?php echo $c_err; ?></span>
																								</div>
                                                                                                <br>
                                                                                                <label style="float: left">Project Description</label>
            <input type="text" style="float: left; margin-left: 25px" name="d" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="fnerr" name="rerr"><?php echo $d_err; ?></span>
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