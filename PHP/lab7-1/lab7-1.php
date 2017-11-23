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
  <style>
    body {background-color: #61b4cf;
          font-family: arial;}
          
    article {width: 650px;
             min-height: 200px;
             margin: auto;}
             
    header {width: 400px;
            height: 40px;
            margin: auto;
            background-color: #216278;
            text-align: center;
            border-radius: 5px;
            color: #ffffff;}
            
    h1 {line-height: 40px;}
    
    section {width: 600px;
             min-height: 100px;
             margin: auto;
             margin-top: 10px;
             background-color: #67e667;
             border-radius: 5px;}
             
    td {padding: 5px;}
    
    th {width: 150px;
        background-color: #67c367;
        text-align: center;}
        
    .button {background-color: #a65500;
             border-radius: 5px;
             border: solid #000000 1px;
             color: #ffffff;
             padding: 5px;}
             
    .text {background-color: #aed9e7;
           border: solid #000000 1px;
           padding: 3px;
           border-radius: 5px;}
           
    .even {background-color: #024e68;
           color: #ffffff;}
           
    .odd {background-color: #008500;
          color: #ffffff;}
  </style>
</head>
<body>
  <header>
    <h1>Member Roster</h1>
  </header>
  <article>
    <section>
      <table>
        <tr>
          <th>First Name</th><th>Last Name</th><th>Email</th>
        </tr>
        <?php
          $counter = 2;
          $sql_command = "SELECT * FROM `7-1_list`";
          $result = mysqli_query($con, $sql_command)
                OR die("Could not get records because " + mysqli_error($con);
          while($row = mysqli_fetch_array($result))
          {
            $id = $row['id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            if ($counter % 2)
            {
              echo "<tr><td class='odd'>$fname</td><td class='odd'>$lname</td><td class='odd'>$email</td><td><form method='post' action='lab7-1.php'><input type='hidden' name='id' value='$id'><input type='submit' value='delete' class='button'></form></td><tr>";
            }
            else
            {
              echo "<tr><td class='even'>$fname</td><td class='odd'>$lname</td><td class='odd'>$email</td><td><form method='post' action='lab7-1.php'><input type='hidden' name='id' value='$id'><input type='submit' value='delete' class='button'></form></td><tr>";
            }
            $counter++;
          }        
        ?>
      </table>
    </section>
    <section>
      <form method="post" action="lab7-1.php">
        <table>
          <tr>
            <th>First Name</th><th>Last Name</th><th>Email Address</th><th>&nbsp;</th>
          </tr>
          <tr>
            <td><input type="text" name="fname" class="text"></td><td><input type="text" name="lname" class="text"></td><td><input type="text" name="email" class="text"></td><td><input type="submit" name="submit" value="add" class="button"></td>
          </tr>
        </table>
      </form>
    </section>
  </article>
</body>
</html>