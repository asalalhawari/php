<?php   
//PHP Day 1 Tasks


$cities = array("Alkarak", "London", "Jerash", "Iraq", "Sudan", "Türkiye", "Egypt");   //(1)


echo "Cities array";               //(2)
print_r($cities);

echo "<hr>"; 
  
$city = "London";


$index = array_search($city , $cities);                    //(3)

if ($index !== true) {                                  //اذا تم العثور على londonاعطيني الondex تبعها
    echo " $city . $index";
} else {
    echo " not  array.";
}



echo "<hr>"; 

$cityremove = "Türkiye";

 
if ($index !== false) {
    unset($cities[$index]);                       //(4)
    echo "'$cityremove' has been removed from the array.<br>";
} else {
    echo "'$cityremove' not found in the array.<br>";
}
// print_r($cities);


//(5)
 
echo "<hr>";                                               

$cities = array("Alkarak", "London", "Jerash", "Iraq", "Sudan", "Türkiye", "Egypt");


$sub_array = array_slice($cities, 0, 3);                      //slice  انه اقطعيلي او وقفيلي لعند رقم معين 



print_r($sub_array);

echo "<hr>";     
//task(2)




$products = array(                                        //(1)
    "blueberry" => 1.25,
    "watermelon" => 0.75,
    "Apple" => 2.50,

);


print_r($products);                                         //(2)


















?>