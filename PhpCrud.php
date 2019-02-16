<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
     <?php require_once 'ProcessConnectToDB.php';?>
    
     <?php if (isset($_SESSION['message'])): ?>  
        
        <div class= "alert alert-<?=$_SESSION['msg_type']?>">
            <?php echo $_SESSION['message'];
                  unset($_SESSION['message']);
            ?>            
        </div>
         <?php endif;?>
          
        
    
    <div class="container">
     
        <?php
        $mysqli = new mysqli('localhost', 'root', NULL, 'cuddb')or die(mysqli_error($mysqli));
        
        $result = $mysqli ->query("select * from cuddata")or die($mysqli->error); ?>
     
        
    <div class="row justify-content-center">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Name</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php while ($row = $result->fetch_assoc()): ?> 
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['location'];?></td>
                <td>
                    <a href="PhpCrud.php?edit= <?php echo $row['id']; ?>" class="btn btn-primary">
                    edit
                    </a>
                    <a href="ProcessConnectToDB.php?delete= <?php echo $row['id']; ?>" class="btn btn-danger">
                    delete
                    </a>
                    
                    
                </td>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
    
    <div class="row justify-content-center">
        <form action="ProcessConnectToDB.php" method="POST">
            <input type="hidden" name="id" value=" <?php echo $id; ?>" />
        <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control"  placeholder="Eneter your name" name="name" value="<?php echo $name; ?>"/>
        </div>
        <div class="form-group">
         <label>Location:</label>
         <input type="text" class="form-control" placeholder= "Eneter your location" value="<?php echo $location; ?>"  name="location" />
         </div>
         <div class="form-group">
          <?php if($update == true): ?>            
                <button type="submit" name="update" class="btn btn-primary ">Update</button> 
           
          <?php else: ?> 
          
             <button type="submit" name="save" class="btn btn-primary ">save</button> 
             
             <?php endif ;?>
             
         </div>         
    </form>
    </div>
    </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
