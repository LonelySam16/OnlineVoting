<?php

session_start();

    if(!isset($_SESSION['id'])){
        header("location: ../");
    }

$groups = $_SESSION['groups'];
$voters = $_SESSION['voters'];

$red = rand(0, 255);
$green = rand(0, 255);
$blue = rand(0, 255);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Histogram</title>
<style>
   .whole {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: space-around;
        align-items: flex-end;
        flex-direction: row;
        /* background-color: black; */
    }

    .histogram-container {
        /* width: 50vw; */
        width: 50%;
        margin: 0 auto;
        height: auto;
        display: flex;
        justify-content: space-around;
        align-items: flex-end;
        flex-direction: row;
        gap: 10px;

    }

    .histogram-bar {
        width: 40px;
       display: flex;
       justify-content: center;
       align-items: center;
       
       box-shadow: 5px -2px 10px black;
       /* background-color: white; */
       transition: transform 0.3s ;
       
       
 
    }
   
    .histogram-bar-cont 
    {
      margin: 0 2px;
      display: flex;
      flex-direction: column;
      justify-content:space-between;
      
     
    }
    .histogram-bar:hover
    {
        transform: scale(1.2);
    }
    .histogram-index
    {   
        
        
        width: auto;
        display: flex;
        flex-direction: row;
        gap: 5px;
        
    }
    .users
    {
        width: 35vw;
        display: flex;
        flex-direction: column;
        gap: 15px;

    }
    .userinside
    {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        
        
        
    }
</style>

<link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>

            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            <h1>Admin Dashboard </h1>  
            </div>
            </center>
            <hr>
            <br><br>
       <div class="whole">     
            
       <div id="profileSection">
       <center><h1>Poll Status</h1> <hr></center>

       <br>
       
                <div class="histogram-container" >
                
                    <?php for($i=0; $i<count($groups); $i++)
                    { 
                        ?>

                    <?php 
                    $red = rand(0, 255);
                    $green = rand(0, 255);
                    $blue = rand(0, 255);
                    ?>
                        <div class="histogram-bar-cont">

                        <div class="histogram-bar" style="height: <?php echo $groups[$i]['votes'] * 40;?>px; background-color: rgb(<?php echo $red.",".$green.",".$blue?>)">
                        
                        <h1><?php echo $groups[$i]['votes']; ?></h1>
                        
                        </div>
                        <br><br>

                        
                        <div class="histogram-index">
                            <div style="height: 20px ;width: 20px; background-color: rgb(<?php echo $red.",".$green.",".$blue?>);border: 1px solid black;
        box-sizing: border-box;">
                            </div>
                            
                        <div>
                        <?php echo $groups[$i]['name']; ?> 

                        </div>
                        </div>
                        

                        
                        </div>
                    
                    
                    
                
        
            
                    <?php } ?>
                </div>
                </div>
                
            <div class="users" id="profileSection">
            <center><h1>Already Voted</h1> <hr></center>
            <?php for($i=0; $i<count($voters); $i++)
                    { 
                        ?>
                        <div class="userinside">
                            <img src="../uploads/<?php echo $voters[$i]['photo']?>" height="50" width=auto>
                            <h3><?php echo $voters[$i]['name']; ?></h3>
                            </div>

              <?php } ?>
                

            </div>
    </div>
</body>
</html>
