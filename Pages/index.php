<?php session_start();
  $trainees = $_SESSION['array'];  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainees Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>


<body>


<?php  
        if($_SESSION == null)
        {
            header('Location: ../Database/DB.php');
        }      
 ?>
<?php include("./Component/Navbar.php"); ?>


<div class="container-fluid info bg-dark ">
    <?php
  echo "<div class='row d-flex justify-content-center'>";
    foreach($trainees as $value)
    {
      echo "
          <div class='card m-3 bg-secondary  mb-3 text-white p-2' style='width: 18rem; '>
                <form method='post' action='ProfilePage.php'>
                     <input  type='text' name='id' value={$value['id']} hidden >
                     <img src= {$value['images']} class='card-img-top' >
                     <div class='card-body'>
                        
                      <h4>{$value['name']}</h4>
                      <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <input type='submit' value='Profile' class='btn btn-light'/>
                      </div>
                </form>
          </div>
        ";
    }


  echo "</div>"?>




</div>

     
</body>
</html>