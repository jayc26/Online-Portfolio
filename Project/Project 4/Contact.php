<?php
session_start();
$role="";
if (isset($_SESSION['username'])){

  $role=$_SESSION['Role'];
}

require_once 'includes/config.php';
$fn=$ln=$c=$e=$cn=$fn_err=$ln_err=$c_err=$cn_err=$e_err="";
$email_id="chaphekarjay@gmail.com";
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty(trim($_POST['fn'])))
  {
    $fn_err = "Please Enter Valid First Name";
  } 
  else
  {
    $fn = mysqli_real_escape_string($conn,$_POST["fn"]);
  }
  if(empty(trim($_POST['ln'])))
      {
        $ln_err = "Please Enter Valid Last Name";
      } 
      else
      {
        $ln = mysqli_real_escape_string($conn,$_POST["ln"]);
      }
      if(empty(trim($_POST['c'])))
      {
        $c_err = "Please Enter Valid Comapny Name";
      } 
      else
      {
        $c = mysqli_real_escape_string($conn,$_POST["c"]);
      }
      if(empty(trim($_POST['e'])))
      {
        $e_err = "Please Enter Valid Email";
      } 
      else
      {
        $e = mysqli_real_escape_string($conn,$_POST["e"]);
      }
      if(empty(trim($_POST['cn'])))
      {
        $cn_err = "Please Enter Valid First Name";
      } 
      else
      {
        $cn = mysqli_real_escape_string($conn,$_POST["cn"]);
      }

      if(empty($fn_err) && empty($ln_err) && empty($c_err) && empty($cn_err) && empty($e_err))
      {

$mailBody = "\nEmail: ".$e."\n\n Name"."$fn $ln"."Contact"."$cn"."Company"."$c.";
echo "<script>alert('Message has been sent to chaphekarjay@gmail.com')</script>";

    

      }
      
      }    
    
    
    






?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
        //alert('In!')
        var fn = document.getElementById('fn').value;
        var ln = document.getElementById('ln').value;
        var c = document.getElementById('c').value;
        var e = document.getElementById('e').value;
        var cn = document.getElementById('cn').value;
        var cr=/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;
        var er=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var cnre = cr.test(cn);
        var ere= er.test(e);
        //alert(fn);
        if(fn=="" )
        {
          //alert('Invalid Name')
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
        if(cn=="" )
        {
          document.getElementById('cnerr').innerHTML ="Please Enter Valid Contact";
                    return false;
        }
        if(cnre==false)
        {
          document.getElementById('cnerr').innerHTML ="Please Enter Valid Contact";
                    return false;
        }
        if(ere==false)
        {
          document.getElementById('eerr').innerHTML ="Please Enter Valid Email";
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



                            
                    
                        </ul>
                    </nav>
        </header>
        <section style="align-content: center;align-self:center; margin-left: 20px">
            <br>
            <br>
            <br>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

            <form method="post">
            <div class="box">
                
            <h1>Have a project to discuss?</h1>
            
            <label style="float: left">First Name</label>
            <input type="text" style="float: left; margin-left: 40px" name="fn" id="fn" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="fnerr" name="eerr"><?php echo $fn_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Last Name</label>
            <input type="text" style="float: left;margin-left: 40px" name="ln" id="ln" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="lnerr" name="eerr"><?php echo $ln_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Company</label>
            <input type="text" style="float: left;margin-left: 50px" name="c" id="c" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="cerr" name="eerr"><?php echo $c_err; ?></span>
																								</div>
            <br>
            <label style="float: left">Email</label>
            <input type="email" style="float: left;margin-left: 82px" name="e" id="e" required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="eerr" name="eerr"><?php echo $e_err; ?></span>
																								</div>
            <br>
            
            <label style="float: left">Contact</label>
            <input type="text" style="float: left;margin-left: 65px" name="cn" id="cn" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" title="Contact should only contain ( or - or space. " required/>
            <div>
                                                <span class="help-block" style="color:red;font-size:small" id="cnerr" name="eerr"><?php echo $cn_err; ?></span>
																								</div>
            <Br>
           
              
            <a href="#" style="float: right; margin-right:225px"><div> <button name="cs" id="btn2" onclick="val()">Submit </button></div></a> <!-- End Btn2 -->
            

            </div> <!-- End Box -->
              
            </form>
            
           
              
                <form  method="post" action="">
                       
                      
                        <div class="container">
                          </section>
        <br>
        <br>
        <br>
        <br>
        <section>
            <h1 style="color: white">Contact Information</h1>

            <h2> Jay Nitin Chaphekar<br>
                Email: Chaphekarjay@gmail.com<br>
            Contact: +1 682-283-4702</h2>
            </section>
            












            
        </section>
        <section> <footer>Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>