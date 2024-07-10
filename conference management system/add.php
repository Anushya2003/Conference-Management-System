<?php
    
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"dbcrud");

    if(isset($_POST['submit']))
        {
          $name = $_POST['name'];
          $address = $_POST['address'];
         $mobile = $_POST['mobile'];
         $email = $_POST['email'];
         $event = $_POST['event'];

           $sql = "insert into register(name,address,mobile,email,event)values(' $name',' $address',' $mobile','$email','$event')";

           if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("Regindex.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
           }
        }
        

// Check if the conference name is set in the session
$confname = $_GET['confname'] ?? 'Default Conference Name';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> Event Registration </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" method="post"   >
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name" required> 
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"  placeholder="Enter Address" required> 
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name ="mobile" class="form-control"  placeholder="Enter Mobile" required> 
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" id="email" name ="email" class="form-control"  placeholder="Enter email" required> 
                        </div>
                        <div class="form-group">
                            <label>Submit paper</label>
                            <input type="file" name ="paper" class="form-control"  placeholder="" > 
                        </div>
                        <div class="form-group" >
                                <label for="event">Event</label>
                                <input type="text" id="eventInput" name="event" class="form-control"   placeholder="Enter event" value="<?php echo htmlspecialchars($confname); ?>" readonly> 
                        </div>
                        <br/>
                        <!--<button type="submit" onsubmit="sendEmail(); reset(); return false;" class="btn btn-primary" name="submit" value="Register">Register</button>-->
                        <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>
                   
                    </div>
                    </div>

                </div>
            
            </div>
        </div>
        

</body>
</html>


