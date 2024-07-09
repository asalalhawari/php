<?php

// // $name = "asal"; 
// // $age=23;
// // echo "<h1>".$name."<br>".$age. "</h1>";

// // echo "<br>";

// $a=5;
// $s=5;


// echo $a+$s;        
// echo "<hr>";
// //data type          //var بتعرفلي الdta نوعها ايش

// $name="asal";
// echo gettype($name);            //str

// echo "<hr>"; 

// $age=23;
// echo gettype($age);              //int

// echo "<hr>"; 

// $a=3.7;                 //float

// echo gettype($a);


// $m=true;                   //bol
// echo gettype($m);

// echo "<hr>"; 

// $color= array("rde","yellow");
// echo gettype($color);

// echo "<hr>"; 


// $l="155";
// $v="55";
// echo $l-$v;

// echo "<hr>"; 

// $l=100;
// $l+=100;
// echo $l;

// echo "<hr>";

// $age=50;

// if($age!==50)
// {
// echo "done";

// }

// else{
//     echo"x";
// }

// echo "<hr>"; 


// function myMessage() {
//     echo "Hello world!";
//   }
  
//   myMessage();

//   echo "<hr>"; 
  
///index
  $a=array("asal","Alaa","RGD","Mothan");
  echo $a["0"];
  echo"<br>";
  $a["0"]="asal";
  $a["1"]="asool";
  $a["2"]="asoolat";
  $a["3"]="bkam";
  $a["4"]="yellow";
  echo $a["0"];
  echo "<hr>";

  //Associative   
  $age=array("asal"=>23,"ala"=>26,"rgd"=>27);
  echo $age["asal"];
                   echo"<br>";
  $age["rgd"]=27;
  $age["ala"]=26;
  $age["asal"]=23;
  echo $age["ala"];
  echo "<hr>";

  //Multidimensional 
$user=array(
  array("asal","mm",23),
  array("soso","cc",50),
  array("shoso","dd",40),
);
echo $user[0][2]."<br>".$user[1][0];

  




 

  // $x = 5;  
  // $y = 10;
  
  // echo ($x <=> $y); 

  // echo "<br>";













?>