<?php 
session_start();
$role="";
if (isset($_SESSION['username'])){

    $role=$_SESSION['Role'];
}

if($role!="Admin")
{
    header("Location: skills.php"); 
}
require_once 'includes/config.php';
if(isset($_POST['Edit']))
										 {
												
                                            $ed=$_POST['Ec'];
                                            //echo"<script>alert('$ed');</script>";
                                            $_SESSION['Ec'] = $ed;
                                            header("Location: edit.php");
                                             
                                         }
                                         if(isset($_POST['Del']))
                                         {
                                            $ed=$_POST['Ec'];

                                         }
                                         if(isset($_POST['Edite']))
										 {
                                            $edd=$_POST['Ee'];
                                            $_SESSION['Ee'] = $edd;
                                            header("Location: eedit.php");
                                         }
                                         if(isset($_POST['Del']))
										 {
                                            $ede=$_POST['Ec'];
                                            $gl="<script>
                                            confirm('Hello') </script>";
                                            echo "<script>
                                            alert('$gl') </script>";
                                            //echo "<script>
                                            //confirm('Hello') </script>";

                                         }
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="portfolio.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function delw(i)
{
    if(confirm("Are you sure you want to delete"))
    {
    var data = {
												
												i: i
											};
				
											
											
											$.post("delw.php",data);
											alert('Record Deleted Successfully');
											window.location.assign("askills.php");
    }
    return false;
}

