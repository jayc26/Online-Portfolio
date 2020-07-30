<?php 

session_start();
$role="";
if (isset($_SESSION['username'])){

  $role=$_SESSION['Role'];
}

if (isset($_SESSION['username']))
{

	header("location: login.php");


}
//$role=$_SESSION['Role'];

/*if($role!="Admin")
{
	echo"<script>alert('You Do Not Have Access To This Page.');window.location.assign('login.php');</script>";
}*/
// Include config file
require_once 'includes/config.php';
$fname_err="";
$lname_err="";
$c_err="";
$p_err="";
$cp_err="";
$cn_err="";
$e_err="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(empty(trim($_POST['fname'])))
      {
        $fname_err = "Please Enter Valid First Name";
      } 
      else
      {
        $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
      }
      if(empty(trim($_POST['lname'])))
      {
        $lname_err = "Please Enter Valid Last Name";
      } 
      else
      {
        $lname = mysqli_real_escape_string($conn,$_POST["lname"]);
      }

      if(empty(trim($_POST['company'])))
      {
        $c_err = "Please Enter Valid Company Name";
      } 
      else
      {
        $c = mysqli_real_escape_string($conn,$_POST["company"]);
      }
      if(empty(trim($_POST['email'])))
      {
        $e_err = "Please Enter Valid Email";
      } 
      else
      {
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
      }
      $user_check_query = "SELECT * FROM login_details WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      $e_err = "Account already Exists";
    }
  }
      if(empty(trim($_POST['password'])))
      {
        $p_err = "Please Enter Valid Password";
      } 
      else
      {
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
      }
      if(empty(trim($_POST['cpass'])))
      {
        $cp_err = "Please Enter Same Password";
      } 
      else
      {
        $cp = mysqli_real_escape_string($conn,$_POST["cpass"]);
      }
      if ($password != $cp)
      {
        $p_err = "Passwords do not match";
        $cp_err = "Passwords do not match";
      }

      
      if(empty(trim($_POST['contact'])))
      {
        $cn_err = "Please Enter valid number";
      } 
      else
      {
        $cn = mysqli_real_escape_string($conn,$_POST["contact"]);
      }
      //echo"<script> alert('$cn $fname $lname $c'); </script>";
      if(empty($fname_err) && empty($lname_err) && empty($c_err) && empty($cn_err) && empty($cp_err) && empty($cn_err) && empty($e_err) && empty($p_err))
		{
      $query="insert into login_details(email,Password,Role,fname,lname,company,contact) values('$email','$password','User','$fname','$lname','$c','$cn')";
      mysqli_query($conn, $query);
      
      
      echo"<script>alert('Record Inserted Successfully');window.location.assign('index.php');</script>";
			
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
   function val()
   {
    var fn = document.getElementById('fn').value;
        var ln = document.getElementById('ln').value;
        var c = document.getElementById('c').value;
        var e = document.getElementById('e').value;
        var cn = document.getElementById('cn').value;
        var p = document.getElementById('p').value;
        var cp = document.getElementById('cp').value;
       
        var cpr=/^\S{8,12}$/;
        var cpre=cpr.test(cp);
        var cr=/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;
        var cnre = cr.test(cn);
        var er=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        //alert(cnre);
        var ere= er.test(e);
        
        if(fn=="" )
        {
          alert('Invalid Name')
          document.getElementById('fnerr').innerHTML ="Please Enter Valid Name";
                    return false;
        }
        if(ln=="" )
        {
          document.getElementById('lnerr').innerHTML ="Please Enter Valid Name";
                    return false;
        }
        
        if(c=="" )
        {
          document.getElementById('cerr').innerHTML ="Please Enter Valid Name";
                    return false;
        }
        if(e=="" )
        {
          document.getElementById('eerr').innerHTML ="Please Enter Valid Email";
                    return false;
        }
        if(ere==false)
        {
          document.getElementById('eerr').innerHTML ="Please Enter Valid Email";
                    return false;
        }
        
        
        if(p=="" )
        {
          document.getElementById('perr').innerHTML ="Please Enter Valid Password";
                    return false;
        }
        var pr=/^\S{8,12}$/;
        var pre=pr.test(p);
        if(pre==false)
        {
          document.getElementById('perr').innerHTML ="Password should be 8-12 long";
                    return false;
        }
        if(cp=="" )
        {
          document.getElementById('cperr').innerHTML ="Please Enter Valid Password";
                    return false;
        }
        if(cp.trim()!=p.trim())
        {
          document.getElementById('cperr').innerHTML ="Passwords do not match";
          document.getElementById('perr').innerHTML ="Passwords do not match";
                    return false;
        }
        if(cpre==false)
        {
          document.getElementById('cperr').innerHTML ="Please Enter min 8 char";
                    return false;
        }
       
        if(cn=="" )
        {
         

          document.getElementById('cnerr').innerHTML ="Please Enter Valid Contact";
                    return false;
        }
        
        if(cnre==false)
        {
          //alert('Hi');
          document.getElementById('cnerr').innerHTML ="Please Enter Valid Contact";
                    return false;
        }
        
        
       
        
        
        
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

            <form method="post" action="">
            <div class="box">
                
            <h1>Sign Up!</h1>
            <label style="float: left">First Name</label>
            <input type="text" style="float: left; margin-left: 40px" name="fname" id="fn" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="fnerr" name="fnerr"><?php echo $fname_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Last Name</label>
            <input type="text" style="float: left;margin-left: 40px" name="lname" id="ln" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="lnerr" name="lnerr"><?php echo $lname_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Company</label>
            <input type="text" style="float: left;margin-left: 50px" name="company" id="c" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="cerr" name="cerr"><?php echo $c_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Email</label>
            <input type="email" style="float: left;margin-left: 82px" name="email" id="e" pattern='^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$' required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="eerr" name="eerr"><?php echo $e_err; ?></span>
																								</div>
                                                <br>
            
            <label style="float: left">Password</label>
            <input type="password" style="float: left;margin-left: 50px" name="password" id="p" pattern="^\S{8,12}$" title="Password should be between 8 to 12 characters long" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="perr" name="perr"><?php echo $p_err; ?></span>
																								</div>
            <br>
           
            <label style="float: left">Confirm Pswd</label>
            <input type="password" style="float: left;margin-left: 18px" name="cpass" id="cp" pattern="^\S{8,12}$" title="Password should be between 8 to 12 characters long" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="cperr" name="cperr"><?php echo $cp_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Contact</label>
            <input type="text" style="float: left;margin-left: 65px" name="contact" id="cn"  pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" title="Contact should only contain ( or - or space. "  id="contact" name="contact" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="cnerr" name="cnerr"><?php echo $cn_err; ?></span>
																								</div>
            <Br>
           
              
            <a href="#" style="float: right; margin-right:225px"><div> <button id="btn2" onclick="val()">Sign Up </button></div></a> <!-- End Btn2 -->
            

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