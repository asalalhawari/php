<?php
#task1+2-day1


// $fruits = array("banana", "Apple", "blueberry", "watermelon");

// print_r($fruits);    
  
// echo "<hr>"; 

#1+2

$fruits = array("blueberry", "banana", "watermelon", "mango");

foreach ($fruits as $fruit) {             //as يعني عرفلي ياها وحده بوحده 
    echo $fruit . "<br>";           
}

echo "<hr>"; 
  

#3
$fruits = array("apple", "banana", "blueberry", "mango");
$fruits[] = "pineapple";  

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<hr>"; 
#4


$fruits = array("apple", "banana", "watermelon", "blueberry");


array_pop($fruits); 


foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<hr>"; 
///

$fruits = array("apple", "banana", "mango", "grape");
$specific_fruit = "banana";
if (in_array($specific_fruit, $fruits)) {
    echo $specific_fruit . " available array.";
} else {             
    echo $specific_fruit . " unavailable array.";
}

echo "<hr>"; 

//task 2 (1+2) 
 
$persons= array(                  //(1)
    "asal" => 30,
    "asool" => 25,
    "asoolat" => 35,
    "aslat" => 28,
    "asoos" => 32,
);
$persons["abu karak"] = 52;     //(3)

unset($persons["asoos"]);    //(4)

foreach ($persons as $name => $age) {
    echo "Name: " . $name . ", Age: " . $age . "<br>";       //(2)
    
}
$name = "asool";           echo "<hr>";  
if (array_key_exists($name, $persons)) {
    echo "$name available array";
} else {
    echo "Key '$name' does not  array.";
}
echo "<hr>";  


//task3


// $students = array(
//     array("name" => "Ahmad", "age" => 20, "grade" => "A"),                    //(1)
//     array("name" => "jafar", "age" => 22, "grade" => "b"),
//     array("name" => "mohammad", "age" => 21, "grade" => "c")
// );
// $add_student = array("name" => "sabal", "age" => 24, "grade" => "A");           //(3)
// $students[] = $add_student;
// $add_grade = "b";

// $student_name_to_remove = "jafar";
// foreach ($students as  $student) {
//     if ($student['name'] == $student_name_to_remove) {                  //(5)
//         unset($students);
//     }
// }

// foreach ($students as $student) {                                      //(2)
//     echo "Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
// }
echo "<hr>";  




// $students = array(
//     array("name" => "Oday", "age" => 20, "grade" => "A"),                 //(1) نكتب الarray
//     array("name" => "Khalid", "age" => 22, "grade" => "B"),
//     array("name" => "Laith", "age" => 21, "grade" => "A-")
// );


//  //(2) نطبعهم
// foreach ($students as $student) {
//     echo "Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
// }
// echo "<br>";


// $add_student = array("name" => "Sami", "age" => 23, "grade" => "B+");                //(3)add
// $students[] = $add_student;



// // foreach ($students as $student) {
// //     echo "Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
// // }
// echo "<br>";


// // $student_name_to_update = "sami";
// // $new_grade = "A+";

// // foreach ($students as &$student) {
// //     if ($student['name'] == $student_name_to_update) {
// //         $student['grade'] = $new_grade;
// //         // break;
// //     }
// // }


// foreach ($students as $student) {
//     echo "Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
// }
// echo "<br>";

// $studentremove = "Oday";

// foreach ($students as  $student) {
//     if ($student == $studentremove) {
//         unset($students);
//         break;
//     }
// }

// foreach ($students as $student) {
//     echo "Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
// }















































?>