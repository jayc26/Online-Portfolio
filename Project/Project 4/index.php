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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

</style>
</head>

<body background="images//background.jpg">
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
        <section >
        <section >
                
                <h1 align="center" style="color: white; margin-top:150px; font-size:xx-large"> Welcome to my Website</h1>
                <p align="center" style="color:wheat">
                    It is a great pleasure for me to receive your visit and</br> that
                    my professional infromation is of your liking and meets what you are looking for.
                </br>
                
                </p>
                <?php
                                  if (!isset($_SESSION['username'])){
									?>
                <a href="login.php">  <button type="button" style="margin-left:550px; margin-top: 50px; width:220px; height: 50px"><i class="fas fa-download"></i> Download Resume </button></a>
                                  <?php } 
                                  else{?>

                                 
                <a href="JResume.pdf" download>  <button type="button" style="margin-left:550px; margin-top: 50px; width:220px; height: 50px"><i class="fas fa-download"></i> Download Resume </button></a>
                                  <?php } ?>
        </section>
        <br>
        <br>
        <br>
        <br>
        <section> <footer style="width:100%; position:fixed; bottom:0">
            
              
            
            
            
            
            Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>
