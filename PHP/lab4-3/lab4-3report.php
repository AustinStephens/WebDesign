<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <link rel="stylesheet" href="style4-3.css">
</head>
<body>
  <header>
    <h1>Login Report</h1>
  </header>
  <article>
    <?php
      if (isset($_POST['user']) && $_POST['user'] == "ieclass")
      {
        ?>
        <p><strong>User's Browser: </strong><?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p><strong>Host IP Address: </strong><?php echo $_SERVER['SERVER_ADDR']; ?></p>
        <p><strong>Host Name: </strong><?php echo $_SERVER['SERVER_NAME']; ?></p>
        <p><strong>First Name: </strong><?php echo $_POST['fname']; ?></p>
        <p><strong>Last Name: </strong><?php echo $_POST['lname']; ?></p>
        <p><strong>State: </strong><?php echo $_POST['state']; ?></p>
        <p><strong>School: </strong><?php echo $_POST['school']; ?></p>
        <?php
      }
      else
      {
        header("location:lab4-3.php");
      }
    ?>
  </article>
</body>
</html>