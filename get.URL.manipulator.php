<?php

$products = [
    ["name"=>"laptop" ,"category" => "tech"],
     ["name"=>"phone" ,"category" => "tech"],
      ["name"=>"tablet" ,"category" => "tech"],
       ["name"=>"headphones" ,"category" => "accessories"],
        ["name"=>"watch" ,"category" => "accessories"],
];
$category = " ";
if (isset($_GET['category'])){
    $category = $_GET['category'];
    $products = array_filter($products, function ($product) use ($category){
    return $product["category"] == $category;
   });
}


if(isset($_GET["sort"])){
    if($_GET["sort"] == "asc"){
   usort($products, function ($a, $b)
   {
return $a["name"]<=>$b["name"];
    });
    }
    else if ($_GET["sort"] == "desc"){
   usort($products, function ($a, $b)
{
return $b["name"]<=>$a["name"];
    });
  }
}

   
foreach($products as $product){
    echo $product["name"] . "<br>";
}

?>

<a href="?category=tech">Tech</a>
<a href="?category=accessories">Accessories</a>
<a href="?sort=asc">A - Z</a>
<a href="?sort=desc">Z - A</a>