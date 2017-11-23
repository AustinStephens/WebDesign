<?php
  require("dbconnect.php");
  if (isset($_POST['submit'))
  {
    if ($_POST['submit'] == "Add")
    {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $sql_command = "INSERT INTO `7-1_list` (fname, lname, email) VALUES (\"$fname\", \"$lname\", \"$email\")";
      mysqli_query($con, $sql_command) OR die(mysqli_error($con));
    }
    else
    {
      $id = $_{PST['id'];
      $sql_command = "DELETE FROM `7-1_list` WHERE id = \"$id\"";
      mysqli_query($con, $sql_command) OR die("Record could not be deleted because " + mysqli_error($con);
    }
  }
?>
<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <link rel="stylesheet" href="7-2style.css">
</head>
<body>
  <header>
    <h1>IEC Technology Club</h1>
  </header>
  <section>
    <article>
      <h2>Latest News</h2>
      <?php
        sql_command = "SELECT * FROM `7-2news`";
          $result = mysqli_query($con, $sql_command) OR die(mysqli_error($con));
          while ($row = mysqli_fetch_array($result))
          {
            $news = $row[news];
            echo "<p class='news'>$news</p>";
          }
      ?>
    </article>
    <aside>
      <h2>Club Officers</h2>
      <ul>
        <?php
          $sql_command = "SELECT * FROM `7-2officers`";
          $result = mysqli_query($con, $sql_command) OR die(mysqli_error($con));
          while ($row = mysqli_fetch_array($result))
          {
            $officer = $row[officer];
            echo "<li>$officer";
          }
        ?>
      </ul>
    </aside>
    <div id="login">
      <form method="post" action="7-2admin.php">
        <div>
          Username: <input type="text" name="username" class="text">
        </div>
        <div>
          Pasword: <input type="password" name="pass" class="text">
        </div>
        <div>
          <input type="submit" value="Login" class="button">
        </div>
      </form>
    </div>
  </section>
</body>
</html>