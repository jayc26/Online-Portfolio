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
if (!empty($_SESSION['Ee'])) {
	$ee = $_SESSION['Ee'];
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
$cp_err=$sm_err=$em_err=$sy_err=$ey_err=$job_err=$pos_err=$des_err=$in_err=$t_err=$d_err="";
$cp=$sm=$sy=$em=$ey=$job=$pos=$des=$in=$t="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(empty(trim($_POST['in'])))
      {
        $in_err = "Please Enter Valid Institution Name";
      } 
      else
      {
        $in = mysqli_real_escape_string($conn,$_POST["in"]);
      }
      if(empty(trim($_POST['sm'])))
      {
        $sm_err = "Please Enter Valid Last Name";
      } 
      else
      {
        $sm = mysqli_real_escape_string($conn,$_POST["sm"]);
      }

      if(empty(trim($_POST['sy'])))
      {
        $sy_err = "Please Enter Valid Company Name";
      } 
      else
      {
        $sy = mysqli_real_escape_string($conn,$_POST["sy"]);
      }
      if(empty(trim($_POST['em'])))
      {
        $em_err = "Please Enter Valid Email";
      } 
      else
      {
        $em = mysqli_real_escape_string($conn,$_POST["em"]);
      }
      if(empty(trim($_POST['ey'])))
      {
        $ey_err = "Please Enter Valid Email";
      } 
      else
      {
        $ey = mysqli_real_escape_string($conn,$_POST["ey"]);
      }
  
      
      if(empty(trim($_POST['type'])))
      {
        $t_err = "Please Enter valid type";
      } 
      else
      {
        $t = mysqli_real_escape_string($conn,$_POST["type"]);
      }
      if(empty(trim($_POST['d'])))
      {
        $d_err = "Please Enter Valid Degree";
      } 
      else
      {
        $d = mysqli_real_escape_string($conn,$_POST["d"]);
      }
      if(empty(trim($_POST['des'])))
      {
        $des_err = "Please Enter Valid Description";
      } 
      else
      {
        $des = mysqli_real_escape_string($conn,$_POST["des"]);
      }
      if($ey="Present")
      {
          $em="";
      }
      //echo"<script> alert('$cn $fname $lname $c'); </script>";
      if(empty($in_err) && empty($sm_err) && empty($sy_err) && empty($em_err) && empty($ey_err) && empty($t_err) && empty($d_err) && empty($des_err))
		{
            $query="insert into education(institution_name,start_month,start_year,end_month,end_year,type,degree,d_name) values('$in','$sm','$sy','$em','$ey','$t','$d','$des')";
            $q="insert into logs(name,page,action) values('$in','Skills','Inserted')";
            mysqli_query($conn, $q);

      mysqli_query($conn, $query);
      mysqli_error($conn);
      
      echo"<script>alert('Record Added Successfully');</script>";
      echo"<script>window.location.assign('askills.php');</script>";
			
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

            <form method="post" action="" >
           
            <div class="box">
                
            <h1>Add Education!</h1>
            <input type="hidden" name="eid" value="" />
            <label style="float: left">Institution Name</label>
            <input type="text" style="float: left; margin-left: 40px" name="in" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="in" name="in"><?php echo $in_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Start Month</label>
            <select name="sm" style="float: left;margin-left: 75px; width:175px">
            <option value="Jan" selected>Jan</option>
            <option value="Feb">Feb</option>
            <option value="Mar">Mar</option>
            <option value="Apr">Apr</option>
            <option value="May">May</option>
            <option value="Jun">Jun</option>
            <option value="Jul">Jul</option>
            <option value="Aug">Aug</option>
            <option value="Sep">Sep</option>
            <option value="Oct">Oct</option>
            <option value="Nov">Nov</option>
            <option value="Dec">Dec</option>
            <select>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="fnerr" name="fnerr"><?php echo $sm_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Start Year</label>
            <select name="sy" style="float: left;margin-left: 90px; width:175px">
            <option value="2019" selected>2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2018">2015</option>
            </select>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="lnerr" name="lnerr"><?php echo $sy_err; ?></span>
																								</div>
            <br>
            <label style="float: left">End Month</label>
            <select name="em" style="float: left;margin-left: 80px; width:175px">
            <option value="Jan" selected>Jan</option>
            <option value="Feb">Feb</option>
            <option value="Mar">Mar</option>
            <option value="Apr">Apr</option>
            <option value="May">May</option>
            <option value="Jun">Jun</option>
            <option value="Jul">Jul</option>
            <option value="Aug">Aug</option>
            <option value="Sep">Sep</option>
            <option value="Oct">Oct</option>
            <option value="Nov">Nov</option>
            <option value="Dec">Dec</option>
            <select>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="cerr" name="cerr"><?php echo $em_err; ?></span>
																								</div>
            <br>
            <label style="float: left">End Year</label>
            <select name="ey" style="float: left;margin-left: 95px; width:175px">
            <option value="Present"selected>Present</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2018">2015</option>
            </select>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="eerr" name="eerr"><?php echo $ey_err; ?></span>
																								</div>
                                                <br>
            
            <label style="float: left">Degree Type</label>
            <input type="text" style="float: left;margin-left: 70px" name="type" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="perr" name="perr"><?php echo $t_err; ?></span>
																								</div>
            <br>
           
            <label style="float: left">Degree Name</label>
            <input type="text" style="float: left;margin-left: 58px" name="d" value="" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="cperr" name="cperr"><?php echo $d_err; ?></span>
																								</div>
            <br>
            <label style="float: left;">Description</label>
            <textarea name="des" value="" style="float:left; margin-left:75px"></textarea>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="cnerr" name="cnerr"><?php echo $des_err; ?></span>
																								</div>
            <Br>
           
              
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