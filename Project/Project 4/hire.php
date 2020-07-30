<?php 
session_start();
$role="";
if (isset($_SESSION['username'])){

    $role=$_SESSION['Role'];
}

require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="portfolio.css">
<style>
    
  ul.nn {
  list-style: none;
}

ul.nn li:before {
  content: '✓';
}





</style>
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
                        </ul>
                    </nav>
        </header>
        <br><br><br>
        <section style="margin-left: 70px;margin-top: 50px;">
           
           
            <p ><b style="color: white; font-size:xx-large">WORK EXPERIENCE</b>
            </br> </br> </br>
            I'm looking to expand my portfolio while I'm on top and while I'm young.</br>
            Jay Chaphekar brings your content to life in stunning clarity.
            </p>
        </br>
        <br>
        </section>
        <?php
            $sql = "SELECT * FROM jobprofile";
            $res_dat = mysqli_query($conn,$sql);
            ?>
            
            <?php 
            while($row = mysqli_fetch_array($res_dat)){
                 $pname=$row['job_profile'];
            ?>

        <section style="margin-left: 70px">
        
            <div class="vl" style=" border-left: 2px solid white;
            height: 250px;
            position: absolute;
            left: 40%;
            margin-left: -3px;"></div>
            
            <section style="position:absolute;margin-left:500px; margin-top:10px">
            <p ><label style="font-size:x-large">$<?php echo $row['rate']?></label><br>
                <label style="font-size:x-large"><b> <?php echo $row['job_profile']?></b></label><br>
                <ul class="nn">
                <?php
                 $s = "SELECT * FROM perks where project='$pname'";
                 $res = mysqli_query($conn,$s);
                 while($row1 = mysqli_fetch_array($res)){
                 ?>
                    <li><?php echo $row1['pd']?></li>
                 <?php } ?>
                </ul>
              
            </p>
        </section>
        <?php
            $si = "SELECT * FROM uploads where ides='$pname'";
            $r = mysqli_query($conn,$si);
            ?>
            
            <?php 
            while($rowi = mysqli_fetch_array($r)){
                 
            ?>
          <img src="images//<?php echo $rowi['img'];?>" alt="<?php echo $rowi['img'];?>" style="height: 200px;width:300px; margin-left: 100px;"/>
            <?php } ?>
            <br>
            
        
       <br>
       <br>
       
        <br>
        <br>
                 



    </section>
    <hr style="width: 90%">   
    <br>
    <br>
    <br>
    <?php } ?>
           
    <br>
    <br>
    <br>
    <section style="margin-left: 50px"> 
        <p  ><b style="color: white; font-size:55px;">SKILLS & KNOWLEDGE</b><br> <br> <br>

            I'm looking to expand my portfolio while I'm on top and while I'm young.</br>
            Jay Chaphekar brings your content to life in stunning clarity.
       
       
        </p>
    </section><br> <br> <br>
    <section>
        <div style="float: right">
                <p  ><b style="color: white; font-size:24px;">RESEARCH</b><br> <br> <br>
