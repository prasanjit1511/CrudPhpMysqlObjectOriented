<?php

include "database.php";
$obj = new Database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="save-data.php" method="post">

       <label for="">Name</label>
       <input type="text" name="sname"><br><br>

       <label for="">Age</label>
       <input type="number" name="sage"><br><br>

       <label for="">City</label>
       <select name="scity" id="">
        <?php

        $obj->select('city');
        $result = $obj->getResult();

        foreach($result as list("cid"=>$cid,"cityname"=>$cname)){

             echo "<option value='$cid'>$cname</option>";

        }


        ?>
        
        
       </select><br><br>

       <input type="Submit" value="save">



    </form>
</body>
</html>