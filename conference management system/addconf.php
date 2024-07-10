<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"dbcrud");

    if(isset($_POST['submit'])) {
      $confid = $_POST['confid'];
      $confname = $_POST['confname'];
      $startdate = $_POST['startdate'];
      $enddate = $_POST['enddate'];
      $topic = $_POST['topic'];
      $regamount = $_POST['regamount'];
      $speaker = $_POST['speaker'];

      $sql = "insert into student(confid,confname,startdate,enddate,topic,regamount,speaker)values('$confid', '$confname', '$startdate', '$enddate', '$topic', '$regamount', '$speaker')";

      if(mysqli_query($connection, $sql)) {
          echo '<script>location.replace("organizerindex.php")</script>';  
      } else {
        echo "Some thing Error" . $connection->error;
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  font-size: 62.5%; /* 10/16 = 0.625 * 100 */
}

body {
  background: url('createconf.avif');
  background-position: center;
  background-size: cover;
  backdrop-filter: blur(8px);
  color: #3c3c39;

  display: flex;
  justify-content: center;
  height: 100vh;
  font-family: 'Monsterrat', sans-serif;
  position: relative;
  padding: 2rem 0;
}

.checkout-container {
  /* background-color: red; */
  max-width: 120rem;
  height: 50rem;
  display: grid;
  grid-template-columns: 1fr 1fr;
  justify-content: center;
  /* margin-bottom: 10rem; */
}

em {
  font-style: normal;
  font-weight: 700;
}

hr {
  color: #fff;
  margin-bottom: 1.2rem;
}

/* Left Side Of Container */
.left-side {
  background: url('createconf.avif');
  background-position: center;
  background-size: cover;
  position: relative;
}

.text-box {
  background: rgba(95, 121, 134, 0.8);
  width: 100%;
  padding: 1rem 2rem;
  position: absolute;
  bottom: 0;
}

/* Left container text */

.home-heading {
  color: #e8e8e1;
  font-size: 3.2rem;
  font-weight: 700;
  line-height: 1;
  margin-bottom: 1rem;
}

.home-price {
  color: #aeae97;
  font-size: 2rem;
  margin-bottom: 1.2rem;
}

.home-desc {
  color: #e8e8e1;
  font-size: 1.2rem;
  line-height: 1.5;
  letter-spacing: 0.5px;
}

/* Right Side of container */

.right-side {
  background-color: #fff;
  padding: 1.8rem 3.2rem;
}

.receipt {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  border-bottom: solid 1px;
  margin-bottom: 1rem;
}

.receipt-heading {
  font-size: 1.6rem;
  text-align: left;
}

.table {
  border-collapse: separate;
  border-spacing: 0 1.5rem;
  color: #64645f;
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
  width: 100%;
}

.total td {
  font-size: 1.4rem;
  font-weight: 700;
}

.price {
  text-align: end;
}

/* Payment Section */

.payment-heading {
  font-size: 1.4rem;
  margin-bottom: 1rem;
}

.form-box {
  display: grid;
  grid-template-rows: 1fr;
  gap: 1.5rem;
}

.card-logo {
  font-size: 2rem;
}

.expires,
.form-box label {
  font-size: 1.2rem;
  font-weight: 700;
}

.form-box input {
  font-family: inherit;
  font-size: 1.2rem;
  padding: 0.5rem;
  width: 100%;
}

.form-box select {
  padding: 0.5rem;
}

.form-box #cvv {
  width: 25%;
}

.cvv-info:link,
.cvv-info:visited {
  color: inherit;
  text-decoration: underline;
}

.cvv-info:hover,
.cvv-info:active {
  color: #5f7986;
  text-decoration: none;
}

.btn {
  background-color: #4c616b;
  border: none;
  border-radius: 8px;
  color: #eff2f3;
  font-size: 1.6rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  margin-bottom: 1rem;
  padding: 1.5rem;
  cursor: pointer;
}

.btn:hover {
  background-color: #5f7986;
  transition: ease-out 0.1s;
}

.footer-text {
  font-size: 1rem;
  text-align: center;
}

.form-box *:focus {
  outline: none;
  box-shadow: 0 0 0 0.8rem rgba(139, 139, 107, 0.5);
  border-radius: 8px;
}
@media only screen and (max-width: 768px) {
  .checkout-container {
    grid-template-columns: 1fr; /* Change to a single column layout */
    gap: 2rem; /* Increase gap between elements */
  }

  .right-side {
    padding: 1.8rem; /* Adjust padding */
  }

  .form-box {
    gap: 1rem; /* Increase gap between form elements */
  }

  .form-box input,
  .form-box select,
  .form-box textarea {
    width: 100%; /* Make form elements full width */
  }

  .card-experation {
    display: flex;
    flex-direction: column;
  }

  .card-experation input {
    margin-bottom: 1rem; /* Add space between date inputs */
  }

  .btn {
    font-size: 1.4rem; /* Adjust button font size */
  }
}
</style>
    
  </head>
<body>

<div class="checkout-container">
    <div class="left-side">
      <div class="text-box">
        <h1 class="home-heading"></h1>
        <p class="home-price"><em> </em></p>
        <hr class="left-hr" />
        <p class="home-desc"><em> </em> <em></em></p>
        <p class="home-desc">
          <em> </em><em></em>
        </p>
      </div>
    </div>

    <div class="right-side">
     

      <div class="payment-info">
        <h3 class="payment-heading">Create a new Conference!</h3>
        <form
          class="form-box"
           action="addconf.php" method="post" 
        >
        <div>
          <label for="full-name">Conference id</label>
          <input
            name="confid"
            placeholder="087"
            required
            type="text" class="form-control" 
          />
        </div>
        <div>
          <label for="full-name">Conference Name</label>
          <input
            name="confname"
            placeholder="world wide"
            required
            type="text" class="form-control" 
          />
        </div>
        <div>
          <label for="description">Description</label>
          <textarea id="description" name="description" class="form-control"  cols="30" rows="5" placeholder="Description" required></textarea>
      </div>
      <div>
            <div class="card-experation">
              <label for="expiration-month">Start Date</label>
              <input type="date" id="startdate" class="form-control"  name="startdate" required>

              <label class="expiration-year">End date</label>
              <input type="date"id="enddate" class="form-control"  name="enddate" required>
            </div>
          </div>
          <div>
            <label for="full-name">Topic</label>
            <input
              id="topic"
              name="topic" class="form-control" 
              placeholder=""
              required
              type="text"
            />
          </div>
          <div>
            <label for="full-name">Registration amount</label>
            <input
              id="regamount"
              name="regamount" class="form-control" 
              placeholder=""
              required
              type="text"
            />
          </div>

          <div>
            <label for="full-name">Speaker</label>
            <input
              id="speaker"
              name="speaker" class="form-control" 
              placeholder="Satoshi Nakamoto"
              required
              type="text"
            />
          </div>

          

          <input type="submit"   class="btn btn-primary" name="submit" value="ADD">
        </form>

        
      </div>
    </div>
  </div>
  <script
      src="https://kit.fontawesome.com/bb515311f9.js"
      crossorigin="anonymous"
    ></script>
    <script>
        function navigateToChoose() {
        window.location.href = "organizerindex.php";
        return false; // Prevent form submission
    }
      </script>
</body>
</html>