function dele(i)
{
    if(confirm("Are you sure you want to delete"))
    {
    var data = {
												
												i: i
											};
				
											
											
											$.post("dele.php",data);
											alert('Record Deleted Successfully');
											window.location.assign("askills.php");
    }
    return false;
}
</script>

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

        <section style="width: 30%; margin-top: 80px; margin-left: 5%"> 
                <p  style="float: right; margin-left: 400px"><b style="color: white; font-size:55px;">SKILLS & EXPERTISE</b>
               
               
                </p>
                <p style="margin-right:0px; float: right">Web Developer and Front end designer.</p> 
            </br>
           
            <img src="images//profile1.png" alt="profile" style="height: 70%; width: 70%;float: right"/>
        </section>
        <section style=" width:50%;float: right; margin-left: 550px; margin-top: 20px; position: absolute">
            <div style="position: absolute;margin-left: 100px;">
            <img src="images//branding.png" alt="" style="border-radius: 50%; background-color:white;"/>
            <p><b>Branding</b> <br><br>Branding your product</p>
            </div>
            <div style="position: absolute; margin-left:500px; margin-top: 10px">
            <img src="images//paint.png" alt="" style="border-radius: 50%; background-color:white;" />
            <p><b>Designing</b> <br><br>Designing with grace</p>
        </div>
        <div style="position: absolute; margin-top: 160px;margin-left: 100px;">
            <img src="images//desktop.png" alt="" style="  position: relative;border-radius: 50%; background-color:white; margin-top: 10px "/>
            <p><b>Technology</b> <br><br>Looks as they should be</p>
        </div>
        <div style="position: absolute; margin-left:500px; margin-top: 190px">
            <img src="images//code.png" alt="" style="border-radius: 50%; background-color:white"/>
            <p><b>Coding</b> <br><br>Creating the masterpiece</p>
        </div>
        <div style="position: absolute; margin-left:100px; margin-top: 300px">
            <br>
       <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label style="color: white; font-size:24px">Web Developer</label> &nbsp; &nbsp;<label style="font-size: 24px"> PHP Developer</label>
   <br>
    <img src="images//device01.png" alt="img" style="width: 30%;"/>
    <img src="images//device02.png" alt="img"  style="width: 30%"/>
    <img src="images//device03.png" alt="img"  style="width: 30%"/>
    </p>
        </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br> <br>
        <br>
        <br> <br>
        <br>
        <br> <br>
        <br>
        <br> <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br>
        <section style="margin-left: 70px">
            
            <br><br><br>
           
            <p ><b style="color: white; font-size:xx-large">WORK EXPERIENCE</b>
            </br> </br> </br>
            I'm looking to expand my portfolio while I'm on top and while I'm young.</br>
            Jay Chaphekar brings your content to life in stunning clarity.
            <a href="addw.php"><button style="float:right; margin-right:100px">Add</button></a>
            </p>
        </br>
        <br>
        
       
        
       
        
              </section>
              <?php
            $sql = "SELECT * FROM experience";
            $res_dat = mysqli_query($conn,$sql);
            ?>
            <section style="margin-left: 70px">
            <?php 
            while($row = mysqli_fetch_array($res_dat)){

            ?>
                    <form method="post">
                    <input type="hidden" name='Ec' value="<?php echo $row['id']?>"  />
                    <button style="float:right; margin-right:80px;" name="Edit">Edit</button>
                    <button style="float:right; margin-right:50px;" name="Del" Onclick="delw('<?php echo $row['id']?>'); return false;">Delete</button>
                    </form>
                    <div class="vl" style=" border-left: 2px solid white;
                    height: 180px;
                    position: absolute;
                    left: 50%;
                    margin-left: -3px;"></div>
                    
                    <section style="position:absolute;margin-left:700px; margin-top:10px">
                    
                    
                    <p ><h1><?php echo $row['job_type']?></h1><br>
                    <?php echo $row['description']?>
                   
                    </p>
                </section>
                
                   <p><b style="font-size:small;color:white"><?php echo $row['start_month']?></b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:small;color:white"><?php echo $row['end_month']?></b>
                    <br>
                    <label style="font-size: xx-large; color: aqua"><?php echo $row['start_year']?></label> <label style="font-size:50px; color: aqua">  - </label ><label style="font-size: xx-large; color: aqua"><?php echo $row['end_year']?></label>
                    <br> <br> <br>
                    <label style="font-size:16px; color:white"><?php echo $row['company_name']?></label> 
            
                    <br>
                    <label style="font-size:12px; color:#77777"><?php echo $row['pos']?></label> 
                </p>
                
               <br>
               <br>
                <hr style="width: 90%">  
                <br>
                <br>
                <br>
                <?php } ?>


            </section>
           
            <section style="margin-left: 70px">
            <?php
            $sql = "SELECT * FROM education";
            $res_data = mysqli_query($conn,$sql);
            ?>
            
                <br><br><br>
               
                <p ><b style="color: white; font-size:xx-large">Education</b>
                </br> </br> </br>
                I'm looking to expand my portfolio while I'm on top and while I'm young.</br>
                Jay Chaphekar brings your content to life in stunning clarity.
                <a href="adde.php"><button style="float:right; margin-right:100px">Add</button></a>
                </p>
            </br>
            <br>
            <?php 
            while($row = mysqli_fetch_array($res_data)){

            ?>
            <form method="post">
                    <input type="hidden" name='Ee' value="<?php echo $row['id']?>"  />
                    <button style="float:right; margin-right:80px;" name="Edite">Edit</button>
                    <button style="float:right; margin-right:50px;" name="Dele" Onclick="dele('<?php echo $row['id']?>'); return false;">Delete</button>
                    </form>
            <div class="vl" style=" border-left: 2px solid white;
            height: 180px;
            position: absolute;
            left: 50%;
            margin-left: -3px;"></div>
           
            <section style="position:absolute;margin-left:700px; margin-top:10px">
            <p ><h1><?php echo $row['degree']?></h1><br>
            <?php echo $row['d_name']?>
               
            </p>
        </section>
           <p><b style="font-size:small;color:white"><?php echo $row['start_month']?></b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size:small;color:white"><?php echo $row['end_month']?></b>
            <br>
            <label style="font-size: xx-large; color: aqua"><?php echo $row['start_year']?></label> <label style="font-size:50px; color: aqua">  - </label ><label style="font-size: xx-large; color: aqua"><?php echo $row['end_year']?></label>
            <br> <br> <br>
            <label style="font-size:16px; color:white"><?php echo $row['institution_name']?></label> 
    
            <br>
            <label style="font-size:12px; color:#77777"><?php echo $row['type']?></label> 
        </p>
        
       <br>
       <br>
        <hr style="width: 90%">  
        <br>
        <br>
        <?php } ?>  
                  </section>
            
    
               
                   
                
        <br>
        <br>
        <br>
        <br>
        <section> <footer style="width:100%; position:static; bottom:0">Copyrights Jay Chaphekar 2019 &copy;</footer></section>
       
    </div>
</body>

</html>
