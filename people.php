<?php
class Person {
    public $name;
    public $email;
    public $progLangs = [];

    function set_name($name){
        $this->name = $name;
    }
    function set_email($email){
        $this->email = $email;
    }
    function set_progLangs($progLangs){
        $this->progLangs = $progLangs;
    }
    function get_name(){
        return $this->name;
    }
    function get_email(){
        return $this->email;
    }
    function get_progLangs(){
        return $this->progLangs;
    }
    function __constructor($name, $email, $progLangs){
        $this->name = $name;
        $this->email = $email;
        $this->progLangs = $progLangs;
    }
    function printLangs(array $langs) {
        foreach($langs as $item) {
        echo $item;
    }
}
}

$person1 = new Person("John", "Pork@gmail.com", array("C#", "C++", "php"));
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
        <li>Name: <?php echo $person1->get_name();?></li>
        <li>Email: <?php echo $person1->get_email();?></li>
        <li>Programming languages:  <?php printLangs($person1->get_progLangs()) ?></li>
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
