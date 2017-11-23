<?php
  $username = "ieclass";
  $password = "12345";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <link rel="stylesheet" href="style4-3.css">
</head>
<body>
  <?php
    if ($username == $_POST['user'] && $password == $_POST['pass'])
    {
      ?>
    <section>
    <header>
      <h1>Registration</h1>
    </header>
    <form method="post" action="lab4-3report.php">
      <input type="hidden" name="user"value="<?php echo $_POST['user']; ?>">
      <div>
        First Name:
        <input type="text" name="fname" placeholder="Enter First Name" autofocus>
      </div>
      <div>
        Last Name:
        <input type="text" name="lname" placeholder="Enter Last Name">
      </div>
      <div>
        State:
        <input type="text" name="state" placeholder="Enter State">
      </div>
      <div>
        School:
        <input type="text" name="school" placeholder="Enter School">
      </div>
      <div>
        <input type="submit" value="Login" class="button">
      </div>
      <?php
    }
    else
    {
      echo "<section>Sorry, incorrect login.</section>";
    }
  ?>
</body>
</html>