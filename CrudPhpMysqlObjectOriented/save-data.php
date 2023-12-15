<?php

include "database.php";
$obj = new Database();

$sname = $_POST['sname'];
$sage = $_POST['sage'];
$scity = $_POST['scity'];


$value = ["name"=> $sname, "age"=> $sage, "city"=> $scity];

if($obj->insert("forenkey", $value)){

    echo "<h2>Data Inserted successfully.<h2>";

}else{
    echo "<h2>Data Inserted Not successfully.<h2>";
}


?>