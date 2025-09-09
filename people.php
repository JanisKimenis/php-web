<?php
$info1 = array("name"=>"John", "email"=>"Pork@gmail.com", "programming-languages"=>array("C#", "C++", "php"));
$info2 = array("name"=>"Mike", "email"=>"Hawk@gmail.com", "programming-languages"=>array("Rust"));
$info3 = array("name"=>"Opium", "email"=>"User@gmail.com", "programming-languages"=>array("C#", "C++", "php", "Rust", "lua", "C", "js", "blockprogramming", "Ruby", "Java", "python", "mySQL", "R", "Luau"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <li>Name: <?php echo $info1["name"];?></li>
        <li>Email: <?php echo $info1["email"]?></li>
        <li>Programming languages:  <?php foreach($info1["programming-languages"] as $language){echo "$language  ";} ?></li>
    </ol>
    <ol>
        <li>Name: <?php echo $info2["name"];?></li>
        <li>Email: <?php echo $info2["email"]?></li>
        <li>Programming languages:  <?php foreach($info2["programming-languages"] as $language){echo "$language  ";} ?></li>
    </ol>
    <ol>
        <li>Name: <?php echo $info3["name"];?></li>
        <li>Email: <?php echo $info3["email"]?></li>
        <li>Programming languages:  <?php foreach($info3["programming-languages"] as $language){echo "$language  ";} ?></li>
    </ol>
    

    
</body>
</html>
