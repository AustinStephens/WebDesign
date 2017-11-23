<?php
  $approved = "";
  if (isset($_GET['username']) && isset($_GET['pass']))
  {
    $_POST['username'] = $_GET['username'];
    $_POST['pass'] = $_GET['pass'];
  }
  
  if ($_POST['username'] == "admin" && $_POST['pass'] == "1234")
  {
    $approved = true;
  }
  else
  {
    $sql_command = "SELECT * FROM `7-2usernames` WHERE username = $_POST[username]";
    $result = mysqli_query($con, $sql_command);
    while ($row = mysqli_fetch_array($result))
    {
      $password = $row[pass];
      if ($password == $_POST['pass'])
      {
        $approved = true;
        break;
      }
    }
  }
  
  if ($approved != true || !isset($_POST['username']) || !isset($_POST['pass']))
  {
    header("location:lab7-2.php");
  }
?>