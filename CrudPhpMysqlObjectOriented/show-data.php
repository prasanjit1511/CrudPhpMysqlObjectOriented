<?php
include 'database.php';

$obj = new Database();


// test folder -> pagination //join
$colName="forenkey.id, forenkey.name, forenkey.age, city.cityname";
$limit = 3;
$join = "city ON forenkey.city = city.cid";

 $obj->select('forenkey','*',$join,null,null,$limit );         // *  dile sob dekha jabe
$result=$obj->getResult();

echo "<table border='1' width='500px'>

        <tr>
           <th> Id </th>
           <th> Name </th>
           <th> Age </th>
           <th> City </th>


        </tr>

";

foreach($result as list("id"=>$id,"name"=>$name,"age"=>$age,"cityname"=>$city)){

    echo "<tr><td>$id </td><td> $name </td><td> $age </td><td> $city</td></tr>"."<br>";

}
echo "</table>";

 echo $obj->pagination('forenkey',$join,null,$limit); 
//  echo"Select result is : ";
//  echo "<pre>";
//  print_r($obj->getResult());
//  echo "</pre>";



?>