<?php
  include("dbconnect.php");
  include("verify.php");
  if($_POST['process'] == "Add Officer")
  {
    $sql_command = "INSERT INTO `lab7-2offcers`(officer) VALUES ($_POST[officer])";
    mysqli_query($con, $sql_command) OR die(mysqli_error($con));
  }
  else if ($_POST['process'] == "Add Admin")
  {
    $sql_command = "INSERT INTO `7-2usernames` (username, password) VALUES ($_POST[newuser], $_POST[newpass])";
    mysqli_query($con, $sql_command) or die (mysqli_error($con));
  }
  else if ($_POST['process'] == "Add Article")
  {
    $sql_command = "INSERT INTO `7-2news` (news) VALUES ($_POST[news])";
    mysqli_query($con, $sql_command) or die (mysqli_error($con));
  }
  else if ($_POST['process'] == "Delete Officer")
  {
    $sql_command = "DELETE FROM `7-2officers` WHERE id = $_POST[id]";
    mysqli_query($con, $sql_command) or die (mysqli_error($con));
  }
  else if ($_POST['process'] == "Delete Admin")
  {
    $sql_command = "DELETE FROM `7-2usernames` WHERE id = $_POST[id]";
    mysqli_query($con, $sql_command) or die (mysqli_error($con));
  }
  else if ($_POST['process'] == "Delete Article")
  {
    $sql_command = "DELETE FROM `7-2news` WHERE id = $_POST[id]";
    mysqli_query($con, $sql_command) or die (mysqli_error($con));
  }
  header("location:7-2admin.php?username=$_POST[username]&pass=$_POST[pass]");
?>