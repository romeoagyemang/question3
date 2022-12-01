<?php

include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Information</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container"><br><br><br><br><br>
    <h3 class="text-align text-center">People's Information</h3><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  </thead>
        <tbody>
                <?php                  
                $query = 'SELECT * FROM people';
                    $result = mysqli_query($con, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['firstname'].'</td>';
                            echo '<td>'. $row['lastname'].'</td>';
                            echo '<td>'. $row['age'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            //echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['people_id'] . '"> EDIT </a> ';
                            echo '</tr> ';
                
                        };

?>
</tbody>
       <script>
        
       </script>
 
</body>
</html>