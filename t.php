<?php
                                                         //function
function myMessage() {
    echo "Hello world!";
  }
  
  myMessage();
  echo "<hr>"; 
  function familyName($fname, $year) {
    echo "$fname  $year <br>";
  }
  
  familyName("sa","1909");
  familyName("sa","1921");
  familyName("ss Jim","1920");

  echo "<hr>"; 


  $t = date("11");
  if ($t < "10") {                                                  // elseif          //smool            
    echo "Have a good morning!";
  } elseif ($t < "20") {                         
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  echo "<hr>"; 

  $color = "blue";

  switch ($color) {
    case "red":
      echo " color is red!";
      break;
    case "blue":
      echo "  color is blue!";
      break;
    case "green":
      echo "color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }
  













?>