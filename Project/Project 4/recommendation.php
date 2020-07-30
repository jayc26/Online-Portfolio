<?php

session_start();
$role="";
if (isset($_SESSION['username'])){

    $role=$_SESSION['Role'];
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="portfolio.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                    </nav>
        </header>
        <p style="position: absolute; margin-left:500px; color: white; margin-top:300px">"As Always very Creative thinking for the best solution. Jay Chaphekar is by <br> far the most professionaland knowledgable provider I worked with I will <br> hire him again." <br> <br>
            Yuki Jajitszky</p>

        <section style="margin-left: 70px">
        </br> </br> </br>
            <p ><b style="color: white; font-size:50px">Recommendation</b>
          
            </p>
        </br>
        <br>
        
        <i class="fas fa-quote-right" style="color:white; background-color:aqua; font-size:60px; border-radius:50%;border:1px solid white;position:absolute; margin-left:200px"></i>
       <img src="images//yury.jpg" alt="reco" style="border-radius: 50%; width:300px; height:300px"/>


            </section>
              

   
        <section> <footer style="width:100%; position:fixed; bottom:0">Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>
