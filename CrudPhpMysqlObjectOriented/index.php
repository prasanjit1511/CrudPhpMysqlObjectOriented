<?php
include 'database.php';

$obj = new Database();

// $obj->insert('studentss',['student_name'=>'Pro Kumer','age'=>'20','city'=>'Dahaka']);
// echo"Insert result is : ";
// print_r($obj->getResult());

// $obj->update('studentss',['student_name'=>'Pro Kumer Roy','age'=>'22','city'=>'Chandpur'],'id="3"');
// echo"upadte result is : ";
// print_r($obj->getResult());


// $obj->delete('studentss','id="3"'); //AND ba OR diyeo korte pari
// echo"delete result is : ";
// print_r($obj->getResult());


// $obj->sql('SELECT * FROM studentss WHERE age="20"'); //AND ba OR diyeo korte pari
// echo"sql result is : ";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

//  $obj->select('studentss','*',null,'city="Dahaka"','student_name',null); //AND ba OR diyeo korte pari //* => id,student_name jodi eigulu dekhte chai ,limit=> joto gulu record dekhte chai
//  echo"Select result is : ";
//  echo "<pre>";
//  print_r($obj->getResult());
//  echo "</pre>";

//pagination
//  $obj->select('studentss','*',null,null,null,2); 
//  echo"Select result is : ";
//   echo "<pre>";
//  print_r($obj->getResult());
//  echo "</pre>";

//  echo $obj->pagination('studentss',null,null,2); 
//  echo"Select result is : ";
//   echo "<pre>";
//  print_r($obj->getResult());
//  echo "</pre>";

//pagination Example
// $obj->select('studentss','*',null,null,null,2); 
// echo"Select result is : ";
//  echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

// echo $obj->pagination('studentss',null,'city="Dahaka"',2); 
// //  echo"Select result is : ";
// //   echo "<pre>";
// //  print_r($obj->getResult());
// //  echo "</pre>";



// test folder -> pagination //join
$colName="forenkey.id, forenkey.name, forenkey.age, city.cityname";
$limit = 2;
$join = "city ON forenkey.city = city.cid";

 $obj->select('forenkey', $colName,$join,null,null,$limit );         // *  dile sob dekha jabe
 echo"Select result is : ";
 echo "<pre>";
 print_r($obj->getResult());
 echo "</pre>";

 echo $obj->pagination('forenkey',$join,null,$limit); 
 echo"Select result is : ";
 echo "<pre>";
 print_r($obj->getResult());
 echo "</pre>";



?>