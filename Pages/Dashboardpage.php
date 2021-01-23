<?php session_start();
  $trainees = $_SESSION['array'];  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainees Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/dashboardStyle.css">
    <script src="https://use.fontawesome.com/b127414002.js"></script>
    <script src="https://use.fontawesome.com/29797aa266.js"></script>
    <link rel="stylesheet" href="../Assests/fontawesome/css/fontawesome.min.css">
    
</head>




<body>

<?php include("./Component/Navbar.php"); 
$count =0;
$NumOfStudent = count($trainees);
foreach( $trainees as $value)
{
   for($i=0;$i<count($value['Project']);$i++)
   {  
       if($value['Project'][$i]['is_compleated']=="yes")
       {
           
           $count++;
           
        }
    }
}
echo" <div class='container-Dash'>

   <div class='card'>
        <div class='TopBody'>
                <div>
                    <h2>$NumOfStudent</h2>
                    <h4>All Trainee</h4>
                </div>
                <div>
                <i class='fa fa-user'></i>
                </div>
        </div>
        <div class='DownBody'>            
                    <p>% change</p>
                    <i class='fa fa-line-chart'></i>                
        </div>        
    </div>

    <div class='card'>
        <div class='TopBody'>
                <div>
                    <h2>$count</h2>
                    <h4>Project Complete</h4>
                </div>
                <div>
                <i class='fa fa-check-square'></i>
                </div>
        </div>
        <div class='DownBody' style='  background:linear-gradient(90deg, #56ccf2 0%,#2f80ed 100% );'>            
                    <p>% change</p>
                    <i class='fa fa-line-chart'></i>             
        </div>        
    </div>

    <div class='card' >
        <div class='TopBody'>
                <div>
                    <h2>15</h2>
                    <h4>All Trainer</h4>
                </div>
                <div>
                <i class='fa fa-user'></i>
                </div>
        </div>
        <div class='DownBody' style='  background:linear-gradient(90deg, #e0eafc 0%,#cfdef3 100% );'>            
                    <p>% change</p>
                    <i class='fa fa-line-chart'></i>                     
        </div> </div>";       
    
        ?>

<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>Trainee</th>
        <th>Projects</th>
        <th>Attendance</th>
        <th>Socail Media</th>
        <th>Remove</th>
    </tr>
    <?php 

    foreach($trainees as $value)
    {
echo "
    <tr>
        <td>#{$value['id']}</td>
        <td>{$value['name']}</td>
        <td>
            <div class='dropdown'>
            <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton2' data-bs-toggle='dropdown' aria-expanded='false'>
                Projects
            </button>
            <ul class='dropdown-menu dropdown-menu-dark' aria-labelledby='dropdownMenuButton2'>
                <li><a class='dropdown-item active' href='#'>{$value['Project'][0]['project_name']}</a></li>
                <li><a class='dropdown-item' href='#'>{$value['Project'][1]['project_name']}</a></li>
            </ul>
            </div>
        </td>
        <td></td>
        <td>
        <a href={$value['githubAcount']}>GitHub</a>
        <a href={$value['facebook']}>LinkedIn</a>
        </td>
        <td><button>Remove</button></td>
    </tr>";
    }
    ?>
</table>
</div>   






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>