<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainees Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/styleprofile.css">
    <script src="https://use.fontawesome.com/b127414002.js"></script>
</head>





<body class="profile-page sidebar-collapse" style="background:#ddd">
<?php include("./Component/Navbar.php"); ?>
<div class="container  ">

   

<?php

$trainees = $_SESSION['array'];

if($_POST != null)
{
    $id = $_POST['id'];

    foreach($trainees as $value) {
            
           if($value['id'] == $id){   

          echo " 
                        <div class='avatar-flip'>
                                <img src={$value['images']} height='150' width='150'>
                                <img src='http://i1112.photobucket.com/albums/k497/animalsbeingdicks/abd-3-12-2015.gif~original' height='150' width='150'>
                        </div>
                            <h2>{$value['name']}</h2>
                        <div class=''>
                                <a href={$value['githubAcount']}><i class='fa fa-github fa-2x'></i></a>
                                <a href={$value['facebook']}><i class='fa fa-linkedin-square fa-2x'></i></a>
                        </div>  
                        <table class='table table-striped table-borderless mt-5  table-hover'>
                            <tr>
                                <th>Projects</th>
                                <th>Completed</th>
                            </tr>
                            <tr>
                                <td>{$value['Project'][0]['project_name']}</td>
                                <td>{$value['Project'][0]['is_compleated']}</td>
                            </tr>
                            <tr>
                                <td>{$value['Project'][1]['project_name']}</td>
                                <td>{$value['Project'][1]['is_compleated']}</td>
                            </tr>
                        </table>
                           
                ";
                }
            }
        }else
        {
            header('Location: NotFoundPage.php');
        }
?>


    <p>Morbi leo risus,</p>
    <form method="post" action="index.php">
        <input type="submit" class="btn-danger" style="border:none; outline:none; border-raduis:10px" value="Back"/>
    </form>
</div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
     

</html>