<?php @session_start(); $trainees = $_SESSION['array']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainees Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>




<body>

<?php include("./Component/Navbar.php");?>
<div class="container-fluid text-center">

<table class="table table-dark table-striped mt-5 table-hover" >
    <tr class="table-light">
        <th> Name </th>
        <th>Time check in</th>
        <th>Time check out</th>
    </tr>
<?php

foreach($trainees as $value)
{
    //------ Time Check in ------------>
    $temp_in = ($value['attendance'][0]['check_in']);
    $check_in = substr($temp_in, strrpos($temp_in, ' ') + 1);

    //------ Time Check out ------------>
    $temp_out = ($value['attendance'][0]['check_out']); 
    $check_out = substr($temp_out, strrpos($temp_out, ' ') + 1);

    //------Check out if period less than 8 hours 
    //------make row in red else make it in green.
    $check_in_hours = substr($check_in,0 ,strpos($check_in, ":"));  
    $check_out_hours = substr($check_out,0 ,strpos($check_out, ":")); 
   
    $result = abs((int)$check_out_hours-(int)$check_in_hours);

    if($result >= 8)
    {
    echo"<tr class='table-success'>
            <td>{$value['name']}</td>
            <td>{$check_in}</td>
            <td>{$check_out}</td>
        </tr>";
    }else
    {
        echo"<tr class='table-danger'>
        <td>{$value['name']}</td>
        <td>{$check_in}</td>
        <td>{$check_out}</td>
    </tr>";
    }
} ;

?>

</table>
<!-- <table class="table-danger"></table> -->
</div>

     
</body>
</html>