</p>
                <label style="margin-right: 450px; color: aqua">
                        <i class="fas fa-newspaper" style="color: white; font-size:44px; border:1px solid aqua; padding:10px"></i> 
                         Review Article on Smart Cities in Big Data<br>

                       
                    </label><br>
                    <label style="margin-right: 450px; color: aqua">
                            <i class="fas fa-chart-bar" style="color: white; font-size:44px; border:1px solid aqua; padding:10px"></i> 
                             Research project on Airfare and Airdata Analysis<br>
                             
                        </label>
                   

                      
                 

        </div>
          
        <div style="margin-left: 50px; height:50%"> 
        <p  ><b style="color: white; font-size:24px;">SOFTWARE</b><br> <br> <br>
            HTML <br>
            <label style="color:white;background-color:royalblue; float: right; margin-right: 325px; padding: 3px; border: 2px solid aqua">95%</label>
            <progress value="95" max="100" style="background: royalblue; width:40%; height: 10px;">
               
            </progress><br> <br><br>
            CSS <br>
            <label style="color:white;background-color:royalblue; float: right; margin-right: 350px; padding: 3px; border: 2px solid aqua">90%</label>

            <progress value="90" max="100" style="background:royalblue; width:40%;height: 10px">
            </progress><br> <br><br>
            PHP <br>
            <label style="color:white;background-color:royalblue; float: right; margin-right: 800px; padding: 3px; border: 2px solid aqua">96%</label>

            <progress value="96" max="100" style="background:royalblue; width:40%;height: 10px">
            </progress><br><br><br>
            JAVA <br>
            <label style="color:white;background-color:royalblue; float: right; margin-right: 870px; padding: 3px; border: 2px solid aqua">80%</label>

            <progress value="80" max="100" style="background:royalblue; width:40%;height: 10px">
            </progress><br><br><br>
            PYTHON <br>
            <label style="color:white;background-color:royalblue; float: right; margin-right: 920px; padding: 3px; border: 2px solid aqua">70%</label>

            <progress value="70" max="100" style="Background:royalblue; width:40%;height: 10px">
            </progress><br><br><br>
            C <br>
            <label style="color:white;background-color:royalblue; float: right; margin-right: 870px; padding: 3px; border: 2px solid aqua">80%</label>

            <progress value="80" max="100" style="background:royalblue; width:40%;height: 10px">
            </progress><br><br><br>
            C++ <br>
            <label style="color:white;background-color:royalblue; float: right; margin-right: 870px; padding: 3px; border: 2px solid aqua">80%</label>

            <progress value="80" max="100" style="background:royalblue; width:40%;height: 10px">
            </progress><br>
            </p>
        </div>
       
    </section>
    <br> <br> <br>
    <section >
            <div style="float: left; margin-left: 50px">
                    <p  ><b style="color: white; font-size:24px;">LANGUAGES</b><br> <br> <br>  
                        English <br>
            <progress value="95" max="100" style="background: royalblue;  height: 10px;">
               
            </progress><br> <br><br>
            Hindi <br>

            <progress value="90" max="100" style="background:royalblue;height: 10px">
            </progress><br> <br><br>
            Marathi <br>

            <progress value="96" max="100" style="background:royalblue;height: 10px">
            </progress><br><br><br>
    
    
            </div>
        <div style="float: right; margin-right: 50px; position: absolute; margin-left: 900px">
                <p  ><b style="color: white; font-size:24px;">KNOWLEDGE & FRAMEWORKS</b><br>   
                    <ul class="nn" style="margin-right: 20px; columns:2; -webkit-columns:2; -moz-columns:2; padding: 50px">
                        <li>Android Studio</li>
                        <li>VS Studio</li>
                        <li>SQL Server</li>
                        <li>Anylogic</li>
                        <li>R Studio</li>
                        <li>Photoshop</li>
                        <li>Basic App development</li>
                 
                     
                    </ul> 
        </div>
      
          
    </section>
    <br>
    <section style="margin-top: 350px; align-content: center">
            <p  ><b style="color: white; font-size:24px; align-content: center; margin-left: 10px;">HOBBIES & INTERESTS</b></p><br>  <br> 
                <label style="position: absolute; margin-bottom:80px; margin-left: 10px">
                <i class="fas fa-music" style="color: white; font-size:24px; border:1px solid aqua; padding:10px"></i> <br>
              <br>  Music
            </label>
            <label style="position: absolute; margin-bottom:80px; margin-left: 200px">
                    <i class="fas fa-swimmer" style="color: white; font-size:24px; border:1px solid aqua; padding:10px"></i> <br>
                    <br> Swimming
                </label>
                <label style="position: absolute; margin-bottom:80px; margin-left: 400px">
                        <i class=" fas fa-book-open" style="color: white; font-size:24px; border:1px solid aqua; padding:10px"></i> <br>
                        <br>  Reading
                    </label>
                    <label style="position: absolute; margin-bottom:80px; margin-left: 600px">
                            <i class=" fas fa-futbol" style="color: white; font-size:24px; border:1px solid aqua; padding:10px"></i> <br>
                            <br>   Football
                        </label>
                        <label style="position: absolute; margin-bottom:80px; margin-left: 800px">
                                <i class=" fas fa-film" style="color: white; font-size:24px; border:1px solid aqua; padding:10px"></i> <br>
                                <br>  Movies
                            </label>
                            <label style="position: absolute; margin-bottom:80px; margin-left: 1000px">
                                    <i class=" fas fa-tv" style="color: white; font-size:24px; border:1px solid aqua; padding:10px"></i> <br>
                                    <br>  TV
                                </label>
                                <label style="position: absolute; margin-bottom:80px; margin-left: 1200px">
                                        <i class=" fas fa-route" style="color: white; font-size:24px; border:1px solid aqua; padding:10px"></i> <br>
                                        <br> Travel
                                    </label>
    </section>
    
        <section> <footer style="width:100%; position:fixed; bottom:0">Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>
