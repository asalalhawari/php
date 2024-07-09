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
    unset($cities);                       //(4)
    echo "'$cityremove'  removed  array.<br>";
} else {
    echo "'$cityremove' not f array.<br>";
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


echo "<hr>"; 


$products = array(
    array("name" => "blueberry", "price" => 1.25),
    array("name" => "watermelon", "price" => 0.75),
    array("name" => "Apple", "price" => 2.50),
);

usort($products, function($a, $b) {
    return $a['price'] <=> $b['price'];
});

print_r($products);



echo "<hr>"; 



//task(3)
echo "<br>"; 
$books = array(
    array(
        "title" => "Suzuki s",
        "author" => "Suzuki",
        "year" => 1909
    ),
    array(
        "title" => "Suzuki b",
        "author" => "Suzuki",
        "year" => 1960
    ),
    array(
        "title" => "Suzuki book",
        "author" => "J.D. Salinger",
        "year" => 2001
    )
);

$newBook = array(
    "title" => "sdsdsdsd",                      //(3)
    "author" => "sdsdsd",
    "year" => 2003
);

$books[] = $newBook; 
print_r($books);                               //(2)
















?>