<?php
  include("dbconnect.php");
  include("verify.php");
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
    <nav>
      <a href="lab7-2.php">&lt;&lt;Back To Home</a>
    </nav>
    <div class="category">
      <h2 class="heading">Current Officers</h2>
      <ul>
        <?php
          $sql_command = "SELECT * FROM `7-2officers`";
          $result = mysqli_query($con, $sql_command);
          while ($row = mysqli_fetch_array($result))
          {
            $id = $row['id'];
            $officer = $row['member'];
            echo "<form method='post' action='process.php'>";
            echo "<input type='hidden' name='username' value='$_POST[username]'>";
            echo "<input type='hidden' name='pass' value='$_POST[pass]'>";
            echo "<input type='hidden' name='id' value='$id'>";
            echo "<input type='hidden' name='process' value='Delete Officer'>"
            echo "<li><input type='submit' value='Delete Officer' class='button'>$member</li>";
            echo "</form>";
          }
        ?>
        <form method="post" action="process.php">
          <input type="hidden" name="username" value="<?php $_POST['username']; ?>">
          <input type="hidden" name="pass" value="<?php $_POST['pass']; ?>">
          <input type="hidden" name="process" value="Add Officer">
          <table>
            <tr>
              <td colspan="2">Add New Officer</td>
            </tr>
            <tr>  
              <td><input type="text" name="officer" class="text"></td><td><input type="submit" value="Add Officer" class="button"></td>
            </tr>
          <table>
      </ul>
    </div>
    <div class="category">
      <h2 class="heading">Current Admins</h2>
      <?php
        $sql_command = "SELECT * FROM `7-2usernames`";
        $result = mysqli_query($con, $sql_command);
        while ($row = mysqli_fetch_array($result))
          {
            $id = $row['id'];
            $admin = $row['username'];
            echo "<form method='post' action='process.php'>"
            echo "<input type='hidden' name='username' value='$_POST[username]'>";
            echo "<input type='hidden' name='pass' value='$_POST[pass]'>";
            echo "<input type='hidden' name='id' value='$id'>";
            echo "<input type='hidden' name='process' value='Delete Admin'>";
            echo "<input type='submit' class='button' value='Delete Admin'>$admin";
            echo "</form>";
          }
      ?>
    </div>
    <div class="category">
      <h2 class="heading">Add New Site Admin</h2>
      <form method="post" action="process.php">
        <input type='hidden' name='username' value='<?php $_POST['username']; ?>'>
        <input type='hidden' name='pass' value='<?php $_POST['pass']; ?>'>
        <input type='hidden' name='process' value='Add Admin'>
        <table>
          <tr>
            <td>Username:</td><td>Password:</td>
          </tr>
           <tr>
            <td><input type="text" name="newuser" class="text"></td><td><input type="text" name="newpass" class="text"></td><td><input type="submit" value="Add Admin" class="button"></td>
          </tr>
        </table>
      </form>
    </div>
    <div class="category">
      <h2 class="heading">Current News Articles</h2>
      <table>
        <?php
          $sql_command = "SELECT * FROM `7-2news`";
          $result = mysqli_query($con, $sql_command);
          while ($row = mysqli_fetch_array($result))
            {
              $id = $row['id'];
              $news = $row['news'];
              echo "<form method='post' action='process.php'>"
              echo "<input type='hidden' name='username' value='$_POST[username]'>";
              echo "<input type='hidden' name='pass' value='$_POST[pass]'>";
              echo "<input type='hidden' name='id' value='$id'>";
              echo "<input type='hidden' name='process' value='Delete Article'>";
              echo "<tr><td><p>$news</p></td><td><input type='submit' value='Delete Article' class='button'></td></tr>";
              echo "</form>";
            }
        ?>
      </table>
    </div>
    <div class="category">
      <h2 class="heading">Add New Article</h2>
      <form method="post" action="process.php">
        <input type='hidden' name='username' value='<?php $_POST['username']; ?>'>
        <input type='hidden' name='pass' value='<?php $_POST['pass']; ?>'>
        <input type='hidden' name='process' value='Add Article'>
        <table>
          <tr>
            <td><textarea name="news" cols="50" rows="5" class="text"></td><td><input type="submit" value="Add Article" class="button"></td>
          </tr>
        </table>
      </form>
    </div>
  </section>
</body>
</html>