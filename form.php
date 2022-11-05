<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>php form Design</title>
    <style>
        body{
        
            background-color: rgb(73, 73, 69);
        }
        .header{
            color: white;
            text-align: center;
           margin-top: 7px;
       

        }
        .footer{padding:5px;}
        
        .footer button:hover{background:green;}
        
    </style>
</head>
<body>
<div class=" col-4 mx-auto mt-5  bg-info">
   
    <h2 class="header">Registration Form</h2>

<form action="form2.php" method="post">
    <label class="w-100">
        First Name :
        <input type="text" class="form-control " name="firstname">
    </label> 
    <label class="w-100">
        Last Name :
        <input type="text" class="form-control" name="lname">
    </label> 
   
                    <label class="w-100" >Email :
                        <input type="email" class="form-control" id="inputEmail4">
                    </label>

                    <label class="w-100">Password :
                        <input type="password" class="form-control" id="inputPassword4">
                    </label>
      <div class="form-row">

        <label class="col md-6">Date :

            <input type="date" class="form-control" name="date">

        </label> 

        <label class="col md-6">Address :
             <input type="text" class="form-control" name="address"> 
        </label> 
        
      </div>

      <div class="form-row">
      <label class="col md-6"> Birthyear :
        <select name="" id="">
                <?php
                for($y=2022;$y>=2000;$y--){
                    echo"<option >$y</option>";
                }
                ?>
        </select>

        </label>
        <label class="col md-6">District :
           
            <select name="" id="">
                <?php

                $d=["Chittagong","Dhaka","Sylhet","comilla"];
                for($i=0;$i<count($d);$i++){
                    $b=$d[$i];
                    echo"<option>$b</option>";
                    echo"<br>";
                }


                ?>
            </select>
        </label>

      </div>
      

      <div class="footer">
      <button class="btn btn-primary mb-3 w-100 rounded-0">Submit</button>
    
      </div>
   
    
    </form>

</div>
   
</body>
</html>