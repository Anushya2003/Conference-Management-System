
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @media screen and (max-width: 768px) {
  /* Add styles here that should apply when the screen width is 768px or less */
  .col-md-9 {
    flex: 100%;
    max-width: 100%;
  }
}
    </style>

  
</head>
<body>
        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> AVAILABLE CONFERENCE </h1>
                    </div>
                    <div class="card-body">
                   
                    <!--<button class="btn btn-success"> <a href="add.php" class="text-light"> Add New </a> </button>-->
                        
                        <br/>
                        <br/>

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Confid</th>
                            <th scope="col">ConfName</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Topic</th>
                            <th scope="col">RegistrationFee</th>
                            <th scope="col">Speaker</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $connection = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($connection,"dbcrud");

                                $sql = "select * from student";
                                $run = mysqli_query($connection, $sql);
                                $id= 1;

                                while($row = mysqli_fetch_array($run))
                                {
                                    $confid = $row['confid'];
                                    $confname = $row['confname'];
                                    $startdate = $row['startdate'];
                                    $enddate = $row['enddate'];
                                    $topic = $row['topic'];
                                    $regamount = $row['regamount'];
                                    $speaker = $row['speaker'];
                                ?>

                                   <tr>
                                        <td><?php echo $confid ?></td>
                                        <td><?php echo $confname ?></td>
                                        <td><?php echo $startdate ?></td>
                                        <td><?php echo $enddate ?></td>
                                        <td><?php echo $topic ?></td>
                                        <td><?php echo $regamount ?></td>
                                        <td><?php echo $speaker ?></td>
                                        <td><button class="btn btn-success">
                <a href='add.php?confname=<?php echo urlencode($confname); ?>' class="text-light"> Register </a>
            </button>
            &nbsp;</td>
                                        
                                   </tr>
                                    <?php $id++; } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
function insertEventName(eventName) {
    document.getElementById("eventInput").value = eventName;
}
</script>
</body>
</html>