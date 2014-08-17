<?php
  include("../controller/my_lib.php");

  if (isset($_REQUEST['submit'])) {
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];

    if ($password != $cpassword) {
      header("Location: register.php");
    }

    $obj = new crud("localhost", "root", "", "mvc_crud_0001");
    extract($_REQUEST);

    $obj->insert($name, $lname, $email, $password, $gender, $education);
  }
?>

<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
  <h1>REGISTRATION PAGE</h1>
  <div id="content-wrapper">
    <div id="signin-wrapper">
      <div>
        <form action="#" method="POST"> 
          <label>First Name</label>
          <input type="text" name="fname" value="" placeholder="chopstick"><br />
          <label>Last Name</label>
          <input type="text" name="lname" value="" placeholder="dela crus"><br />
          <label>Email</label>
          <input type="text" name="email" value="" placeholder="test@yahoo.com"><br />
          <label>Password</label>
          <input type="password" name="password" value="" placeholder="admin1234"><br />
          <label>Confirm Password</label>
          <input type="password" name="cpassword" value="" placeholder="admin1234"><br />
          <label>Gender</label>
          <input type="text" name="gender" value="" placeholder="male"><br />
          <label>Education</label>
          <input type="text" name="education" value="" placeholder="scientest"><br />
          <input type="submit" name="submit" value="Register">
        </form>
      </div>
    </div>
  </div>
</body>
</html>