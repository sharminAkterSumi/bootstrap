<?php
    //1-10
    echo"<h4> for loop (1-10)</h4>";
    for($i=1;$i<=10;$i++){
        echo$i."<br>";
    }
    echo"<br>";
    $i=1;
    while($i<=10){
    echo str_repeat("I love Allah",$i) ."<br>";
    $i++;
}
    //10-1
    echo"<h4> for loop (10-1)</h4>";
    echo"<br>";
    for($i=10;$i>=1;$i--){
        echo$i."<br>";
    }
    echo"<br>";
    
    for ($i=1;$i<7;$i++){
        $b= str_repeat("*",$i); 
      
       echo"<span style='color:red';'margin:200;'>";
        echo$b."<br>";
        echo"</span>";                     
    
    };
     for($i=7;$i>0;$i--){
         echo"<span style='color:blue';'margin:200';>";
         echo str_repeat("*",$i)."<br>";
         echo"</span>";
     }
    echo"<h4> nested for loop</h4>";


    for($i=1;$i<=5;$i++){
            for($j=1;$j<=$i;$j++){
                echo"&nbsp;"."*";
                
            }
            echo"<br>";
    }
    echo"End"."<br>";
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo"&nbsp;&nbsp;";
            echo"$j";
            
        }
        echo"<br>";
}
echo"End"."<br>";
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo"&nbsp;&nbsp;";
        echo"$i";
        
    }
    echo"<br>";
}
echo"End"."<br>";
for($i=5;$i>=1;$i--){
   for($j=1;$j<=$i;$j++){
       echo"*";
      
   }
   echo"<br>";
}
for($i=1;$i<=5;$i++){
    echo  str_repeat("*",$i)."<br>";
  }
  for($t=1;$t<=10;$t++){
      $times_table=5*$t;
          echo"5*$t=$times_table<br>";
  }
  echo"<br>";
  //factorial problem
  $array=[10,20,30,90,100];
  $sum=0;
  for($i=0;$i<count($array);$i++){
     
      $sum+=$array[$i];
      echo$sum."<br>";
  }
  //nested for loop
  for($i=1;$i<=2;$i++){
      for($t=1;$t<=10;$t++){
          $times=$i*$t;
          echo "$i*$t=$times"."<br>";
      }

  }

  echo"<h2>while loop</h2>";
    $i=1;
    while($i<=5){
        echo$i."<br>";
        $i++;
    }
echo"<h2>do while loop</h2>";
    $i=1;
    do{
        echo$i;
        echo"<br>";
        $i++;
    }
    while($i<=5);
    echo"<br>";

    echo"<h3>foreach loop</h3>";
    $names=['Fatema','ilma','meem','shanta',];
    foreach($names as $name){
        echo$name;
        echo"<br>";
    };
echo"<h3>Associative Array in foreach loop</h3>"."<br>";
    
    $users=[
        'a'=>'sumi',
        'b'=>"moni",
        'c'=>"shanta",
    ];
    foreach($users as $key=>$value){
       echo$value;
    
        echo"<br>";
    }
    
    //7*6*5*4*3*2*1=5040
$fac=1;
for($i=7;$i>1;$i--){
    $fac=$i*$fac;
    
}
echo "The factorial of number 7 is $fac";
 echo"<br>";
 //1*2*3*4*5=120
 $fac=1;
 for($i=1;$i<=5;$i++){
     $fac*=$i;
 }
 echo" The factorial of number 5 is  $fac";
 echo"<br>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h2>create a table using php loop</h2>
<table height="500px" 
width="500px"
border="1px">
<?php
     for($r=1;$r<=10;$r++){
        echo"<tr>";

        for($c=1;$c<=10;$c++){
            $total=$r+$c;
           
            if($total%2==0){
                echo'<td height="50px" width="50px" bgcolor="black">';
            }
            else{
                echo'<td height="50px" width="50px" bgcolor="white">';
            }
        }

        echo"</tr>";
    }
?>
</table>
<h2>Options</h2>
<select name="" id="">
<?php
  for($y=2022;$y>=2000;$y--){
      echo"<option >$y</option>";
  }
?>
</select>
<select name="" id="">
<?php

$a=['sumi','shanta','moni'];
for($i=0;$i<count($a);$i++){
    $b=$a[$i];
    echo"<option>$b</option>";
    echo"<br>";
}


?>
</select>
<h3>Create a list using foreach loop</h3>
<ul>
<?php
     $names=['Fatema','ilma','meem','shanta',];
     foreach($names as $name){
         echo"<li>$name</li>";
         echo"<br>";
     }
?>
</ul> 
    
</body>
</html>
