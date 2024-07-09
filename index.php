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
//   $a=array("asal","Alaa","RGD","Mothan");
//   echo $a[1];
//   echo"<br>";
//   $a["0"]="asal";
//   $a["1"]="asool";
//   $a["2"]="asoolat";
//   $a["3"]="bkam";
//   $a["4"]="yellow";
//   echo $a["3"];
//   echo "<hr>";

//   //Associative                                          
//   $age=array("asal"=>23,"ala"=>26,"rgd"=>27);
//   echo $age["asal"];
//                    echo"<br>";
//   $age["rgd"]=27;                  
//   $age["ala"]=26;
//   $age["asal"]=23;
//   echo $age["ala"];
//   echo "<hr>";

//   //Multidimensional                                                //بعددلي اكثر من شغله 
// $user=array( 
//   array("asal","mm",23),
//   array("soso","cc",50),
//   array("shoso","dd",40),
// );
// echo $user[0][1]."<br>".$user[1][0];

  




 

  // $x = 5;  
  // $y = 10;
  
  // echo ($x <=> $y); 

  // echo "<br>";



  
  // $part1 = "I am learning";
  // $part2 = " PHP";
  // $part3 = " and it is";
  // $part4 = " fun!";
  
  // $sentence = $part1 . $part2 . $part3 . $part4;
  
  // echo $sentence;    
  // echo"<br>";
  



  $greeting = "Hello";                         //Concatenation Assignment
  $greeting .= " World";
  $greeting .= "!";  
  
  echo $greeting; 

  echo "<br>";
$firstName = "asal";
$lastName = "alhawari";
$fullName = $firstName . " " . $lastName;              // Concatenation Operator

echo $fullName;  

echo "<br>";

$part1 = "Hello it`s me";
$part2 = ' asal';
$part3 = " alhawari";
$part4 = " from karak";

$sentence = $part1 . $part2 . $part3 . $part4;

echo $sentence;  


echo "<br>";

$x = "Bkam";
$y = "fasfuri";
$z = "$x $y";
echo $z;

echo "<br>";

//strlen                                  //عدد الاحرف في النص 
$text ="Hello ,World!";
$length = strlen($text);

echo $length; 



echo "<br>";
 
//strpos


$text = "Hello, World!";
$numlength = strpos($text, "World");    

echo $numlength;  

echo "<br>";
//substr


$text = "Hello, World!";
$substring = substr($text, 7, 5);

echo $substring;  

echo "<br>";

//str_replace
$text = "Hello, World!";
$newText = str_replace("World","PHP", $text);

echo $newText;  



echo "<br>";
 

$text = "Hello, World!";
$Textupper = strtoupper($text);
$Textlower = strtolower($text);

echo $Textlower;  
echo "<br>";
echo $Textupper;  


echo "<br>";


$text = "apple,banana,cherry";
$array = explode(",", $text);

print_r($array);   

// $array = ["apple", "banana", "cherry"];
// $text = implode("-", $array); 

// print_r($text);  



//trim بتشيل الspice
//slice بتمشي العكس (-) ببلش من 1نعد
//substr


?>