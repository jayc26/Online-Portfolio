<?php 
session_start();

$role="";
if (isset($_SESSION['username'])){

    $role=$_SESSION['Role'];
}
require_once 'includes/config.php';

$si = "SELECT * FROM projects";
$r = mysqli_query($conn,$si);
if (isset($_POST['all'])){
    $si = "SELECT * FROM projects";
$r = mysqli_query($conn,$si);
}
if (isset($_POST['websites'])){
    $si = "SELECT * FROM projects where category='Website'";
$r = mysqli_query($conn,$si);
}
if (isset($_POST['app'])){
    $si = "SELECT * FROM projects where category='Mobile Application'";
$r = mysqli_query($conn,$si);
}
if (isset($_POST['analytics'])){
    $si = "SELECT * FROM projects where category='Research'";
$r = mysqli_query($conn,$si);
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="portfolio.css">
<style>
.grid-container {
  display: grid;
  grid-template-columns: 400px 400px 400px;
  grid-gap: 2px;
  float: left;
  padding: 10px;
}

.grid-container > div {
  float: left;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}


</style>

</head>

<body style="background-color:#05021B">
        <div id="wrapper">
                <header style="top: 0; position:fixed;width:100%; text-align: center">
            
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
        <section style="margin-left: 70px">
            <br><br><br><br><br>
           
           
            <p ><b style="color: white; font-size:xx-large">MY LATEST WORK</b>
            </br> </br> </br>
            I'm looking to expand my portfolio while I'm on top and while I'm young.</br>
            Jay Chaphekar brings your content to life in stunning clarity.
 </p>
        </section>
        <br>
        <br>
        <section style="margin-left:180px;">
        <form  method="post" action="">
            <button style="background:transparent; border-color:aquamarine; color: white; height: 25px" name="all">
                All
            </button>
            <button style="background:transparent; border-color:aquamarine;color: white; height: 25px" name="websites">
                    Websites
                </button>
                <button style="background:transparent; border-color:aquamarine; color: white; height: 25px" name="app">
                        Applications
                    </button>
                    <button style="background:transparent; border-color:aquamarine; color: white;height: 25px" name="analytics">
                           Analytics
                        </button>
                        </form>
        </section>
       
            
        <section style="float: left;">
            <div class="grid-container">
            <?php 
            while($row = mysqli_fetch_array($r)){
                 $pname=$row['pname'];
            ?>
                <div class="item1" style="float: left;">
                        <p style="font-size: 18px; margin-right: 20px;  margin-top: 50px; float: right; width: 10%">  <b><?php echo $row['description']?></b>
                           <br> <?php echo $row['category']?>
                           <br>
                           <br>
                           <?php echo $row['pname']?>
                            </p>
                            <?php
            $q = "SELECT * FROM uploads where ides='$pname'";
            $i = mysqli_query($conn,$q);
            while($re = mysqli_fetch_array($i)){
            ?>
                        <img src="images//<?php echo $re['img'] ?>" alt="" style="height: 220px; margin-top: 10; position: absolute;"/>

            <?php } ?>
                        <hr style="width: 200px; height:10px; background-color:darkslategrey; border:1px solid black; border-radius: 5px; margin-top: 200px; margin-left: 200px">
                   
                    
                  

                </div>
            <?php } ?>
                
               
              </div>
        </section>
              
              
   
        <section> <footer style="width:100%; position: fixed; bottom:0">Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>
