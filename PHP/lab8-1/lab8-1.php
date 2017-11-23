<?php

include("dbconnect.php");
if (isset($_POST['code'])
{
  $code = $_POST['code'];
  $sql_command = "UPDATE `lab8-1` SET code=\"$code\" WHERE 1";
  mysqli_query($con, $sql_command) OR die("I could not update code field because: " . mysqli_error($con));
  echo "<script>window.open('lab8-1preview.php','preview','width=800. height=600');</script>";
}
else
{
  $_POST['code'] = "";
}
?>
<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title>Austin Stephens</title>
  <style>
    body {background-color: #7373d9;
          font-family: arial;}
          
    header {background-color: #313186;
            color: #ffffff;
            width: 600px;
            height: 50px;
            margin: auto;
            margin-bottom: 10px;
            text-align: center;}
            
    h1 {line-height: 50px;}
    
    section {width: 600px;
             height: 400px;
             margin: auto;
             padding: 10px;
             background-color: #1b1bb3;
             text-align: center;
             border: solid #090974 3px;
             border-radius: 10px;}
             
    textarea {background-color: #a4a4d3;
              font-size: 12pt;
              border: solid #21216d 1px;}
              
    input[type=submit] {background-color: #21216d;
                        padding: 5px;
                        border-radius: 5px;
                        margin: 5px;
                        color: #ffffff;}
  </style>
</head>
<body>
  <header>
    <h1>Practice HTML Editor</h1>
  </header>
  <section>
    <form method="post" action="lab8-1.php">
      <textarea name="code" rows="20" cols="55"><?php echo $code; ?></textarea>
      <input type="submit" value="Save &amp; Preview">
    </form>
  </section>
</body>
</html>